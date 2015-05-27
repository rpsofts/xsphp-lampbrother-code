<?php /* Smarty version 2.6.18, created on 2014-01-21 12:48:56
         compiled from admin/editFlink.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'admin/editFlink.tpl', 26, false),)), $this); ?>
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
		    <form  method="post" action="main.php?action=editFlink&page=<?php echo $this->_tpl_vars['pageInfo']['current_page']; ?>
" >
			<div class="msg-box">
				<ul class="viewmess">
					<li class="dark-row">
						<span class="list_width width_font">网站名称</span>
						<span class="list_width width_font" style="width:200px">网站地址</span>
						<span class="list_width width_font">添加时间</span>
						<span class="list_width width_font">操&nbsp;&nbsp;作</span>
					</li>
				        <?php unset($this->_sections['doc']);
$this->_sections['doc']['name'] = 'doc';
$this->_sections['doc']['loop'] = is_array($_loop=$this->_tpl_vars['links']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['doc']['show'] = true;
$this->_sections['doc']['max'] = $this->_sections['doc']['loop'];
$this->_sections['doc']['step'] = 1;
$this->_sections['doc']['start'] = $this->_sections['doc']['step'] > 0 ? 0 : $this->_sections['doc']['loop']-1;
if ($this->_sections['doc']['show']) {
    $this->_sections['doc']['total'] = $this->_sections['doc']['loop'];
    if ($this->_sections['doc']['total'] == 0)
        $this->_sections['doc']['show'] = false;
} else
    $this->_sections['doc']['total'] = 0;
if ($this->_sections['doc']['show']):

            for ($this->_sections['doc']['index'] = $this->_sections['doc']['start'], $this->_sections['doc']['iteration'] = 1;
                 $this->_sections['doc']['iteration'] <= $this->_sections['doc']['total'];
                 $this->_sections['doc']['index'] += $this->_sections['doc']['step'], $this->_sections['doc']['iteration']++):
$this->_sections['doc']['rownum'] = $this->_sections['doc']['iteration'];
$this->_sections['doc']['index_prev'] = $this->_sections['doc']['index'] - $this->_sections['doc']['step'];
$this->_sections['doc']['index_next'] = $this->_sections['doc']['index'] + $this->_sections['doc']['step'];
$this->_sections['doc']['first']      = ($this->_sections['doc']['iteration'] == 1);
$this->_sections['doc']['last']       = ($this->_sections['doc']['iteration'] == $this->_sections['doc']['total']);
?>
						<li class="light-row" style="padding-top:2px; padding-bottom:2px">
							<span class="list_width"><input type="text" name="linkOrder[]" size="2" maxlength="3" value="<?php echo $this->_tpl_vars['links'][$this->_sections['doc']['index']]['ord']; ?>
">&nbsp;<?php echo $this->_tpl_vars['links'][$this->_sections['doc']['index']]['webName']; ?>
</span>
							<input type="hidden" name="linkIds[]" value="<?php echo $this->_tpl_vars['links'][$this->_sections['doc']['index']]['id']; ?>
">
							<span class="list_width" style="width:200px"><?php echo $this->_tpl_vars['links'][$this->_sections['doc']['index']]['url']; ?>
</span>
							<span class="list_width"><?php echo ((is_array($_tmp=$this->_tpl_vars['links'][$this->_sections['doc']['index']]['dtime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</span>
				
							<span class="list_width" style="width:160px;">
						
							【<a href="main.php?action=addFlink&edit=mod&id=<?php echo $this->_tpl_vars['links'][$this->_sections['doc']['index']]['id']; ?>
">修改</a>】
							【<a onclick="return confirm('确定要删除友情链接<?php echo $this->_tpl_vars['links'][$this->_sections['doc']['index']]['webName']; ?>
吗？')" href="main.php?action=editFlink&page=<?php echo $this->_tpl_vars['pageInfo']['current_page']; ?>
&id=<?php echo $this->_tpl_vars['links'][$this->_sections['doc']['index']]['id']; ?>
&edit=del">删除</a>】
							</span>
						</li>
					<?php endfor; else: ?>
						<li class="light-row">
							没有添加任何友情链接
						</li>
					<?php endif; ?>
				
					<li class="dark-row">
						<span class="col_width" style="margin-left:20px;width:240px"> 
							<input class="button" name="order" type="submit" value="改变显示顺序">
						 </span> 
						<span class="right">
							共 <b><?php echo $this->_tpl_vars['pageInfo']['row_total']; ?>
</b> 个友情链接,本页显示 <?php echo $this->_tpl_vars['pageInfo']['page_start']; ?>
-<?php echo $this->_tpl_vars['pageInfo']['page_end']; ?>
 个&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['pageInfo']['current_page']; ?>
/<?php echo $this->_tpl_vars['pageInfo']['page_num']; ?>
&nbsp;&nbsp;&nbsp;&nbsp;
							<?php if ($this->_tpl_vars['pageInfo']['current_page'] == 1): ?>
								<img border=0  alt="第一页" src="images/first.gif">&nbsp;&nbsp;
							<?php else: ?>
								<a href="main.php?action=editFlink&page=1"><img border=0 alt="第一页" src="images/first.gif"></a>&nbsp;&nbsp;
							<?php endif; ?>
							<?php if ($this->_tpl_vars['pageInfo']['prev_page']): ?>	
								<a href="main.php?action=editFlink&&page=<?php echo $this->_tpl_vars['pageInfo']['prev_page']; ?>
"><img border=0  alt="上一页" src="images/prev.gif"></a>&nbsp;&nbsp;
							<?php else: ?>
								<img border=0  alt="上一页" src="images/prev.gif">&nbsp;&nbsp;
							<?php endif; ?>
						
						
							<?php if ($this->_tpl_vars['pageInfo']['next_page']): ?>	
								<a href="main.php?action=editFlink&page=<?php echo $this->_tpl_vars['pageInfo']['next_page']; ?>
"><img border=0  alt="下一页" src="images/next.gif"></a>&nbsp;&nbsp;
							<?php else: ?>
								<img border=0  alt="下一页" src="images/next.gif">&nbsp;&nbsp;
							<?php endif; ?>
							<?php if ($this->_tpl_vars['pageInfo']['current_page'] == $this->_tpl_vars['pageInfo']['page_num']): ?>
								<img border=0  alt="最后一页" src="images/last.gif">&nbsp;&nbsp;
							<?php else: ?>
								<a href="main.php?action=editFlink&page=<?php echo $this->_tpl_vars['pageInfo']['page_num']; ?>
"><img border=0 alt="最后一页" src="images/last.gif"></a>&nbsp;&nbsp;
							<?php endif; ?>
						</span>
					</li>
				</ul>	
			</div>
                    </form>
		</div>
	</body>
</html>