<?php /* Smarty version 2.6.18, created on 2014-01-21 12:49:56
         compiled from admin/editAlbum.tpl */ ?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
		<title>�ޱ����ĵ�</title>
		<meta name="Author" content="�����" />
		<meta name="Keywords" content="php,lampbrother" />
		<link rel="stylesheet" type="text/css" href="style/lampcms.css">
	</head>
	<body>
		<div id="main">
		    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/title.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		    <form  method="post" action="main.php?action=album">
			<div class="msg-box">
				<ul class="viewmess">
					<li class="dark-row">
						<span class="col_width width_font">�������</span>
						<span class="col_width width_font">��&nbsp;&nbsp;��</span>
						<span class="col_width width_font">��&nbsp;&nbsp;��</span>
					</li>
					<?php echo $this->_tpl_vars['list']; ?>

				</ul>	
			</div>
                    </form>
		</div>
	</body>
</html>