<?php /* Smarty version 2.6.18, created on 2014-01-21 12:44:54
         compiled from default/header.inc.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'cacheless', 'default/header.inc.tpl', 16, false),array('modifier', 'date_format', 'default/header.inc.tpl', 18, false),)), $this); ?>
<?php $this->_cache_serials['D:/Program Files/lamp/Apache24/htdocs/xsphp/cms/templates_c/\%%23^23C^23C68C20%%header.inc.tpl.inc'] = '8a33f92cdc85db6435ea506ee519a16d'; ?><html>
	<head>
		<title><?php echo $this->_tpl_vars['appName']; ?>
</title>
		<meta name="Author" content="高洛峰" />
		<meta name="Keywords" content="php,lampbrother" />
		<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['stylePath']; ?>
/css/global.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['stylePath']; ?>
/css/layout.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['stylePath']; ?>
/css/print.css">
		<script src="<?php echo $this->_tpl_vars['stylePath']; ?>
/javascript/common.js"></script>
	</head>
	<body>
		<div id="content">
			<div id="header">
				<div id="top">
					<div id="top_left">
						<?php if ($this->caching && !$this->_cache_including): echo '{nocache:8a33f92cdc85db6435ea506ee519a16d#0}'; endif;$this->_tag_stack[] = array('cacheless', array()); $_block_repeat=true;smarty_block_cacheless($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<?php if ($_SESSION['isLogin']): ?>
          						&nbsp;<b> <?php echo $_SESSION['uname']; ?>
 您好!&nbsp;现在是<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m月%d日%H点%M分") : smarty_modifier_date_format($_tmp, "%m月%d日%H点%M分")); ?>
&nbsp;[<a href="login.php?action=logout">退出</a>]  </b>
						<?php else: ?>
						<form action="login.php?action=login" method="post">
							&nbsp;
							       <input type="hidden" name="url" value="<?php echo $this->_tpl_vars['url']; ?>
">
							用户名:<input class="inputheight" name="username" type="text" size="10">&nbsp;
							密码:<input class="inputheight" name="password" type="password" size="10">
							<input type="submit" class="button"  name="loginsubmit" value="登录">&nbsp;
							<a href="register.php"><span style="color:red">免费注册</span></a>
						</form>
						<?php endif; ?>
						<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_cacheless($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); if ($this->caching && !$this->_cache_including): echo '{/nocache:8a33f92cdc85db6435ea506ee519a16d#0}'; endif;?>
					</div>

					<div id="top_right">
						<form action="search.php" method="get">
							<input type="radio" <?php if ($this->_tpl_vars['serType'] == 'title' || $this->_tpl_vars['serType'] == null): ?> checked <?php endif; ?> name="serType" value="title">标题
							<input type="radio" <?php if ($this->_tpl_vars['serType'] == 'content'): ?> checked <?php endif; ?> name="serType" value="content">内容
							<input type="radio" <?php if ($this->_tpl_vars['serType'] == 'keyword'): ?> checked <?php endif; ?> name="serType" value="keyword">关键字
							<input type="text"  name="search" size="15" value="<?php echo $this->_tpl_vars['searchValue']; ?>
" maxlength="255">
							<input type="submit"  class="button"  value="搜索">&nbsp;
						</form>
					</div>
				</div>
				
				<div id="logo">
					<a href="<?php echo $this->_tpl_vars['appPath']; ?>
"><img border="0" alt="lampBrother_logo" src="<?php echo $this->_tpl_vars['stylePath']; ?>
/images/logo.gif"></a>
				</div>
				<div id="right_box">
					<div id="banner">	
   						<a href=""><img width="500" height="70" alt="banner" src="<?php echo $this->_tpl_vars['stylePath']; ?>
/images/banner.gif" border=0></a>
					</div>

					<div id="tool">
						
						<ul>
							<li><a href="">用户定义</a></li>
							<li><a href="">用户定义</a></li>
							<li><a href="">用户定义</a></li>
							<li><a href="">用户定义</a></li>
						</ul>
					</div>
				</div>
				<div class="nav"> </div>
			</div>	
			<div id="menu">
				<ul>
					<li><a href="column.php?pid=1">网站首页</a></li><li class="menudiv"> </li>
				
					<?php unset($this->_sections['li']);
$this->_sections['li']['name'] = 'li';
$this->_sections['li']['loop'] = is_array($_loop=$this->_tpl_vars['menu']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['li']['show'] = true;
$this->_sections['li']['max'] = $this->_sections['li']['loop'];
$this->_sections['li']['step'] = 1;
$this->_sections['li']['start'] = $this->_sections['li']['step'] > 0 ? 0 : $this->_sections['li']['loop']-1;
if ($this->_sections['li']['show']) {
    $this->_sections['li']['total'] = $this->_sections['li']['loop'];
    if ($this->_sections['li']['total'] == 0)
        $this->_sections['li']['show'] = false;
} else
    $this->_sections['li']['total'] = 0;
if ($this->_sections['li']['show']):

            for ($this->_sections['li']['index'] = $this->_sections['li']['start'], $this->_sections['li']['iteration'] = 1;
                 $this->_sections['li']['iteration'] <= $this->_sections['li']['total'];
                 $this->_sections['li']['index'] += $this->_sections['li']['step'], $this->_sections['li']['iteration']++):
$this->_sections['li']['rownum'] = $this->_sections['li']['iteration'];
$this->_sections['li']['index_prev'] = $this->_sections['li']['index'] - $this->_sections['li']['step'];
$this->_sections['li']['index_next'] = $this->_sections['li']['index'] + $this->_sections['li']['step'];
$this->_sections['li']['first']      = ($this->_sections['li']['iteration'] == 1);
$this->_sections['li']['last']       = ($this->_sections['li']['iteration'] == $this->_sections['li']['total']);
?>
						<li><a href="column.php?pid=<?php echo $this->_tpl_vars['menu'][$this->_sections['li']['index']]['colId']; ?>
"><?php echo $this->_tpl_vars['menu'][$this->_sections['li']['index']]['colTitle']; ?>
</a></li><li class="menudiv"> </li>
					<?php endfor; endif; ?>
					<li><a href="http://bbs.lampbrother.net" target="_blank">论坛交流</a></li>
				</ul>			
			</div>
			<div class="nav"> </div>
			<div id="container">
			