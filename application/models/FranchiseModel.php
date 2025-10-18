<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class FranchiseModel extends CI_model{
 
	
	public function getFranchise($data)
	{
		$this->db->select('name,slug,image,featured,invRng');
		if(isset($data['status']))
		{
		 	$this->db->where('status',$data['status']);
		}
        if(isset($data['featured']))
        {
            $this->db->where('featured',$data['featured']);
        }
        if(isset($data['limit']))
        {
            $this->db->limit($data['limit'],$data['start']*$data['limit']);
        }
		$query = $this->db->get('franchise'); 
	    return $query->result_array();
	}

	public function getSingleFranchise($slug)
	{
		$this->db->select('name,slug,image,featured,invRng,about,description');
		$this->db->where('status',1);
		$query = $this->db->get('franchise'); 
	    return $query->row_array();
	}
 
}