<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
*  Model Controlling modules related to Users
*
*/

class User_model extends CI_Model
{
    
    function userExists($data)
	{
		$this->db->where('email', $data['email']);

		$this->db->or_where('mobile', $data['mobile']);
		
        $query = $this->db->get('users');  
  
        if ($query->num_rows() == 1)  
        {  
            return 1;  
        } 
        else 
        {  
            return 0;  
        }	
	}

	function emailExists($data)
    {
        $this->db->where('email', $data['email']);
        
        $query = $this->db->get('users');  
  
        if ($query->num_rows() == 1)  
        {  
            return 1;  
        } 
        else 
        {  
            return 0;  
        }   
    }

    function mobileExists($data)
    {

        $this->db->or_where('mobile', $data['mobile']);
        
        $query = $this->db->get('users');  
  
        if ($query->num_rows() == 1)  
        {  
            return 1;  
        } 
        else 
        {  
            return 0;  
        }   
    }

	function loginCustomer($data)
    {
        $this->db->select();
        
        $this->db->where('email', $data['login']);
        
        $this->db->or_where('mobile', $data['login']);
    
        $query = $this->db->get('users');  
    
        if ($query->num_rows() == 1)  
        {  
            return $query->result();  
        }
        else 
        {  
            return false;  
        }
    }
    
  
    function loginAdmin($data)
    {
    	$this->db->select();
    	
    	$this->db->where('email', $data['login']);
    	
    	$this->db->or_where('mobile', $data['login']);
    
        $query = $this->db->get('admin');  
    
        if ($query->num_rows() == 1)  
        {  
            return $query->result();  
        }
        else 
        {  
            return false;  
        }
    }

    function loginManager($data)
    {
        $this->db->select();
        
        $this->db->where('email', $data['login']);
        
        $this->db->or_where('mobile', $data['login']);
    
        $query = $this->db->get('users');  
    
        if ($query->num_rows() == 1)  
        {  
            return $query->result();  
        }
        else 
        {  
            return false;  
        }
    }
    
    function getUserByID($id)
    {

    	$this->db->select();
    	
    	$this->db->where('id', $id);

        $query = $this->db->get('users');  
    
        if ($query->num_rows() == 1)  
        {  
            return $query->row_array();  
        }
        else 
        {  
            return false;  
        }
    }

	function listUsers($data)
	{
	    $this->db->select('users.id,users.username,users.email,users.mobile,users.user_type,users.status,users.date,user_type.user_type as usertype');
	    
	    if(isset($data['user_type']))
	    {
	        $this->db->where('users.user_type', $data['user_type']);
	    }
	    
	    $this->db->join('user_type','user_type.id=users.user_type');
	    
        $query = $this->db->get('users');  
  
        if ($query->num_rows() == 1)  
        {  
            return $query->result();  
        } 
        else 
        {  
            return 0;  
        }	
	}
	
	public function getUsers()
    {
      $this->db->select('users.*,user_roles.role');
      $this->db->join('user_roles','user_roles.id=users.role_id');
      $this->db->where('users.role_id!=', '1'); 
      $this->db->where('users.role_id!=', '3'); 
      $query = $this->db->get('users');  
        
      return $query->result();
    }

    public function getProfile($id)
    {
        $this->db->select('*');
        $this->db->where("id",$id);
        $query = $this->db->get('users');  
        if ($query->num_rows() == 1)  
        {  
            return $query->row_array();  
        }
        else 
        {  
            return 0;  
        }
    }
    
    public function getCities($name)
    {
        $this->db->like('name', $name, 'right');

        $query = $this->db->get('cities');  
  
        if ($query->num_rows() >= 1)  
        {  
            return $query->result();  
        } 
        else 
        {  
            return 0;  
        }
    }
    
    
}