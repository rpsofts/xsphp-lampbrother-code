<?php /* Smarty version 2.6.18, created on 2014-01-21 12:48:38
         compiled from admin/top.tpl */ ?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
		<title>�ޱ����ĵ�</title>
		<meta name="Author" content="�����" />
		<meta name="Keywords" content="php,lampbrother" />
		<link rel="stylesheet" type="text/css" href="style/lampcms.css">
	</head>

	<body>
		<div id="top">
			<div class="left">
				<a herf="index.php"><img  border="0" src="images/logo.gif"></a>
			</div>

		
			<div class="right_tool">
					<ul>
						<li><a href="<?php echo $this->_tpl_vars['appPath']; ?>
" target="_top"><img border=0 src="images/exit4.gif"></a></li>
						<li><a href="login.php" target="_top"><img border=0 src="images/exit3.gif"></a></li>
					</ul>
			</div>
			<div class="right_user">
				<b>��ӭ��-</b><?php echo $_SESSION['uname']; ?>
 &nbsp;&nbsp;
			</div>
		</div>
	</body>
</html>
