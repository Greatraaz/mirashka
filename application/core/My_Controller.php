<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base_Controller extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();	
		$this->upload_path = $_SERVER['DOCUMENT_ROOT'].'/mirashka/';
		header('Access-Control-Allow-Origin: *');
	    header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method, Authorization");
	    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
	    $method = $_SERVER['REQUEST_METHOD'];
	    if ($method == "OPTIONS") {
	        die();
	    }

	    if(!$this->session->userdata('siteTitle') || !$this->session->userdata('smtp'))
	    {
			$result = $this->App_model->get_record_row('configuration',array('id'=>1));
			$session_data=array(
				'siteTitle' => $result['siteTitle'],
				'poweredBy' => $result['poweredBy'],
				'primaryPhone' => $result['primaryPhone'],
				'secondaryPhone' => $result['secondaryPhone'],
				'primaryEmail' => $result['primaryEmail'],
				'secondaryEmail' => $result['secondaryEmail'],
				'address1' => $result['address1'],
				'address2' => $result['address2'],
				'facebook' => $result['facebook'],
				'twitter' => $result['twitter'],
				'instagram' => $result['instagram'],
				'youtube' => $result['youtube'],
				'linkedin' => $result['linkedin'],
				'pinterest' => $result['pinterest'],
				'smtp' => $result['smtp']
			);
			$this->session->set_userdata($session_data);
		}
		$config = unserialize($this->session->userdata('smtp'));
		$this->email->initialize($config);
		$this->email->set_mailtype('html');
		$this->email->set_newline("\r\n");
		$this->from=$config['smtp_user'];

		$this->siteTitle = $this->session->userdata('siteTitle');
		$this->poweredBy = $this->session->userdata('poweredBy');
		$this->phone1 = $this->session->userdata('primaryPhone');
		$this->phone2 = $this->session->userdata('secondaryPhone');
		$this->email1 = $this->session->userdata('primaryEmail');
		$this->email2 = $this->session->userdata('secondaryEmail');
		$this->address1 = $this->session->userdata('address1');
		$this->address2 = $this->session->userdata('address2');
		$this->facebook = $this->session->userdata('facebook');
		$this->twitter = $this->session->userdata('twitter');
		$this->instagram = $this->session->userdata('instagram');
		$this->youtube = $this->session->userdata('youtube');
		$this->linkedin = $this->session->userdata('linkedin');
		$this->pinterest = $this->session->userdata('pinterest');
	}
	
	public function set_password_encryption_key()
	{
		return "@Raj@Op@Ravi@Abhi@Aman@Sukom";   // Don't Change this Encryption Key if Changed This will Effect Whole User's Passwords
	}
	
	public function encrypted_password($password)
	{
		$Raaz = $this->set_password_encryption_key();
		$dpk = hash_hmac("sha256", $password, $Raaz);
		
		 //return password_hash($dpk, PASSWORD_ARGON2ID);
		 return password_hash($dpk, PASSWORD_DEFAULT);
	}
	
	public function verify_my_password($password_entered,$real_password)
	{
		$Raaz = $this->set_password_encryption_key();
		$dpk = hash_hmac("sha256", $password_entered, $Raaz);
		
		if(password_verify($dpk, $real_password))
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}
	
	function valid_email($str) 
	{
		return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
	}

	function valid_mobile($str) 
	{
		return (!preg_match("/^[0-9]{10}+$/", $str)) ? FALSE : TRUE;
	}
	
	public function SendMail($to,$subject,$message)
	{
  	
        $this->email->from($this->from, $this->siteTitle);
        $this->email->set_mailtype('html');
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);
        
        if($this->email->send())
        {
            return 1;
        }
        else
        {
            return 0;
        }
	}

	public function resizeImage($path,$filename)
   	{
      	$source_path = $this->upload_path.$path . $filename;
      	$target_path = $this->upload_path.$path;
      	$config_manip = array(
          	'image_library' => 'gd2',
          	'source_image' => $source_path,
          	'new_image' => $target_path,
          	'maintain_ratio' => TRUE,
          	'width' => 500,
      	);
   
      	$this->load->library('image_lib', $config_manip);
      	if (!$this->image_lib->resize()) 
      	{
          echo $this->image_lib->display_errors();
      	}
   
      	$this->image_lib->clear();
   	}
	
  
  	public function removeFile($filename)
	{
		$path  = $this->upload_path.$filename;
		
		if(file_exists($path))
		{
			unlink($path);
			return 1;
		}
		else
		{
			return 0;
		}
			
	}

	function sendOtp($data)
	{
		$url = "https://api.msg91.com/api/v5/otp?template_id=".$data['template_id']."&mobile=".$data['mobile']."&authkey=".$data['auth_key']."&otp_length=6";
		
		$result = file_get_contents($url);
		
		return $result;
		
	}
	
	public function verifyOtp($data)
	{
		$url = "https://api.msg91.com/api/v5/otp/verify?otp=".$data['otp']."&mobile=".$data['mobile']."&authkey=".$data['auth_key'];
		
		$result = file_get_contents($url);
		
		return $result;
	}

	public function createFranchiseSlug($title)
	{
	  	$slug = preg_replace("/-$/","",preg_replace('/[^a-z0-9]+/i', "-", strtolower($title)));
		$count = $this->App_model->checkSlug('franchise',$slug);
		return ($count > 0) ? ($slug . '-' . $count) : $slug;
	}

	public function createIndustrySlug($title)
	{
	  	$slug = preg_replace("/-$/","",preg_replace('/[^a-z0-9]+/i', "-", strtolower($title)));
		$count = $this->App_model->checkSlug('industry',$slug);
		return ($count > 0) ? ($slug . '-' . $count) : $slug;
	}

	function clean($string) {
	   $string = str_replace(' ', '-', $string);

	   return preg_replace('/\[^A-Za-z0-9\]/', '', $string);
	}

  
  	public function getCurrentTime()
	{
		date_default_timezone_set('Asia/Kolkata'); 
		$str=substr(date("Y-m-d h:i:sa"), 0,19);
		return $str;
	}
	
}

