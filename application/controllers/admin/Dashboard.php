<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Admin_Controller 
{
	var $sub_title = 'Dashboard';	
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['sub_title'] = $this->sub_title;
		/*$data['franchise'] = $this->App_model->get_num_row('franchise', array('status'=>1));
		$data['industry'] = $this->App_model->get_num_row('industry', array('status'=>1));*/
		/*$data['quotes'] = $this->App_model->get_num_row('requestAQuote', array());
		$data['trainers'] = $this->App_model->get_num_row('trainers', array('status'=>1));
		$data['students'] = $this->App_model->get_num_row('registrationForm', array());
		$data['payments'] = $this->App_model->get_num_row('payments', array());
		$data['enquiries'] = $this->App_model->get_num_row('contactus', array());
		$data['jobs'] = $this->App_model->get_num_row('jobs', array());*/
		$this->view('index',$data);
	}
	
}
