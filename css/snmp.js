$(document).ready(function()
{
	$("#snmp_err").hide();
	$("#snmp_add_err_msg").hide();
	//刷新后充值
	$("#submit_type").attr("value", "");
	//
	$("#add_dev").click(function(){
		$("#submit_type").attr("value", "add_dev");
		$("#form_snmp").submit();
		});
	$("#del_dev").click(function(){
		$("#submit_type").attr("value", "del_dev");
		$("#form_snmp").submit();
		});
	$("#modify_dev").click(function(){
		$("#submit_type").attr("value", "modify_dev");
		$("#form_snmp").submit();
		});
	$("#del_all_dev").click(function(){
		$("#submit_type").attr("value", "del_all");
		$("#form_snmp").submit();
		});
});	


