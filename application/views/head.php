<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/head.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/foot.css">
	
	
	<script type="text/javascript" charset="utf-8" src="<?php echo base_url();?>/css/jquery.js"></script>
	<script type="text/javascript" charset="utf-8" src="<?php echo base_url();?>/css/menu.js"></script>
	<title><?php echo $base_info->title;?></title>

</head>
<body>
	<table class="top">
		<tr>
			<td style="text-align: left;"><?php echo $base_info->banner;?></td>
			<td style="text-align: right;">软件版本：<?php echo $base_info->version;?></td>
		</tr>
	</table>
	<div class="banner_center">
		<img src="<?php echo base_url();?>/img/<?php echo $base_info->logo_path;?>" />
	</div>
	<div class="login_banner"></div>
</body>
</html>
