<?php
class Nmsdb extends CI_Model 
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    //获取基本信息
    function get_base_info()
    {
    	$this->db->select('*')->from('company');
		$query = $this->db->get();
		return $query->row();
    }
    
    //验证帐号密码
    function check_login($username, $password)
    {
    	$this->db->select('*')->from('user')->where('username', $username)->where('password', $password);
    	$query = $this->db->get();
    	return $query->row();
    }
    
    //获取所有snmp设备
    function snmp_list()
    {
    	$this->db->select('*')->from('snmplist');
    	$query = $this->db->get();
    	return $query->result();
    }
    
    //删除设备
    function del_dev($dev_id)
    {
    	$this->db->where('id', $dev_id)->delete('snmplist');
    	if ($this->db->affected_rows() > 0)
    		return 1;
    	else
    		return 0;
    }
    
    //增加设备
    function add_dev($data)
    {
    	$this->db->set('name', $data['dev_name'])->set('ipaddr', $data['dev_addr'])->set('type', $data['dev_type'])
    		->set('rwcommunity', $data['dev_rw'])->set('rocommunity', $data['dev_ro'])->insert('snmplist');
    	if ($this->db->affected_rows() > 0)
    		return 1;
    	else
    		return 0;
    }
    
    //获取设备信息
    function get_dev_info($dev_id)
    {
    	$this->db->select('*')->where('id', $dev_id)->from('snmplist');
    	$query = $this->db->get();
    	return $query->row();
    }
    
    //修改设备信息
    function modify_dev($data)
    {
    	$this->db->set('name', $data['dev_name'])->set('ipaddr', $data['dev_addr'])->set('type', $data['dev_type'])
    		->set('rwcommunity', $data['dev_rw'])->set('rocommunity', $data['dev_ro'])
    		->where('id', $data['dev_id'])->update('snmplist');
    	if ($this->db->affected_rows() > 0)
    		return 1;
    	else
    		return 0;
    }
    
    //删除所有设备
    function del_all_dev()
    {
    	$this->db->empty_table('snmplist');
   		if ($this->db->affected_rows() > 0)
    		return 1;
    	else
    		return 0;
    }
    
}