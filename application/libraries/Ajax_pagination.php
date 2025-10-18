<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax_pagination{


	protected $total_rows = 0;

	protected $num_links = 2;

	protected $per_page = 10;

	protected $base_url = '';

	public $cur_page = 0;

	protected $full_tag_open = '';

	protected $full_tag_close = '';

	protected $first_tag_open = '';

	protected $first_tag_close = '';

	protected $last_tag_open = '';

	protected $last_tag_close = '';

	protected $cur_tag_open = '';

	protected $cur_tag_close = '';

	protected $first_link = '&lsaquo; First';

	protected $last_link = 'Last &rsaquo;';

	protected $next_link = '&gt;';

	protected $prev_link = '&lt;';

	protected $next_tag_open = '';

	protected $next_tag_close = '';

	protected $prev_tag_open = '';

	protected $prev_tag_close = '';

	protected $num_tag_open = '';

	protected $num_tag_close = '';

	public function __construct()
    {

    }

    public function initialize($data)
    {

    	foreach ($data as $key => $val)
		{
			if (property_exists($this, $key))
			{
				$this->$key = $val;
			}
		}

		return $this;
    }

    public function create_links()
    {
    	$output = $this->full_tag_open;

    	if ($this->total_rows == 0 OR $this->per_page == 0)
		{
			return '';
		}


		$num_pages = (int) ceil($this->total_rows / $this->per_page);

		if ($num_pages === 1)
		{
			return '';
		}

		$start	= (($this->cur_page - $this->num_links) > 0) ? $this->cur_page - ($this->num_links - 1) : 1;
		$end	= (($this->cur_page + $this->num_links) < $num_pages) ? $this->cur_page + $this->num_links : $num_pages;

		if($this->first_link !== FALSE && $this->cur_page > ($this->num_links + 1 + ! $this->num_links))
		{

			$output .= $this->first_tag_open."<span onclick='getPageData(1);'>  ".$this->first_link." </span>".$this->first_tag_close;
		}

		if($this->cur_page>=2)
		{   
			$i = $this->cur_page-1;

            $output .= $this->prev_tag_open."<span onclick='getPageData(".($this->cur_page-1).");'>  Prev </span>".$this->prev_tag_close;   
        }

        for ($i=$start - 1; $i<=$end; $i++) 
        {   

        	if($i>=1)
        	{
	            if ($i == $this->cur_page) 
	            {   
	              	$output .= $this->cur_tag_open."<span onclick='getPageData(".$i.");'>" .$i." </span>".$this->cur_tag_close;   
	            }               
		        else  
		        {   
		            $output .= $this->num_tag_open."<span onclick='getPageData(".$i.");'>".$i."</span>".$this->num_tag_close;   
		        } 
		    }  
        };   

        if ($this->next_link !== FALSE && $this->cur_page < $num_pages)
		{
			$i =  $this->cur_page + 1;

			$output .= $this->next_tag_open."<span onclick='getPageData(".$i.");'>  Next </span>".$this->next_tag_close;
		}

		if ($this->last_link !== FALSE && ($this->cur_page + $this->num_links + ! $this->num_links) < $num_pages)
		{
			$i = $num_pages;

			$output .= $this->last_tag_open."<span onclick='getPageData(".$i.");'>  ".$this->last_link." </span>".$this->last_tag_close;
		}

        $output .= $this->full_tag_close;

        return $output;      
    }


}