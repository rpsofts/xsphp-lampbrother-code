<?php /* Smarty version 2.6.18, created on 2014-01-21 12:51:52
         compiled from admin/editArticle.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'admin/editArticle.tpl', 30, false),)), $this); ?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
		<title>无标题文档</title>
		<meta name="Author" content="高洛峰" />
		<meta name="Keywords" content="php,lampbrother" />
		<link rel="stylesheet" type="text/css" href="style/lampcms.css">
		<script src="javascript/common.js"></script>
	</head>
	<body>
		<div id="main">
		    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/title.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		    <form  method="post" action="main.php?action=editArticle&catId=<?php echo $this->_tpl_vars['catId']; ?>
&page=<?php echo $this->_tpl_vars['pageInfo']['current_page']; ?>
" >
			<div class="msg-box">
				<ul class="viewmess">
					<li class="light-row">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;请从文档分类中选择需要编辑的文档&nbsp;&nbsp; <?php echo $this->_tpl_vars['colSelect']; ?>
	
					</li>
					
					<li class="dark-row">
						<span class="list_width width_font">标题(评论次数)</span>
						<span class="list_width width_font">作&nbsp;&nbsp;者</span>
						<span class="list_width width_font">添加时间</span>
						<span class="list_width width_font">操&nbsp;&nbsp;作</span>
					</li>
				        <?php unset($this->_sections['doc']);
$this->_sections['doc']['name'] = 'doc';
$this->_sections['doc']['loop'] = is_array($_loop=$this->_tpl_vars['arts']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
							<span class="list_width"><input type="checkbox" name="del[]" value="<?php echo $this->_tpl_vars['arts'][$this->_sections['doc']['index']]['id']; ?>
"><a href="<?php echo $this->_tpl_vars['appPath']; ?>
article.php?aid=<?php echo $this->_tpl_vars['arts'][$this->_sections['doc']['index']]['id']; ?>
" target="_blank"><?php echo $this->_tpl_vars['arts'][$this->_sections['doc']['index']]['title']; ?>
</a><span class="red_font">(<?php echo $this->_tpl_vars['arts'][$this->_sections['doc']['index']]['comms']; ?>
)</span></span>
							<span class="list_width"><?php echo $this->_tpl_vars['arts'][$this->_sections['doc']['index']]['author']; ?>
</span>
							<span class="list_width"><?php echo ((is_array($_tmp=$this->_tpl_vars['arts'][$this->_sections['doc']['index']]['postTime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %H:%M:%S") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %H:%M:%S")); ?>
</span>
				
							<span class="list_width" style="width:160px;">
							<?php if ($this->_tpl_vars['arts'][$this->_sections['doc']['index']]['audit'] == 0): ?>
								【<a href="main.php?action=editArticle&edit=audit&catId=<?php echo $this->_tpl_vars['catId']; ?>
&page=<?php echo $this->_tpl_vars['pageInfo']['current_page']; ?>
&id=<?php echo $this->_tpl_vars['arts'][$this->_sections['doc']['index']]['id']; ?>
">审核</a>】
							<?php else: ?>
								【<a href="main.php?action=editArticle&edit=lock&catId=<?php echo $this->_tpl_vars['catId']; ?>
&page=<?php echo $this->_tpl_vars['pageInfo']['current_page']; ?>
&id=<?php echo $this->_tpl_vars['arts'][$this->_sections['doc']['index']]['id']; ?>
">锁定</a>】
							<?php endif; ?>
							【<a href="main.php?action=addArticle&edit=mod&id=<?php echo $this->_tpl_vars['arts'][$this->_sections['doc']['index']]['id']; ?>
">修改</a>】
							【<a onclick="return confirm('确定要删除图片<?php echo $this->_tpl_vars['arts'][$this->_sections['doc']['index']]['title']; ?>
吗？')" href="main.php?action=editArticle&catId=<?php echo $this->_tpl_vars['catId']; ?>
&page=<?php echo $this->_tpl_vars['pageInfo']['current_page']; ?>
&id=<?php echo $this->_tpl_vars['arts'][$this->_sections['doc']['index']]['id']; ?>
&edit=del">删除</a>】
							</span>
						</li>
					<?php endfor; else: ?>
						<li class="light-row">
							本页没有文章
						</li>
					<?php endif; ?>
				
					<li class="dark-row">
						<span class="col_width" style="margin-left:15px;width:240px"> 
							<a href="javascript:select()">全选</a>/<a href="javascript:fanselect()">反选</a>/<a href="javascript:noselect()">全不选</a>&nbsp;&nbsp;选中项: 
							<input  name="audits" type="image" title="审核"  src="images/audit.gif">&nbsp;&nbsp;
							<input  name="locks" type="image" title="锁定"  src="images/lock.gif">&nbsp;&nbsp;
							<input  name="dels" type="image" title="删除" onClick="return confirm('你确定要删除选中的图片项吗?')"  src="images/delete.gif">&nbsp;&nbsp;
						 </span> 
						<span class="right">
							该栏目中共 <b><?php echo $this->_tpl_vars['pageInfo']['row_total']; ?>
</b> 篇文章,本页显示 <?php echo $this->_tpl_vars['pageInfo']['page_start']; ?>
-<?php echo $this->_tpl_vars['pageInfo']['page_end']; ?>
 篇&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['pageInfo']['current_page']; ?>
/<?php echo $this->_tpl_vars['pageInfo']['page_num']; ?>
&nbsp;&nbsp;&nbsp;&nbsp;
							<?php if ($this->_tpl_vars['pageInfo']['current_page'] == 1): ?>
								<img border=0  alt="第一页" src="images/first.gif">&nbsp;&nbsp;
							<?php else: ?>
								<a href="main.php?action=editArticle&catId=<?php echo $this->_tpl_vars['catId']; ?>
&page=1"><img border=0 alt="第一页" src="images/first.gif"></a>&nbsp;&nbsp;
							<?php endif; ?>
							<?php if ($this->_tpl_vars['pageInfo']['prev_page']): ?>	
								<a href="main.php?action=editArticle&catId=<?php echo $this->_tpl_vars['catId']; ?>
&page=<?php echo $this->_tpl_vars['pageInfo']['prev_page']; ?>
"><img border=0  alt="上一页" src="images/prev.gif"></a>&nbsp;&nbsp;
							<?php else: ?>
								<img border=0  alt="上一页" src="images/prev.gif">&nbsp;&nbsp;
							<?php endif; ?>
						
						
							<?php if ($this->_tpl_vars['pageInfo']['next_page']): ?>	
								<a href="main.php?action=editArticle&catId=<?php echo $this->_tpl_vars['catId']; ?>
&page=<?php echo $this->_tpl_vars['pageInfo']['next_page']; ?>
"><img border=0  alt="下一页" src="images/next.gif"></a>&nbsp;&nbsp;
							<?php else: ?>
								<img border=0  alt="下一页" src="images/next.gif">&nbsp;&nbsp;
							<?php endif; ?>
							<?php if ($this->_tpl_vars['pageInfo']['current_page'] == $this->_tpl_vars['pageInfo']['page_num']): ?>
								<img border=0  alt="最后一页" src="images/last.gif">&nbsp;&nbsp;
							<?php else: ?>
								<a href="main.php?action=editArticle&catId=<?php echo $this->_tpl_vars['catId']; ?>
&page=<?php echo $this->_tpl_vars['pageInfo']['page_num']; ?>
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