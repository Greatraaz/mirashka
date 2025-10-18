<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends Front_Controller {

	public function CustomerLogin()
	{
		$error = false;
		$data['login'] = $this->input->post('login');
		$password_entered = $this->input->post('pass');
		
		if($data['login']=='')
		{
			$error= true;
			$response['login_error'] = "Email or mobile no. is required*";
		}
		else
		{
			$response['login_error'] = '';
		}
		
		if($password_entered=='')
		{
			$error= true;
			$response['password_error'] = "Password is required*";
		}
		else
		{
			$response['password_error'] = '';
		}
		
		if(!$error)
		{
			$result=$this->User_model->loginCustomer($data);

			if($result)
			{
				$real_password = $result[0]->password;
				
				if ($this->verify_my_password($password_entered,$real_password)) 
				{
					if($result)
					{
						$session_data=array(
							'ID' => $result[0]->id,
							'customer_login' => 1
						);
						
						$this->session->set_userdata($session_data);
						
						$response['status'] = 1;
						$response['message'] = "Successfully Logged in.";
					}
					else
					{
						$response['message'] = "Email is not verified. Please verify your email.";
						$response['status'] = 0;
					}
				}
				else
				{
					$response['message'] = "Wrong password";
					$response['status'] = 0;
				}
			}
			else
			{
				$response['message'] = "You are not registered with us, please sign up first.";
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

	public function CustomerSignup()
	{
		$error = false;
		$data['username'] = $this->input->post('username');
		$data['email'] = $this->input->post('email');
		$data['pass'] = $this->input->post('password');
		$data['mobile'] = $this->input->post('mobile');
		$data['status'] = 1;	

		if($this->input->post('fekEmail')!='')
		{
			$response['status'] = 0;
			$response['message'] = "Something went wrong";
			echo json_encode($response);
			die();
		}
		if($data['username']=='')
		{
			$error = true;
			$response['username'] = "Username is required";
		}
   		else
		{
			$response['username'] = "";
		}
		if($data['email']=='')
		{
			$error = true;
			$response['email'] = "Email is required";
		}
   		else
		{
			if(!$this->valid_email($data['email']))
			{
				$error = true;
				$response['email'] = "Invalid Email";
			}
			else
			{
				$response['email'] = "";
			}
		}

		if($data['pass']=='')
		{
			$error = true;
			$response['password'] = "Password is required";
		}
   		else
		{
			$response['password'] = "";
		}

		if($data['mobile']=='')
		{
			$error = true;
			$response['mobile'] = "Mobile is required";
		}
   		else
		{
			if(!$this->valid_mobile($data['mobile']))
			{
				$error = true;
				$response['mobile'] = "Invalid Mobile (Hint : 10 Digits, Number Only)";
			}
			else
			{
				$response['mobile'] = "";
			}
		}
		
		if(!$error)
		{	
			$check1=$this->App_model->get_record_row('users',array('mobile'=>$data['mobile']));
			$check2=$this->App_model->get_record_row('users',array('email'=>$data['email']));
			if(!$check1)
			{
				if(!$check2)
				{
			      	$data['password'] = $this->encrypted_password($data['pass']);
			     	$result = $this->App_model->insert_record('users',$data);
				    if($result)
				    {	
				    	$session_data=array(
							'ID' => $result,
							'customer_login' => 1
						);
						
						$this->session->set_userdata($session_data);

				    	$response['status'] = 1;
				    	$response['message'] = "Account Created Successfully";		    	
				    }
			    	else
			    	{
			    		$response['status'] = 0;
			    		$response['message'] = "Error in Adding Customer";
			    	}
			    }
				else
				{
					$response['status'] = 0;
					$response['message'] = "Email Already Exist";
				}
			}
			else
			{
				$response['status'] = 0;
				$response['message'] = "Mobile Already Exist";
			}	
		}
		else
		{
			$response['message'] = "Fill required fields";
			$response['status'] = 0;
		}
		echo json_encode($response);
	}

	public function updateProfile()
	{
		$error = false;
		$data['id'] = $this->session->userdata('ID');
		$data['username'] = $this->input->post('name');
		$data['email'] = $this->input->post('email');
		$data['mobile'] = $this->input->post('phone');
		$data['address'] = $this->input->post('address');
		$data['pass'] = $this->input->post('password');

		if($data['pass']=='')
		{
			$error = true;
			$response['new'] = "Password is required";
		}
		else
		{
			$response['new'] = "";
		}
		if($data['username']=='')
		{
			$error= true;
			$response['name'] = "Your Name is required*";
		}
		else
		{
			$response['name'] = "";
		}

		if($data['email']=='')
		{
			$error = true;
			$response['email'] = "Email is required";
		}
   		else
		{
			if(!$this->valid_email($data['email']))
			{
				$error = true;
				$response['email'] = "Invalid Email";
			}
			else
			{
				$response['email'] = "";
			}
		}

		if($data['mobile']=='')
		{
			$error = true;
			$response['phone'] = "Phone no is required";
		}
   		else
		{
			if(!$this->valid_mobile($data['mobile']))
			{
				$error = true;
				$response['phone'] = "Invalid Mobile (Hint : 10 Digits, Number Only)";
			}
			else
			{
				$response['phone'] = "";
			}
		}
		
		if(!$error)
		{	
			$data['password'] = $this->encrypted_password($data['pass']);
            $data['pass'] = $data['pass'];
            $result = $this->App_model->update_record('users',$data,array('id'=>$data['id']));  
      
			if($result)
			{
				$response['status'] = 1;
				$response['message'] = "Profile updated Successfully";
			}
			else
			{
				$response['status'] = 0;
				$response['old'] = "Old Password is Wrong";
			}
		}
		else
		{
			$response['message'] = "Fill the required fields";
			$response['status'] = 0;
		}		
		echo json_encode($response);
	}

	public function profile()
	{	
		$data['title'] = $this->siteTitle;
		$data['description'] = $this->siteTitle;
		$data['keywords'] = $this->siteTitle;

		if($this->session->userdata('customer_login'))
		{
			$id = $this->session->userdata('ID');
		    $data['user'] = $this->User_model->getProfile($id);
			$this->view('customer/profile', $data);
		}
		else
		{
			redirect();
		}	
	}

	public function logout()
	{	
		$this->session->unset_userdata('ID');
		$this->session->unset_userdata('customer_login');
		$this->session->unset_userdata('last_url');
		redirect(base_url()); 
	}

	public function addAddress()
	{
		$error = false;		
		$data['userId'] = $this->session->userdata('ID');
		$data['name'] = $this->input->post('name');
		$data['mobile'] = $this->input->post('mobile');
		$data['country'] = $this->input->post('country');
		$data['state'] = $this->input->post('state');
		$data['city'] = $this->input->post('city');
		$data['pincode'] = $this->input->post('pincode');
		$data['address'] = $this->input->post('address');

		if($data['state']=='')
		{
			$error = true;
			$response['state'] = "State is required";
		}
   		else
		{
			$response['state'] = "";
			$state = getStateByid($data['state']);
			$data['state'] = $state->name;
		}

		if($data['name']=='')
		{
			$error = true;
			$response['name'] = "Full name is required";
		}
   		else
		{
			$response['name'] = "";
		}

		if($data['mobile']=='')
		{
			$error = true;
			$response['mobile'] = "Mobile is required";
		}
   		else
		{
			$response['mobile'] = "";
		}

		if($data['city']=='')
		{
			$error = true;
			$response['city'] = "City is required";
		}
   		else
		{
			$response['city'] = "";
		}
		if($data['pincode']=='')
		{
			$error = true;
			$response['pincode'] = "Pincode is required";
		}
   		else
		{
			$response['pincode'] = "";
		}
		if($data['address']=='')
		{
			$error = true;
			$response['address'] = "Address is required";
		}
   		else
		{
			$response['address'] = "";
		}
		
		if(!$error)
		{		      	
	      	$result = $this->App_model->insert_record('user_address',$data);
		    if($result)
		    {
		    	$response['status'] = 1;
		    	$response['message'] = "Address Added Successfully";
		    }
	    	else
	    	{
	    		$response['status'] = 0;
	    		$response['message'] = "Error in Adding Address";
	    	}
		}
		else
		{
			$response['message'] = "Fill required fields";
			$response['status'] = 0;
		}
		echo json_encode($response);	
	}
	
	public function getcities() {
        $json = array();
        $data['state'] = $this->input->post('stateID');
        $json = $this->App_model->get_record_result('cities',array('state_id'=>$data['state']));
        header('Content-Type: application/json');
        echo json_encode($json);
    }
}
