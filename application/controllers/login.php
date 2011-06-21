<?php
//定义全局变量
$base_info;

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler(TRUE);
	}

	//首页
	function index($flag = '')
	{
		$_base_info = $this->nmsdb->get_base_info();
		global $base_info;
		$base_info = $_base_info;
		$data['base_info'] = $base_info;
		
		if ($flag == '')
		{
			$data['msg'] = '';
		}
		else if ($flag == 'wrong')
		{
			$msg = '帐号密码有误';
			$data['msg'] = $flag;
		}
			
		$this->session->set_userdata('company_name', $base_info->name);
		$this->session->set_userdata('version', $base_info->version);
		$this->session->set_userdata('title', $base_info->title);
		$this->load->view('head', $data);
		$this->load->view('login');
		$this->load->view('foot');
	}
	
	//处理登录表单
	function do_login()
	{
		$this->form_validation->set_rules('username', '用户名', 'trim|required');
		$this->form_validation->set_rules('password', '密码', 'trim|required');
		if ($this->form_validation->run() == TRUE)
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			if ($user_info = $this->nmsdb->check_login($username, $password))
			{
				$this->session->set_userdata('username', $username);
				$this->session->set_userdata('access', $user_info->access);
				
				//打印数组
				/*
				foreach ($this->session->all_userdata() as $key=>$value)
				{
					echo $key . ': ' . $value . br();	
				}*/
				
				redirect('/snmp');
				
			}
			else 
			$this->index('wrong');
		}
		else
			$this->index('wrong');
	}
}
?>