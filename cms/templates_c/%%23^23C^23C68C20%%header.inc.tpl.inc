<?php /* Smarty version 2.6.18, created on 2014-01-21 12:44:54
         compiled from default/header.inc.tpl */

$this->_cache_serials['D:/Program Files/lamp/Apache24/htdocs/xsphp/cms/templates_c/\%%23^23C^23C68C20%%header.inc.tpl.inc'] = '8a33f92cdc85db6435ea506ee519a16d';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'cacheless', 'default/header.inc.tpl', 16, false),array('modifier', 'date_format', 'default/header.inc.tpl', 18, false),)), $this); ?>
<?php
function _smarty_tplfunc_8a33f92cdc85db6435ea506ee519a16d_0(&$_smarty)
{
$_smarty->_tag_stack[] = array('cacheless', array()); $_block_repeat=true;smarty_block_cacheless($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], null, $_smarty, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<?php if ($_SESSION['isLogin']): ?>
          						&nbsp;<b> <?php echo $_SESSION['uname']; ?>
 您好!&nbsp;现在是<?php echo ((is_array($_tmp=time())) ? $_smarty->_run_mod_handler('date_format', true, $_tmp, "%m月%d日%H点%M分") : smarty_modifier_date_format($_tmp, "%m月%d日%H点%M分")); ?>
&nbsp;[<a href="login.php?action=logout">退出</a>]  </b>
						<?php else: ?>
						<form action="login.php?action=login" method="post">
							&nbsp;
							       <input type="hidden" name="url" value="<?php echo $_smarty->_tpl_vars['url']; ?>
">
							用户名:<input class="inputheight" name="username" type="text" size="10">&nbsp;
							密码:<input class="inputheight" name="password" type="password" size="10">
							<input type="submit" class="button"  name="loginsubmit" value="登录">&nbsp;
							<a href="register.php"><span style="color:red">免费注册</span></a>
						</form>
						<?php endif; ?>
						<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_cacheless($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], $_block_content, $_smarty, $_block_repeat); }  array_pop($_smarty->_tag_stack); 
}



?>
