$(document).ready(function()
{
	$("#snmp_err").hide();
	$("#snmp_add_err_msg").hide();
	//$("#textarea").attr("value", "");
	$("#oid").focus(function(){
		$("#oid").attr("value", "");
	});
//	$("#ipaddr").focus(function(){
//		$("#ipaddr").attr("value", "");
//	});
	
	//刷新后重置，snmp_list的表单
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
	
	//刷新后重置，snmp_dev的表单
	$("#dev_submit_type").attr("value", "");
	//
	var msg = "please input: OID";
	//var ipmsg = "please input: IP";
	$("#oid").attr("value", msg);
	//$("#ipaddr").attr("value", ipmsg);
	$("#snmp_get").click(function(){
//		if (($("#oid").attr("value") == msg) || ($("#ipaddr").attr("value") == ipmsg))
//		{
//			$("#oid").attr("value", "");
//			$("#ipaddr").attr("value", "1");
//		}
		if (($("#oid").attr("value") == msg))
		{
			$("#oid").attr("value", "");
		}
		$("#dev_submit_type").attr("value", "snmp_get");
		$("#form_snmp_query").submit();
		});
	
	$("#snmp_walk").click(function(){
		$("#dev_submit_type").attr("value", "snmp_walk");
		$("#form_snmp_query").submit();
		});
});	


