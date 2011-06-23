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
		$("#snmp_add_err_msg").show();
	});	
	</script>
	<?php 
	}
	echo form_open('/snmp/do_snmp_query', 'id="form_snmp_query"');
	?>
	
	<input id="dev_submit_type" type="hidden" name="dev_submit_type" value="">
		<div class="snmp_top_menu">
			<table cellspacing="10px" style="width: 900px;">
				<tr>
					<td class="snmp_add_cell">
					<?php 
					echo form_dropdown('dev_id', $dev_id);
					?>
					</td>
					<td class="snmp_add_cell">
					<input id="oid" type="text" name="oid" class="snmp_add_input" style="width: 150px; font-size: 13px;"
						value="">
					</td>
					<td class="snmp_add_cell">
					<div id="snmp_get">snmp get</div>
					</td>
					<td class="snmp_add_cell">
					<div id="snmp_walk">snmp_walk</div>
					</td>
					<td>
					<div id="snmp_add_err_msg" class="snmp_add_err_msg" style="width: 200px;">错 误 操 作</div>
					</td>
				</tr>
			</table>
		</div>
		<?php echo form_close();?>
		<div class="snmp_list_div" style="margin-top: -2px;">
			<textarea id="textarea" class="textarea"><?php 
		if ($ret)
		{
			foreach ($ret as $key => $val)
			{
				echo $key . ' = ' . $val . "\n";
			}
		}
		?>
		</textarea>
		</div>
	</div>


</body>
</html>