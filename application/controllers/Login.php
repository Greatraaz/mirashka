<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends Login_Controller 
{
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$user = $this->session->userdata('ID');

		if($user)
		{
			redirect(base_url('admin'));
		}
		else
		{
			$data['site_title'] = $this->siteTitle;
			$data['powered_by'] = $this->poweredBy;
			$this->load->view('admin/admin-login',$data);
		}
	}

	public function forgetpassword()
	{
		$data['site_title'] = $this->siteTitle;
		$data['powered_by'] = $this->poweredBy;
		$this->load->view('admin/forget-password',$data);
	}

	public function adminlogin()
	{
		$error = false;
		$data['login'] = $this->input->post('login');
		$password_entered = $this->input->post('pass');
		
		if($data['login']=='')
		{
			$error= true;
			$response['username_error'] = "Email or mobile no. is required*";
		}
		else
		{
			$response['username_error'] = "";
		}
		
		if($password_entered=='')
		{
			$error= true;
			$response['password_error'] = "Password is required*";
		}
		else
		{
			$response['password_error'] = "";	
		}
		
		if(!$error)
		{
			$result=$this->User_model->loginAdmin($data);
			if($result)
			{
				$real_password = $result[0]->password;
				
				if ($this->verify_my_password($password_entered,$real_password)) 
				{
					$session_data=array(
						'ID' => $result[0]->id,
						'username' => $result[0]->username,
						'email' => $result[0]->email,
						'role_id' => $result[0]->role_id,
						'image' => $result[0]->profile_pic,
						'adminLogin' => 1
					);
					
					$this->session->set_userdata($session_data);
					$response['status'] = 1;
					$response['message'] = "Successfully Logged in.";
					$response['last_url'] = base_url('admin');
				}
				else
				{
					$response['message'] = "Wrong password";
					$response['status'] = 0;
				}
			}
			else
			{
				$response['message'] = "User doesn't exist";
				$response['status'] = 0;
			}
			
			$response['username_error'] = "";
			$response['password_error'] = "";
		}
		else
		{
			$response['status'] = 0;
			$response['message'] = "Fill required fields";
		}		
		echo json_encode($response);
	}

	public function admin_logout()
	{
		$this->session->sess_destroy();
		redirect(base_url().'admin/login'); 
	}
	
}