class Admin_Controller extends Base_Controller{

	var $session_data = array();
	var $admin_folder = '';

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->admin_folder = 'admin';

		if($this->session->userdata('adminLogin') != 1)
		{
			$url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		    $session_data = array('last_url' =>$url);
		    $this->session->set_userdata($session_data);
		    redirect(base_url('admin/login'));
		}
		else
		{
			$url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		    $session_data = array('last_url' =>$url);
		    $this->session->set_userdata($session_data);
		}
		
	}

	function view($view, $vars = array(), $string=false)
	{
		$vars['site_title'] = $this->siteTitle;
		$vars['powered_by'] = $this->poweredBy;
		if($string)
		{
			$result	 = $this->load->view($this->admin_folder.'/common/header', $vars, true);
			$result	.= $this->load->view($this->admin_folder.'/'.$view, $vars, true);
			$result	.= $this->load->view($this->admin_folder.'/common/footer', $vars, true);
			return $result;
		}
		else
		{
			$this->load->view($this->admin_folder.'/common/header', $vars);
			$this->load->view($this->admin_folder.'/'.$view, $vars);
			$this->load->view($this->admin_folder.'/common/footer', $vars);
		}
	}
	
}

class Front_Controller extends Base_Controller {

	function __construct(){
		parent::__construct();
		$this->theme_folder = 'frontend';
	}
	
	
	function view($view, $vars = array(), $string=false)
	{	
		$vars['canonical'] = current_url();
		if($string)
		{
			$result	 = $this->load->view($this->theme_folder.'/common/header', $vars, true);
			$result	.= $this->load->view($this->theme_folder.'/'.$view, $vars, true);
			$result	.= $this->load->view($this->theme_folder.'/common/footer', $vars, true);
			return $result;
		}
		else
		{
			$this->load->view($this->theme_folder.'/common/header', $vars);
			$this->load->view($this->theme_folder.'/'.$view, $vars);
			$this->load->view($this->theme_folder.'/common/footer', $vars);
		}
	}
	
}

class Login_Controller extends Base_Controller{
	
	function __construct(){
		
	  parent::__construct();
	  $this->load->database();
	}
	
	
}

class Ajax_Controller extends Base_Controller{
	
	var $user_id = '';
	function __construct(){
		
		parent::__construct();

		$this->user_id = $this->session->userdata('ID');
		$this->load->database();
	}

	function checkUserLoggedIn()
	{
		$is_user_loggedIn = is_user_logged_in();
		
		if(!$is_user_loggedIn)
		{
	    	return 0;
		}
		else
		{
			return 1;
		}
	}
}

class Load_Request_Controller extends Base_Controller{

	function __construct()
	{	
		parent::__construct();
		$this->load->database();
	}

	
}


