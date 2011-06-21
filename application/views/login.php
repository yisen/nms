<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/login.css">

</head>
<body>
	<div class="login_div">
		<div class="login_top">
			<div class="login_title">登 录</div>
		</div>
		<div class="login_inner">
			<div class="login_text">登录到交换机：</div>
			<?php
			//echo validation_errors();
			echo form_open('login/do_login');
			?>
			<table class="login_table">
				<tr>
					<td>用户名</td>
					<td>
						<input id="username" style="width: 120px" name="username" type="text">
					</td>
					<td><div style="color: red;" id="input_error"><?php echo $msg;?></div></td>
				</tr>
				<tr>
					<td>密 码</td>
					<td>
						<input id="password" style="width: 120px" name="password" type="password">
					</td>
					<td>
					<?php 
					echo form_submit('submit', '登 录', 'style="width: 60px;"') . br();
					?> 
					</td>
				</tr>
			</table>
			<?php echo form_close(); ?>
		</div>
	</div>
</body>
</html>
