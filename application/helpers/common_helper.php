<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('get_base_info'))
{
	function get_base_info($obj)
	{
		$base_info = $obj->nmsdb->get_base_info();
		return $base_info;
	}
}

if ( ! function_exists('print_array'))
{
	function print_array($data)
	{
		foreach ($data as $key=>$value)
		{
			echo $key . ': ' . $value . br();	
		}
	}
}

/* End of file array_helper.php */
/* Location: ./system/helpers/array_helper.php */