<?php /* Smarty version 2.6.18, created on 2014-01-21 12:45:10
         compiled from default/message.tpl */ ?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
		<title><?php echo $this->_tpl_vars['appName']; ?>
--提示消息</title>
		<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['stylePath']; ?>
/css/global.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['stylePath']; ?>
/css/layout.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['stylePath']; ?>
/css/print.css">
	<body>
	<div id="notice">

		<div><?php echo $this->_tpl_vars['infotitle']; ?>
</div>
		<div class="info">
			<?php echo $this->_tpl_vars['error']; ?>

		</div>
		<p>
			
			<a href="<?php echo $this->_tpl_vars['url']; ?>
">如果你的浏览器没有自动跳转，请点击这里...</a>
		

		

		</p>
		<script>
			setInterval("window.location.href='<?php echo $this->_tpl_vars['url']; ?>
'", "3000");
		</script>
	</div>
	</body>
	</html>