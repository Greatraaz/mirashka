<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Franchise extends Admin_Controller {

	var $sub_title = '';

	function __construct()
	{
		parent::__construct();
		$this->sub_title = 'Franchise';
	}
		
	public function index()
	{
		$data['sub_title'] = $this->sub_title;
		$data['franchise']= $this->App_model->get_record_result('franchise', array('status' => 1));
		$this->view('franchise/list', $data);
	}
	
	public function add()
	{
		$data['sub_title'] = $this->sub_title;
		$data['states'] = $this->App_model->get_record_result('states',array('country_id'=>101));
		$data['industry'] = $this->App_model->get_record_result('industry',array('status'=>1));
		$this->view('franchise/add',$data);
	}
	
	public function edit($id)
	{
		$id = decryptId($id);
		$data['sub_title'] = $this->sub_title;
		$data['franchise']=$this->App_model->get_record_row('franchise',array('id'=>$id));
		$data['states'] = $this->App_model->get_record_result('states',array('country_id'=>101));
		$data['cities'] = $this->App_model->get_record_result('cities',array('state_id'=>$data['franchise']['state']));
		$data['industry'] = $this->App_model->get_record_result('industry',array('status'=>1));
		if ($data['franchise']) 
		{
			$this->view('franchise/edit', $data);
		}
		else
		{
			$this->view('_404', $data);
		}
		
	}

	function getcities() {
        $json = array();
        $data['state'] = $this->input->post('stateID');
        $json = $this->App_model->get_record_result('cities',array('state_id'=>$data['state']));
        header('Content-Type: application/json');
        echo json_encode($json);
    }	

    public function store()
	{
		$error = false;
		$data['name'] = $this->input->post('franchise_name');
		$data['industryId'] = $this->input->post('industryId');
		$data['slug'] = $this->createFranchiseSlug($data['name']);
		$data['email'] = $this->input->post('email');
		$data['mobile'] = $this->input->post('mobile');
		$data['pass'] = $this->input->post('password');
		$data['address'] = $this->input->post('address');
		$data['city'] = $this->input->post('city');
		$data['state'] = $this->input->post('state');
		$data['about'] = $this->input->post('about');
		$data['description'] = $this->input->post('description');
		$data['meta_title'] = $this->input->post('meta_title');
		$data['meta_description'] = $this->input->post('meta_description');
		$data['meta_keyword'] = $this->input->post('meta_keyword');
		$data['status'] = $this->input->post('status');
		$data['featured'] = $this->input->post('featured');
		$data['invRng'] = $this->input->post('invRng');
		$data['gmb'] = $this->input->post('gmb');
		$image = $_FILES['image']['name'];		
		if($image=='')
		{
			$error= true;
			$response['image_error'] = "Image is required*";
		}
		else
		{
			$response['image_error'] = "";
		}

		if($data['name']=='')
		{
			$error= true;
			$response['franchise_error'] = "Franchise name is required*";
		}
		else
		{
			$response['franchise_error'] = "";
		}

		if($data['email']=='')
		{
			$error = true;
			$response['email_error'] = "Email is required";
		}
   		else
		{
			if(!$this->valid_email($data['email']))
			{
				$error = true;
				$response['email_error'] = "Invalid Email";
			}
			else
			{
				$response['email_error'] = "";
			}
		}

		if($data['mobile']=='')
		{
			$error = true;
			$response['mobile_error'] = "Mobile is required";
		}
   		else
		{
			if(!$this->valid_mobile($data['mobile']))
			{
				$error = true;
				$response['mobile_error'] = "Invalid Mobile (Hint : 10 digit mobile number)";
			}
			else
			{
				$response['mobile_error'] = "";
			}
		}

		if($data['pass']=='')
		{
			$error= true;
			$response['password_error'] = "Password is required*";
		}
		else
		{
			$response['password_error'] = "";
		}
		if($data['address']=='')
		{
			$error= true;
			$response['address_error'] = "Address is required*";
		}
		else
		{
			$response['address_error'] = "";
		}
		if($data['state']=='')
		{
			$error= true;
			$response['state_error'] = "State is required*";
		}
		else
		{
			$response['state_error'] = "";
		}
		if($data['city']=='')
		{
			$error= true;
			$response['city_error'] = "City is required*";
		}
		else
		{
			$response['city_error'] = "";
		}

		if($data['industryId']=='')
		{
			$error= true;
			$response['industryId'] = "Industry is required*";
		}
		else
		{
			$response['industryId'] = "";
		}

		if($data['about']=='')
		{
			$error= true;
			$response['about'] = "About is required*";
		}
		else
		{
			$response['about'] = "";
		}

		if($data['invRng']=='')
		{
			$error= true;
			$response['invRng'] = "Investment range is required*";
		}
		else
		{
			$response['invRng'] = "";
		}

		if(!$error)
		{

			$check=$this->App_model->get_record_row('franchise',array('email'=>$data['email'],'mobile'=>$data['mobile']));
			
			if(!$check)
			{	
				if(isset($_FILES['image']['name']) && $_FILES['image']['name']!='')
				{	
					$str = rand(000, 999);
					$ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
					$config['upload_path']=$this->upload_path."assets/uploads/franchise/";
				    $config['allowed_types']= "PNG|JPEG|JPG|png|jpeg|jpg|webp";
				    $config['max_size']      = '1024';
			  		/*$config['max_width']     = '600';
			  		$config['max_height']    = '300';*/
				    $string_name = $data['slug'].'-'.$str;
				    $config['file_name'] = $string_name.".".$ext;

				    $this->upload->initialize($config);
				    if ($this->upload->do_upload('image'))
				    {
				        $uploaded = array('upload_data' => $this->upload->data());
				        $data['image']="assets/uploads/franchise/".$uploaded['upload_data']['file_name'];
				    }
				    else
				    {
				        $response['status'] = 0;
						$response['image_error'] = "Image is invalid";
						echo json_encode($response);
		                die(); 
				              
				    }
				}

				$data['password'] = $this->encrypted_password($data['pass']);
				$result=$this->App_model->insert_record('franchise',$data);
				
				if($result)
				{
					$response['status'] = 1;
					$response['message'] = "Franchise added successfully";
				}
				else
				{
					$response['status'] = 0;
					$response['message'] = "Error in updating franchise";
				}
			}
			else
			{
				$response['status'] = 0;
				$response['message'] = "Franchise Already Exist";
			}
		}
		else
		{
			$response['status'] = 0;
			$response['message'] = "Fields Required for adding franchise";
		}
		
		echo json_encode($response);
	}
	
	public function update()
	{
		$error = false;		
		$data['id'] = $this->input->post('id');
		$data['name'] = $this->input->post('name');
		$data['slug'] = $this->input->post('slug'); 
		$data['industryId'] = $this->input->post('industryId');
		$data['email'] = $this->input->post('email');
		$data['mobile'] = $this->input->post('mobile');
		$data['pass'] = $this->input->post('password');
		$data['address'] = $this->input->post('address');
		$data['city'] = $this->input->post('city');
		$data['state'] = $this->input->post('state');
		$data['about'] = $this->input->post('about');
		$data['description'] = $this->input->post('description');
		$data['meta_title'] = $this->input->post('meta_title');
		$data['meta_description'] = $this->input->post('meta_description');
		$data['meta_keyword'] = $this->input->post('meta_keyword');
		$data['status'] = $this->input->post('status');
		$data['featured'] = $this->input->post('featured');
		$data['invRng'] = $this->input->post('invRng');
		$data['gmb'] = $this->input->post('gmb');

		if($data['name']=='')
		{
			$error= true;
			$response['franchise_error'] = "Franchise name is required*";
		}
		else
		{
			$response['franchise_error'] = "";
		}

		if($data['email']=='')
		{
			$error = true;
			$response['email_error'] = "Email is required";
		}
   		else
		{
			if(!$this->valid_email($data['email']))
			{
				$error = true;
				$response['email_error'] = "Invalid Email";
			}
			else
			{
				$response['email_error'] = "";
			}
		}

		if($data['mobile']=='')
		{
			$error = true;
			$response['mobile_error'] = "Mobile is required";
		}
   		else
		{
			if(!$this->valid_mobile($data['mobile']))
			{
				$error = true;
				$response['mobile_error'] = "Invalid Mobile (Hint : 10 digit mobile number)";
			}
			else
			{
				$response['mobile_error'] = "";
			}
		}

		if($data['pass']=='')
		{
			$error= true;
			$response['password_error'] = "Password is required*";
		}
		else
		{
			$response['password_error'] = "";
		}
		if($data['address']=='')
		{
			$error= true;
			$response['address_error'] = "Address is required*";
		}
		else
		{
			$response['address_error'] = "";
		}
		if($data['state']=='')
		{
			$error= true;
			$response['state_error'] = "State is required*";
		}
		else
		{
			$response['state_error'] = "";
		}
		if($data['city']=='')
		{
			$error= true;
			$response['city_error'] = "City is required*";
		}
		else
		{
			$response['city_error'] = "";
		}

		if($data['industryId']=='')
		{
			$error= true;
			$response['industryId'] = "Industry is required*";
		}
		else
		{
			$response['industryId'] = "";
		}

		if($data['about']=='')
		{
			$error= true;
			$response['about'] = "About is required*";
		}
		else
		{
			$response['about'] = "";
		}

		if($data['invRng']=='')
		{
			$error= true;
			$response['invRng'] = "Investment range is required*";
		}
		else
		{
			$response['invRng'] = "";
		}

		if($data['slug']=='')
		{
			$error= true;
			$response['slug'] = "Slug is required*";
		}
		else
		{
			$response['slug'] = "";
			$slug = preg_replace("/-$/","",preg_replace('/[^a-z0-9]+/i', "-", strtolower($data['slug'])));
			$count = $this->Franchise_model->checkSlugForUpdate($slug,$data['id']);	
			$data['slug'] = ($count > 0) ? ($slug . '-' . $count) : $slug;
		}

		if(!$error)
		{	
			if(isset($_FILES['image']['name']) && $_FILES['image']['name']!='')
			{
				$ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
				$str = rand(000, 999);
				$config['upload_path']=$this->upload_path."assets/uploads/franchise/";
			    $config['allowed_types']= "PNG|JPEG|JPG|png|jpeg|jpg|webp";
			    $config['max_size']      = '1024';
		  		/*$config['max_width']     = '600';
		  		$config['max_height']    = '300';*/
			    $string_name = $data['slug'].'-'.$str;
			    $config['file_name'] = $string_name.".".$ext;
			    $this->upload->initialize($config);
			    if ($this->upload->do_upload('image'))
			    {	
			    	$data1['id'] = $data['id'];
					$featured = $this->App_model->get_record_row('franchise',$data1);
					if($featured['image'])
					{
						$image = $featured['image'];
						$removed = $this->removeFile($image);
					}
			        $uploaded = array('upload_data' => $this->upload->data());
			        $data['image']="assets/uploads/franchise/".$uploaded['upload_data']['file_name'];			    
			    }
			    else
			    {
			      	$error = array('message' => $this->upload->display_errors());
			        $error['status'] = 0;
			        echo json_encode($error);
			        die();
			    }
			}

			$data['password'] = $this->encrypted_password($data['pass']);
			$result=$this->App_model->update_record('franchise',$data,array('id'=>$data['id']));
			
			if($result)
			{
				$response['status'] = 1;
				$response['message'] = "franchise updated successfully";
			}
			else
			{
				$response['status'] = 0;
				$response['message'] = "Error in updating franchise";
			}
		}
		else
		{
			$response['status'] = 0;
			$response['message'] = "Fields Required for updating franchise";
		}
		
		echo json_encode($response);
	}
	
	public function delete()
	{
		$data['id'] = $this->input->post('delete_id');
		$unlink = $this->App_model->get_record_row('franchise',array('id'=>$data['id']));
		if (($unlink['image'])!=''){
			unlink($unlink['image']);
		}
		$result = $this->App_model->delete_record('franchise',$data);
		if($result)
		{
			$response['status'] = 1;
			$response['message'] = "Franchise deleted successfully";
		}
		else
		{
			$response['status'] = 0;
			$response['message'] = "Error in deleting Franchise";
		}
		echo json_encode($response);
				
	}
		
}