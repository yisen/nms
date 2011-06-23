<html>
<head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/nav.css">
<script type="text/javascript" charset="utf-8" src="<?php echo base_url();?>/css/nav.js"></script>

<script type="text/javascript">
$(document).ready(function(){
//页面链接
	$("#nav_1_1").click(function(){
		window.location="<?php echo site_url() . '/snmp/index';?>";
	});
	$("#nav_1_2").click(function(){
		window.location="<?php echo site_url() . '/snmp/snmp_query';?>";
	});
});
</script>

</head>
<body>
	<div class="nav_div">
		<table class="nav_table">
			<tr class="nav_colum">
				<td id="nav_1_root" class="nav_cell">SNMP
				<div id="nav_1" class="nav_menu_div">
				<div id="nav_1_1" class="nav_menu_cell_div" style="border-bottom-width: 1px;">设备列表</div>
				<div id="nav_1_2" class="nav_menu_cell_div">SNMP查询</div>
				</div>
				
				</td>
				<td id = "nav_2_root" class="nav_cell">参数设置
				<div id="nav_2" class="nav_menu_div">
				<div id="nav_2_1" class="nav_menu_cell_div" style="border-bottom-width: 1px;">系统设置</div>
				<div id="nav_2_2" class="nav_menu_cell_div">系统功能</div>
				</div>
				</td>
				<td id = "nav_3_root" class="nav_cell">日志
				<div id="nav_3" class="nav_menu_div">
				<div id="nav_3_1" class="nav_menu_cell_div" style="border-bottom-width: 1px;">日志查看</div>
				<div id="nav_3_2" class="nav_menu_cell_div">日志设置</div>
				</div>
				</td>
			</tr>
		</table>
	</div>
</body>

</html>


	