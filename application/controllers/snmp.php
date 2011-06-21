<?php 
class Snmp extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler(TRUE);
	}
	
	function index()
	{
		$base_info = get_base_info($this);
		$data = array(
			'base_info' => $base_info
		);
		$this->load->view('head', $data);
		$this->load->view('nav');
		$this->load->view('foot');
	}
}
?>