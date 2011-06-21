<?php
class Nmsdb extends CI_Model 
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    function get_base_info()
    {
    	$this->db->select('*')->from('company');
		$query = $this->db->get();
		return $query->row();
    }
    
    function check_login($username, $password)
    {
    	$this->db->select('*')->from('user')->where('username', $username)->where('password', $password);
    	$query = $this->db->get();
    	return $query->row();
    }
    
}