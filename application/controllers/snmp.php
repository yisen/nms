<?php 
class Snmp extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler(TRUE);
	}
	
	function index($flag = '')
	{
		if ($this->session->userdata('username'))
		{
			$base_info = get_base_info($this);
			$snmp_list = $this->nmsdb->snmp_list();
			
			$data = array(
			'base_info' => $base_info,
			'snmp_list' => $snmp_list,
			'flag' => $flag
			);
			$this->load->view('head', $data);
			$this->load->view('nav');
			$this->load->view('snmp_list');
			$this->load->view('foot');
		}
		else 
			redirect('/');
	}
	
	//增加新设备
	function add_dev($flag = '')
	{
		if ($this->session->userdata('username'))
		{
			$base_info = get_base_info($this);
			$data = array(
			'base_info' => $base_info,
			'flag' => $flag
			);
			$this->load->view('head', $data);
			$this->load->view('nav');
			$this->load->view('snmp_add_dev');
			$this->load->view('foot');
		}
		else
			redirect('/');
	}
	
	//处理新增设备
	function do_add_dev()
	{
		$this->form_validation->set_rules('dev_name', '名称', 'trim|required');
		$this->form_validation->set_rules('dev_addr', 'IP地址', 'trim|required');
		$this->form_validation->set_rules('dev_type', '类型', 'trim|required');
		$this->form_validation->set_rules('dev_rw', 'rw community', 'trim|required');
		$this->form_validation->set_rules('dev_ro', 'ro community', 'trim|required');

		if ($this->form_validation->run() == TRUE)
		{
			$dev_name = $this->input->post('dev_name');
			$dev_addr = $this->input->post('dev_addr');
			$dev_type = $this->input->post('dev_type');
			$dev_rw = $this->input->post('dev_rw');
			$dev_ro = $this->input->post('dev_ro');

			$data = array(
			'dev_name' => $dev_name,
			'dev_addr' => $dev_addr,
			'dev_type' => $dev_type,
			'dev_rw' => $dev_rw,
			'dev_ro' => $dev_ro
			);

			if ($this->nmsdb->add_dev($data) == 1)
			{
				redirect('/snmp');
			}
			else
			$this->add_dev('w');
		}
		else
		$this->add_dev('w');

	}
	
	//修改设备信息
	function modify_dev($dev_id, $flag = '')
	{
		if ($this->session->userdata('username'))
		{
			$base_info = get_base_info($this);
			$dev_info = $this->nmsdb->get_dev_info($dev_id);
			
			$data = array(
				'base_info' => $base_info,
				'dev_info' => $dev_info,
				'flag' => $flag
			);
			
			$this->load->view('head', $data);
			$this->load->view('nav');
			$this->load->view('snmp_modify_dev');
			$this->load->view('foot');
		}
		else
			redirect('/');
	}
	
	//处理修改设备
	function do_modify_dev()
	{
		$dev_id = $this->input->post('dev_id');
		
		$this->form_validation->set_rules('dev_name', '名称', 'trim|required');
		$this->form_validation->set_rules('dev_addr', 'IP地址', 'trim|required');
		$this->form_validation->set_rules('dev_type', '类型', 'trim|required');
		$this->form_validation->set_rules('dev_rw', 'rw community', 'trim|required');
		$this->form_validation->set_rules('dev_ro', 'ro community', 'trim|required');

		if ($this->form_validation->run() == TRUE)
		{
			$dev_name = $this->input->post('dev_name');
			$dev_addr = $this->input->post('dev_addr');
			$dev_type = $this->input->post('dev_type');
			$dev_rw = $this->input->post('dev_rw');
			$dev_ro = $this->input->post('dev_ro');

			$data = array(
			'dev_id' => $dev_id,
			'dev_name' => $dev_name,
			'dev_addr' => $dev_addr,
			'dev_type' => $dev_type,
			'dev_rw' => $dev_rw,
			'dev_ro' => $dev_ro
			);

			if ($this->nmsdb->modify_dev($data) == 1)
			{
				redirect('/snmp');
			}
			else
				redirect('/snmp');
		}
		else 
			$this->modify_dev($dev_id, 'w');
	}
	
	//处理 修改/删除snmp 设备
	function do_snmp_dev()
	{
		$submit_type = $this->input->post('submit_type');
		$dev_id = $this->input->post('snmp_dev');
		
		if ($submit_type == 'del_dev')
		{
			if ($this->nmsdb->del_dev($dev_id) == 1)
			{
				$this->index();
			}
			else 
				$this->index('w');
		}
		else if ($submit_type == 'del_all')
		{
			if ($this->nmsdb->del_all_dev() == 1)
			{
				$this->index();
			}
			else 
				$this->index('w');
		}
		else if ($submit_type == 'add_dev')
		{
			redirect('/snmp/add_dev');
		}
		else if ($submit_type == 'modify_dev')
		{
			if ($dev_id == '')
				$this->index('w');
			else
				redirect("/snmp/modify_dev/${dev_id}");
		}
	}
}
?>