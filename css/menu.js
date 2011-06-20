function stateChange(xmlhttp, div_id)
{
	if (xmlhttp.readyState==4 && xmlhttp.status==200)
		document.getElementById(div_id).innerHTML=xmlhttp.responseText;
}


function loadTxt(url, div_id)
{
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange=function()
	{
		stateChange(xmlhttp, div_id);
	};
	xmlhttp.open("GET", url, true);
	xmlhttp.send();
}

$(document).ready(function(){
		$(".menu_child").hide();	
		//$("#nav_index").css("background-color", "#EBEBEB");
		$("#index_root").click(function(){
			$("#config_child").slideUp(100);	
			$("#snmp_child").slideUp(100);	
			$("#ser_child").slideUp(100);	
			$("#log_child").slideUp(100);	
			$("#index_child").slideToggle(100);	
			});
		$("#config_root").click(function(){
			$("#index_child").slideUp(100);	
			$("#snmp_child").slideUp(100);	
			$("#ser_child").slideUp(100);	
			$("#log_child").slideUp(100);	
			$("#config_child").slideToggle(100);	
			});
		$("#snmp_root").click(function(){
			$("#index_child").slideUp(100);	
			$("#config_child").slideUp(100);	
			$("#ser_child").slideUp(100);	
			$("#log_child").slideUp(100);	
			$("#snmp_child").slideToggle(100);	
			});
		$("#ser_root").click(function(){
			$("#index_child").slideUp(100);	
			$("#config_child").slideUp(100);	
			$("#snmp_child").slideUp(100);	
			$("#log_child").slideUp(100);	
			$("#ser_child").slideToggle(100);	
			});
		$("#log_root").click(function(){
			$("#index_child").slideUp(100);	
			$("#config_child").slideUp(100);	
			$("#snmp_child").slideUp(100);	
			$("#ser_child").slideUp(100);	
			$("#log_child").slideToggle(100);	
			});
			
		$(".menu_cell").mouseenter(function(){
			$(this).css("background-color", "#EBEBEB");
			});
		$(".menu_cell").mouseout(function(){
			$(this).css("background-color", "white");
			//$("#nav_index").css("background-color", "#EBEBEB");
			});
			
		$("#nav_index").click(function(){
			//window.location="../cgi-bin/S_index";
			window.location="../cgi-bin/S_session?do_login";
			});
		$("#nav_flow").click(function(){
			window.location="../cgi-bin/S_session?flow";
			});
			
		$("#nav_pass").click(function(){
			window.location="../cgi-bin/S_session?../switch/pass_config.html"
			});
		$("#nav_lan").click(function(){
			window.location="../cgi-bin/S_session?../switch/lan_config.html"
			});
		$("#nav_port_vlan").click(function(){
			window.location="../cgi-bin/S_session?../switch/port_vlan.html"
			});
			
		$("#nav_snmpconf").click(function(){
			window.location="../cgi-bin/S_session?../switch/snmpconf.html"
			});
		$("#nav_snmpget").click(function(){
			window.location="../cgi-bin/S_session?../switch/snmpget.html"
			});
			
		$("#nav_log").click(function(){
			window.location="../cgi-bin/S_session?load_log"
			});
		$("#nav_log_config").click(function(){
			window.location="../cgi-bin/S_session?set_log"
			});
		
});	


