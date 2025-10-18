<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class App_model extends CI_Model
{
	public function get_num_row($table,$where)
	{
		$this->db->select("*");
		$this->db->from($table);
		$this->db->where($where);
		return $this->db->get()->num_rows();
	}
	public function get_record_row($table,$where)
	{
		$this->db->select("*");
		$this->db->from($table);
		$this->db->where($where);
		return $this->db->get()->row_array();
	}
	
	public function get_record_result($table,$where)
	{
		$this->db->select("*");
		$this->db->from($table);
		$this->db->where($where);
		return $this->db->get()->result_array();
	}

	public function insert_record($table='',$data=array())
	{
		$this->db->insert($table,$data);
		return $this->db->insert_id();

	}

	public function insert_record_batch($table='',$data=array())
	{
		$res = $this->db->insert_batch($table,$data);
		
		if($res)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	public function update_record($table='',$data=array(),$where='') 
	{
		$this->db->where($where);
		return $this->db->update($table,$data);
	}
	public function update_set_record($table='',$data=array(),$where='') 
	{
		$this->db->set('address', $data);
		$this->db->where($where);
		return $this->db->update($table);
	}

	public function delete_record($table,$where)
	{

		$this->db->where($where);
		return $this->db->delete($table);
	}

	public function truncate($table)
	{

		return $this->db->truncate($table);
	}
	
	public function email_exists($table,$where)
	{

		$this->db->select("*");
		$this->db->from($table);
		$this->db->where($where);
		$query = $this->db->get();

		if($query->num_rows() > 0){
			return 1;
		} else {
			return 0;
		}
	}

	public function check_row($table,$where)
	{

		$this->db->select("*");
		$this->db->from($table);
		$this->db->where($where);
		$query = $this->db->get();

		if($query->num_rows() > 0){
			return 1;
		} else {
			return 0;
		}
	}

	

	public function get_all_record_result($table)
	{
		$this->db->select("*");
		$this->db->from($table);
		return $this->db->get()->result_array();
	}

	public function checkSlug($table,$slug)
	{
		$this->db->like('slug', $slug);

		$query = $this->db->get($table);  
  
	    if ($query->num_rows() >= 1)  
	    {  
	        return $query->num_rows();  
	    } 
	    else 
	    {  
	        return 0;  
	    }
	}

	public function get_admin_category_sub_title($slug)
	{
		$this->db->where('slug', $slug);

		$result =  $this->db->get('admin_permission_category')->row_array();
  
	    if ($result)  
	    {  
	        return $result['name'];  
	    } 
	    else 
	    {  
	        return '';  
	    }
	}

	public function get_category_sub_title($slug)
	{
		$this->db->where('slug', $slug);

		$result =  $this->db->get('permission_category')->row_array();
  
	    if ($result)  
	    {  
	        return $result['name'];  
	    } 
	    else 
	    {  
	        return '';  
	    }
	}

	public function pagination($data){
        $config['full_tag_open']    = '<ul class ="pagination">';
        $config['full_tag_close']   = '</ul><!--pagination-->';
        $config['first_link']       = '«';
        $config['first_tag_open']   = '<li class="page-item page-link">';
        $config['first_tag_close']  = '</li>';
        $config['last_link']        = '»';
        $config['last_tag_open']    = '<li class="page-item page-link">';
        $config['last_tag_close']   = '</li>';
        $config['next_link']        = '&rarr;';
        $config['next_tag_open']    = '<li class="page-item page-link">';
        $config['next_tag_close']   = '</li>';
        $config['prev_link']        = '&larr;';
        $config['prev_tag_open']    = '<li class="page-item page-link">';
        $config['prev_tag_close']   = '</li>';
        $config['cur_tag_open']     = '<li class="page-item active">';
        $config['cur_tag_close']    = '</li>';
        $config['num_tag_open']     = '<li class="page-item page-number">';
        $config['num_tag_close']    = '</li>';
        $config["base_url"]         = $data['url'];
        $config["total_rows"]       = $data['total_rows'];
        $config["per_page"]         = $data['limit'];
        $config["cur_page"]         = $data['page'];
        //$config['page_query_string'] = TRUE;
        //$config['use_page_numbers'] = TRUE;
        return $config;
    }


}
