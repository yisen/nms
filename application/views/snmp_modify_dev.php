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
	echo form_open('/snmp/do_modify_dev');
	echo form_hidden('dev_id', $dev_info->id);
	?>
	<div class="snmp_div">
		<div class="snmp_add_div">
			<div class="snmp_add_border">
				<div class="snmp_add_banner">&nbsp;修改SNMP设备</div>
				
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
							class="snmp_add_input" value="<?php echo $dev_info->name;?>">
						</td>
						<td class="snmp_add_cell"><input type="text" name="dev_addr"
							class="snmp_add_input" value="<?php echo $dev_info->ipaddr;?>">
						</td>
						<td class="snmp_add_cell"><input type="text" name="dev_type"
							class="snmp_add_input" value="<?php echo $dev_info->type;?>">
						</td>
						<td class="snmp_add_cell"><input type="text" name="dev_rw"
							class="snmp_add_input" value="<?php echo $dev_info->rwcommunity;?>">
						</td>
						<td class="snmp_add_cell"><input type="text" name="dev_ro"
							class="snmp_add_input" value="<?php echo $dev_info->rocommunity;?>">
						</td>
					</tr>
				</table>
				<table class="snmp_add_submit" cellspacing="10px">
					<tr>
						<td id="snmp_add_err_msg" colspan="2" class="snmp_add_err_msg">
						修 改 设 备 出 错
						</td>
					</tr>
					<tr>
						<td width="50%">
							<input type="submit" value="修 改" class="snmp_add_submit_cell">
						</td>
						<td width="50%">
							<input type="reset" value="重 置" class="snmp_add_submit_cell">
						</td>
					</tr>
				</table>
				
			</div>
		</div>
	</div>
	<?php form_close(); ?>
	
	
</body>
</html>
