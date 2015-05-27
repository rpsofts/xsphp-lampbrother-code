<?php /* Smarty version 2.6.18, created on 2014-01-21 12:48:43
         compiled from admin/sysInfo.tpl */ ?>
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
			<div class="msg-box">
				<ul class="viewmess">
					<?php $_from = $this->_tpl_vars['sysinfo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['info'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['info']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['info']['iteration']++;
?>
						<?php if (!(1 & $this->_foreach['info']['iteration'])): ?>
							<li class="dark-row">
						<?php else: ?>
							<li class="light-row">
						<?php endif; ?> 
							<span class="col_width"><?php echo $this->_tpl_vars['key']; ?>
</span><?php echo $this->_tpl_vars['item']; ?>

						</li>
					<?php endforeach; endif; unset($_from); ?>
				</ul>		
			</div>
		</div>
	</body>
</html>