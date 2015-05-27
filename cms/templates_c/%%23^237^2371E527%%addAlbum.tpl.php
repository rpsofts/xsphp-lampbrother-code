<?php /* Smarty version 2.6.18, created on 2014-01-21 12:49:11
         compiled from admin/addAlbum.tpl */ ?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
		<title>无标题文档</title>
		<meta name="Author" content="高洛峰" />
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
		    <form  method="post" action="main.php?action=<?php echo $this->_tpl_vars['action']; ?>
">
			<div class="msg-box">
				<ul class="viewmess">
					<li class="light-row">
						<span class="col_width">上级相册</span>
							<?php echo $this->_tpl_vars['select']; ?>
	
						</li>
					<li class="dark-row">
						<span class="col_width">相册标题<span class="red_font">*</span></span>
						<input type="text" class="text-box" name="catTitle" size="20" value="<?php echo $this->_tpl_vars['post']['catTitle']; ?>
">
					</li>
					<li class="light-row">
						<span class="col_width" style="margin-top:30px">相册描述</span>
						<textarea class="text-box" name="description" cols="30" rows="5"><?php echo $this->_tpl_vars['post']['description']; ?>
</textarea>
					</li>
				
					<li class="dark-row">
						<span class="col_width"> &nbsp; </span>
						<input type="hidden" name="action" value="<?php echo $this->_tpl_vars['act']; ?>
">
						<input type="submit" class="button" name="mod" value="<?php echo $this->_tpl_vars['submitButton']; ?>
">&nbsp;&nbsp;
						<input type="reset" class="button" value="重 置">
					</li>
				</ul>	
			</div>
                    </form>	
		</div>
	</body>
</html>