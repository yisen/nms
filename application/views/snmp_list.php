<html>
<head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/snmp.css">
<script type="text/javascript" charset="utf-8" src="<?php echo base_url();?>/css/snmp.js"></script>
</head>
<body>
	<div class="snmp_div">
	<?php 
	if ($flag == 'w')
	{
	?>
	<script type="text/javascript">
	$(document).ready(function()
	{
		$("#snmp_err").show();
	});	
	</script>
	<?php 
	}
	echo form_open('/snmp/do_snmp_dev', 'id="form_snmp"');
	?>
	<input id="submit_type" type="hidden" name="submit_type" value="">
		<div class="snmp_top_menu">
			<table cellspacing="10px" style="width: 900px;">
				<tr>
					<td class="snmp_top_menu_cell">
					<div id="add_dev">增加新的设备</div>
					</td>
					<td class="snmp_top_menu_cell">
					<div id="modify_dev">修改所选设备</div>
					</td>
					<td class="snmp_top_menu_cell">
					<div id="del_dev">删除所选设备</div>
					</td>
					<td class="snmp_top_menu_cell">
					<div id="del_all_dev">删除所有设备</div>
					</td>
					<td>
					<div id="snmp_err" class="snmp_err_msg">错 误 操 作</div>
					</td>
				</tr>
			</table>
		</div>
		<div class="snmp_list_div">
			<table style="text-align: center;  margin:10px auto;">
				<tr style="width: ">
					<td></td>
					<td class="snmp_list_cell">设备名称</td>
					<td class="snmp_list_cell">设备地址</td>
					<td class="snmp_list_cell">设备类型</td>
					<td class="snmp_list_cell">rw community</td>
					<td class="snmp_list_cell">ro community</td>
				</tr>
				<?php 
				foreach ($snmp_list as $device)
				{
					echo '<tr>';
					echo '<td>' . form_radio('snmp_dev', $device->id) . '</td>';
					echo '<td>' . anchor("/snmp/dev/{$device->id}", "$device->name") . '</td>';
					echo '<td>' . $device->ipaddr. '</td>';		
					echo '<td>' . $device->type. '</td>';	
					echo '<td>' . $device->rwcommunity. '</td>';		
					echo '<td>' . $device->rocommunity. '</td>';	
					echo '</tr>';	
				}
				?>
			
			
			</table>
		
		</div>
	<?php echo form_close();?>
	</div>
	
	
</body>
</html>
