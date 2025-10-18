<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Load_requests extends Load_Request_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function getProductsList()
	{
		$page = $this->input->post('page');
		$data = [];
		$data1['total_rows'] = $this->Products_model->getProductsCount($data);
		$data1["url"]         = base_url('#');
		$data1["limit"]  = 10;
		$data1["page"]  = $page;
        $pagination_config = $this->App_model->pagination($data1);
        
        $this->ajax_pagination->initialize($pagination_config);
        $data["links"]   = $this->ajax_pagination->create_links();
        $data['start'] = ($page-1);
        $data["limit"]  = 10;
		$data['products'] = $this->Products_model->getProducts($data);
		$this->load->view('admin/load/list/products',$data);
	}

	public function getPayment()
	{
		$data['id'] = $this->input->post('id');
		$data['payment'] = $this->Payment_model->getPayments($data);
		$this->load->view('admin/load/payment',$data);
	}

	public function getStudent()
	{
		$id = $this->input->post('id');
		$data['student'] = $this->App_model->get_record_row('registrationForm',array('id'=>$id));
		$this->load->view('admin/load/student',$data);
	}
	
}