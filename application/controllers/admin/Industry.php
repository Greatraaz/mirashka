<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Industry extends Admin_Controller {
	
	var $sub_title ='Industry';
	
	function __construct()
	{
		parent::__construct();		
	}
		
	public function index()
	{
		$data['sub_title'] = $this->sub_title;
		$data['industry']=$this->App_model->get_record_result('industry', array('status' => 1));	
		$this->view('list/industry', $data);
	}
	
	public function edit()
	{
		$id = $this->input->post('id');
		$data['industry']=$this->App_model->get_record_row('industry',array('id'=>$id));
		$this->load->view('admin/update/industry', $data);		
	}

	public function add()
	{
		$error = false;
		$data['name'] = $this->input->post('name');
		$data['slug'] = $this->createIndustrySlug($data['name']);
		$data['icon'] = $this->input->post('icon');
		$data['status'] = $this->input->post('status');
		
		if($data['name']=='')
		{
			$error= true;
			$response['name'] = "Industry name is required*";
		}
		else
		{
			$response['name'] = "";
		}

		if($data['icon']=='')
		{
			$error= true;
			$response['icon'] = "Icon is required*";
		}
		else
		{
			$response['icon'] = "";
		}

		if(empty($_FILES['image']['name']))
		{
			$error= true;
			$response['image'] = "Image is required*";
		}
		else
		{
			$response['image'] = "";
		}
		
		if(!$error)
		{
			$industry=$this->App_model->get_record_row('industry',array('name'=>$data['name']));
			
			if(!$industry)
			{	
				if(isset($_FILES['image']['name']) && $_FILES['image']['name']!='')
				{
					$config['upload_path']=$this->upload_path."assets/uploads/industry/";
				    $config['allowed_types']='jpg|png|jpeg|webp';
				    /*$config['max_size']      = '100';
				  	$config['max_width']     = '600';
				  	$config['max_height']    = '600';*/
				    $config['file_name'] = $data['slug'];
				    $this->upload->initialize($config);
				    if ($this->upload->do_upload('image'))
				    {
				        $uploaded = array('upload_data' => $this->upload->data());
				        $data['image']="assets/uploads/industry/".$uploaded['upload_data']['file_name'];
				    }
				    else
				    {
				      	$response = array('image' => $this->upload->display_errors());
				        $response['status'] = 0;
				        echo json_encode($response);
				        die();
				    }
				}

				$result=$this->App_model->insert_record('industry',$data);
				if($result)
				{
					$response['status'] = 1;
					$response['message'] = "Industry added successfully";
				}
				else
				{
					$response['status'] = 0;
					$response['message'] = "Error in adding Industry";
				}
			}
			else
			{
				$response['status'] = 0;
				$response['message'] = "Industry Already Exist";
			}
		}
		else
		{
			$response['status'] = 0;
			$response['message'] = "Fields Required for adding Industry";
		}		
		echo json_encode($response);
	}
	
	public function update()
	{
		$error = false;		
		$data['id'] = $this->input->post('id');
		$data['name'] = $this->input->post('name');
		$data['status'] = $this->input->post('status');
		$imgname = $this->input->post('slug');
		
		if($data['name']=='')
		{
			$error= true;
			$response['name'] = "Industry name is required*";
		}
		else
		{
			$response['name'] = "";
		}
		
		if(!$error)
		{	
			if(isset($_FILES['image']['name']) && $_FILES['image']['name']!='')
			{
				$config['upload_path']=$this->upload_path."assets/uploads/industry/";
			    $config['allowed_types']='jpg|png|jpeg|webp';
			    /*$config['max_size']      = '100';
			  	$config['max_width']     = '600';
			  	$config['max_height']    = '600';*/
			    $config['file_name'] = $imgname;
			    $this->upload->initialize($config);
			    if ($this->upload->do_upload('image'))
			    {	
			    	$data1['id'] = $data['id'];
					$featured = $this->App_model->get_record_row('industry',$data1);
					if($featured['image'])
					{
						$image = $featured['image'];
						$removed = $this->removeFile($image);
					}

			        $uploaded = array('upload_data' => $this->upload->data());
			        $data['image']="assets/uploads/industry/".$uploaded['upload_data']['file_name'];
			    }
			    else
			    {
			      	$response = array('image' => $this->upload->display_errors());
			        $response['status'] = 0;
			        echo json_encode($response);
			        die();
			    }
			}

			$result=$this->App_model->update_record('industry',$data,array('id'=>$data['id']));
			
			if($result)
			{
				$response['status'] = 1;
				$response['message'] = "Industry updated successfully";
			}
			else
			{
				$response['status'] = 0;
				$response['message'] = "Error in updating Industry";
			}
		}
		else
		{
			$response['status'] = 0;
			$response['message'] = "Fields Required for updating Industry";
		}		
		echo json_encode($response);
	}
	
	public function deleteItem()
	{	
		$id = $this->input->post('delete_id');
		$unlink = $this->App_model->get_record_row('industry',array('id'=>$id));
		if (($unlink['image'])!=''){
			unlink($unlink['image']);
		}
		
		$result = $this->App_model->delete_record('industry',array('id'=>$id));
		if($result)
		{
			$response['status'] = 1;
			$response['message'] = "Industry deleted successfully";
		}
		else
		{
			$response['status'] = 0;
			$response['message'] = "Error in deleting Industry";
		}
		echo json_encode($response);
	}
}