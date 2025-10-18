<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoadRequest extends Load_Request_Controller {

	function __construct()
	{
		parent::__construct();
	}

    public function faqDark()
    {   
        $this->load->view('frontend/shortcode/faq-dark');
    }

    public function blog_v2()
	{   
    	$json_url = 'https://detailersleague.com/dlblog/wp-json/wp/v2/posts?per_page=6';
		$ch = curl_init($json_url);
	    $options = array(
	        CURLOPT_RETURNTRANSFER => true,
	        CURLOPT_HTTPHEADER => array('Content-type: application/json')
	    );
	    curl_setopt_array($ch, $options);
	    $result =  curl_exec($ch);
	    curl_close($ch);
	    $data['blogs'] = json_decode($result, true);
        $this->load->view('frontend/shortcode/blog-v2', $data);
    }

    public function cform()
    {   
        $this->load->view('frontend/shortcode/contact-form');
    }

	public function getAddress()
	{
		$data['address'] = $this->App_model->get_record_result('user_address',array('userId'=>$this->session->userdata('ID')));
		$this->load->view('frontend/loadModal/address',$data);
	}

	public function viewOrder()
	{
		$data['id'] = $this->input->post('id');
		$data['order'] = $this->App_model->get_record_row('orders',$data);
		$this->load->view('frontend/loadModal/order',$data);
	}

	public function getProducts()
	{	
		$data = [];
		$page = $this->input->post('page');
		$data['subcategoryId'] = $this->input->post('catId');
		$data['search'] = $this->input->post('search');
		$data1['total_rows'] = $this->Products_model->getShopProductsCount($data);
		$data1["url"]         = base_url('#');
		$data1["limit"]  = 16;
		$data1["page"]  = $page;
        $pagination_config = $this->App_model->pagination($data1);
        $this->ajax_pagination->initialize($pagination_config);
        $data["links"]   = $this->ajax_pagination->create_links();
        $data['start'] = ($page-1);
        $data["limit"]  = 16;
        $data['products'] = $this->Products_model->getShopProducts($data);
		$this->load->view('frontend/loadModal/getProducts',$data);
	}

	public function getSubcat()
	{
		$id = $this->input->post('catId');
		$data['category'] = $this->App_model->get_record_result('product_category',array('parentId'=>$id));
		$data['sub'] = $this->input->post('category');
		$data['slug'] = $this->input->post('slug');
		$this->load->view('frontend/loadModal/getSubcat',$data);
	}

	public function getResources()
	{
		$this->load->view('frontend/loadModal/getResources');
	}

	public function getAbout()
	{
		$this->load->view('frontend/loadModal/getAbout');
	}

	public function getHelp()
	{
		$this->load->view('frontend/loadModal/getHelp');
	}

	public function getCertifiedDetailers()
	{
		$this->load->view('frontend/loadModal/getCertifiedDetailers');
	}

	public function getWorkshopPrograms()
	{
		$this->load->view('frontend/loadModal/getWorkshopPrograms');
	}
	
	public function getOnlinePrograms()
	{
		$this->load->view('frontend/loadModal/getOnlinePrograms');
	}

	public function getBatches()
	{	
		$data['tithi'] = $this->App_model->get_record_result('batches',array('type' => 'Date','batchDate >' => date("Y-m-d")));
		$this->load->view('frontend/loadModal/getBatches', $data);
	}

}
