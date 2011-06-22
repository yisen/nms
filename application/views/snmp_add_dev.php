<html>
<head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/snmp.css">
<script type="text/javascript" charset="utf-8" src="<?php echo base_url();?>/css/snmp.js"></script>
</head>
<body>
	<?php 
	if ($flag == 'w')
	{
	?>
	<script type="text/javascript">
	$(document).ready(function()
	{
		$("#snmp_add_err_msg").show();
	});	
	</script>
	<?php 
	}
	echo form_open('snmp/do_add_dev');
	?>
	<div class="snmp_div">
		<div class="snmp_add_div">
			<div class="snmp_add_border">
				<div class="snmp_add_banner">&nbsp;增加新的SNMP设备</div>
				
				<table cellspacing="10px" class="snmp_add_table">
					<tr>
						<td class="snmp_add_cell">设备名称</td>
						<td class="snmp_add_cell">设备地址</td>
						<td class="snmp_add_cell">设备类型</td>
						<td class="snmp_add_cell">rw community</td>
						<td class="snmp_add_cell">ro community</td>
					</tr>
					<tr>
						<td class="snmp_add_cell"><input type="text" name="dev_name"
							class="snmp_add_input">
						</td>
						<td class="snmp_add_cell"><input type="text" name="dev_addr"
							class="snmp_add_input">
						</td>
						<td class="snmp_add_cell"><input type="text" name="dev_type"
							class="snmp_add_input">
						</td>
						<td class="snmp_add_cell"><input type="text" name="dev_rw"
							class="snmp_add_input">
						</td>
						<td class="snmp_add_cell"><input type="text" name="dev_ro"
							class="snmp_add_input">
						</td>
					</tr>
				</table>
				<table class="snmp_add_submit" cellspacing="10px">
					<tr>
						<td id="snmp_add_err_msg" colspan="2" class="snmp_add_err_msg">
						增 加 设 备 出 错
						</td>
					</tr>
					<tr>
						<td width="50%">
							<input type="submit" value="增 加" class="snmp_add_submit_cell">
						</td>
						<td width="50%">
							<input type="reset" value="重 置" class="snmp_add_submit_cell">
						</td>
					</tr>
				</table>
				
			</div>
		</div>
	</div>
	<?php 
	echo form_close();
	?>


</body>
</html>