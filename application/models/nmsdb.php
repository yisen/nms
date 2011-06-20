<?php
class Nmsdb extends CI_Model 
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
}