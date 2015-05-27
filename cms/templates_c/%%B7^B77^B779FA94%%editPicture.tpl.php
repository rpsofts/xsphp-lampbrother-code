<?php /* Smarty version 2.6.18, created on 2014-01-21 12:50:00
         compiled from admin/editPicture.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'replace', 'admin/editPicture.tpl', 25, false),)), $this); ?>
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
		    <form  method="post" action="main.php?action=editPicture&catId=<?php echo $this->_tpl_vars['catId']; ?>
&page=<?php echo $this->_tpl_vars['pageInfo']['current_page']; ?>
&act=delete" onsubmit="return confirm('你确定要删除选中的图片项吗?')">
			<div class="msg-box">
				<ul class="viewmess">
					<li class="light-row">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;请从相册中选择需要编辑的图片&nbsp;&nbsp; <?php echo $this->_tpl_vars['select']; ?>
	
					</li>
					<?php if ($this->_tpl_vars['showType'] == 'thumb'): ?>
					     <hr>
					     <div class="picthumb">
					     <?php unset($this->_sections['tu']);
$this->_sections['tu']['name'] = 'tu';
$this->_sections['tu']['loop'] = is_array($_loop=$this->_tpl_vars['pics']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['tu']['show'] = true;
$this->_sections['tu']['max'] = $this->_sections['tu']['loop'];
$this->_sections['tu']['step'] = 1;
$this->_sections['tu']['start'] = $this->_sections['tu']['step'] > 0 ? 0 : $this->_sections['tu']['loop']-1;
if ($this->_sections['tu']['show']) {
    $this->_sections['tu']['total'] = $this->_sections['tu']['loop'];
    if ($this->_sections['tu']['total'] == 0)
        $this->_sections['tu']['show'] = false;
} else
    $this->_sections['tu']['total'] = 0;
if ($this->_sections['tu']['show']):

            for ($this->_sections['tu']['index'] = $this->_sections['tu']['start'], $this->_sections['tu']['iteration'] = 1;
                 $this->_sections['tu']['iteration'] <= $this->_sections['tu']['total'];
                 $this->_sections['tu']['index'] += $this->_sections['tu']['step'], $this->_sections['tu']['iteration']++):
$this->_sections['tu']['rownum'] = $this->_sections['tu']['iteration'];
$this->_sections['tu']['index_prev'] = $this->_sections['tu']['index'] - $this->_sections['tu']['step'];
$this->_sections['tu']['index_next'] = $this->_sections['tu']['index'] + $this->_sections['tu']['step'];
$this->_sections['tu']['first']      = ($this->_sections['tu']['iteration'] == 1);
$this->_sections['tu']['last']       = ($this->_sections['tu']['iteration'] == $this->_sections['tu']['total']);
?>
						<div class="pic_list">	
							<?php if ($this->_tpl_vars['pics'][$this->_sections['tu']['index']]['hasThumb'] == 1 || $this->_tpl_vars['pics'][$this->_sections['tu']['index']]['hasMark'] == 1): ?>
								<a href="javascript:newopen(<?php echo $this->_tpl_vars['pics'][$this->_sections['tu']['index']]['id']; ?>
)"><img alt="<?php echo $this->_tpl_vars['pics'][$this->_sections['tu']['index']]['picTitle']; ?>
" src="<?php echo $this->_tpl_vars['path']; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['pics'][$this->_sections['tu']['index']]['picName'])) ? $this->_run_mod_handler('replace', true, $_tmp, ".", "_new.") : smarty_modifier_replace($_tmp, ".", "_new.")); ?>
" width="100" height="100"></a><br>
							<?php else: ?>
								<a href="javascript:newopen(<?php echo $this->_tpl_vars['pics'][$this->_sections['tu']['index']]['id']; ?>
)"><img alt="<?php echo $this->_tpl_vars['pics'][$this->_sections['tu']['index']]['picTitle']; ?>
" src="<?php echo $this->_tpl_vars['path']; ?>
<?php echo $this->_tpl_vars['pics'][$this->_sections['tu']['index']]['picName']; ?>
" width="100" height="100"></a><br>
							<?php endif; ?>
							<input type="checkbox" name="del[]" value="<?php echo $this->_tpl_vars['pics'][$this->_sections['tu']['index']]['id']; ?>
">	
							<a href="javascript:newopen(<?php echo $this->_tpl_vars['pics'][$this->_sections['tu']['index']]['id']; ?>
)"><?php echo $this->_tpl_vars['pics'][$this->_sections['tu']['index']]['picTitle']; ?>
</a><br>
						
							【<a href="main.php?action=modPicture&id=<?php echo $this->_tpl_vars['pics'][$this->_sections['tu']['index']]['id']; ?>
">修改</a>/<a onclick="return confirm('确定要删除图片<?php echo $this->_tpl_vars['pics'][$this->_sections['tu']['index']]['picTitle']; ?>
吗？')" href="main.php?action=editPicture&catId=<?php echo $this->_tpl_vars['catId']; ?>
&page=<?php echo $this->_tpl_vars['pageInfo']['current_page']; ?>
&id=<?php echo $this->_tpl_vars['pics'][$this->_sections['tu']['index']]['id']; ?>
&act=delete">删除</a>】
					      	</div>
					    <?php endfor; else: ?>
						<li class="light-row">
							该类中没有需要的图片
						</li>
					    <?php endif; ?>
					    </div>
					<?php elseif ($this->_tpl_vars['showType'] == 'list'): ?>
					    	<li class="dark-row">
							<span class="list_width width_font">标&nbsp;&nbsp;题</span>
							<span class="list_width width_font">描&nbsp;&nbsp;述</span>
							<span class="list_width width_font">缩略/水印</span>
							<span class="list_width width_font">操&nbsp;&nbsp;作</span>
						</li>
				            <?php unset($this->_sections['tu']);
$this->_sections['tu']['name'] = 'tu';
$this->_sections['tu']['loop'] = is_array($_loop=$this->_tpl_vars['pics']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['tu']['show'] = true;
$this->_sections['tu']['max'] = $this->_sections['tu']['loop'];
$this->_sections['tu']['step'] = 1;
$this->_sections['tu']['start'] = $this->_sections['tu']['step'] > 0 ? 0 : $this->_sections['tu']['loop']-1;
if ($this->_sections['tu']['show']) {
    $this->_sections['tu']['total'] = $this->_sections['tu']['loop'];
    if ($this->_sections['tu']['total'] == 0)
        $this->_sections['tu']['show'] = false;
} else
    $this->_sections['tu']['total'] = 0;
if ($this->_sections['tu']['show']):

            for ($this->_sections['tu']['index'] = $this->_sections['tu']['start'], $this->_sections['tu']['iteration'] = 1;
                 $this->_sections['tu']['iteration'] <= $this->_sections['tu']['total'];
                 $this->_sections['tu']['index'] += $this->_sections['tu']['step'], $this->_sections['tu']['iteration']++):
$this->_sections['tu']['rownum'] = $this->_sections['tu']['iteration'];
$this->_sections['tu']['index_prev'] = $this->_sections['tu']['index'] - $this->_sections['tu']['step'];
$this->_sections['tu']['index_next'] = $this->_sections['tu']['index'] + $this->_sections['tu']['step'];
$this->_sections['tu']['first']      = ($this->_sections['tu']['iteration'] == 1);
$this->_sections['tu']['last']       = ($this->_sections['tu']['iteration'] == $this->_sections['tu']['total']);
?>
						<li class="light-row" style="padding-top:2px; padding-bottom:2px">
							<span class="list_width icon"><input type="checkbox" name="del[]" value="<?php echo $this->_tpl_vars['pics'][$this->_sections['tu']['index']]['id']; ?>
"><a href="javascript:newopen(<?php echo $this->_tpl_vars['pics'][$this->_sections['tu']['index']]['id']; ?>
)"><?php echo $this->_tpl_vars['pics'][$this->_sections['tu']['index']]['picTitle']; ?>
</a></span>
							<span class="list_width"><?php echo $this->_tpl_vars['pics'][$this->_sections['tu']['index']]['description']; ?>
</span>
							<span class="list_width"><?php if ($this->_tpl_vars['pics'][$this->_sections['tu']['index']]['hasThumb'] == 1): ?>有<?php else: ?>无<?php endif; ?>/<?php if ($this->_tpl_vars['pics'][$this->_sections['tu']['index']]['hasMark'] == 1): ?>有<?php else: ?>无<?php endif; ?></span>
				
							<span class="list_width">
							【<a href="main.php?action=modPicture&id=<?php echo $this->_tpl_vars['pics'][$this->_sections['tu']['index']]['id']; ?>
">修改</a>】
							【<a onclick="return confirm('确定要删除图片<?php echo $this->_tpl_vars['pics'][$this->_sections['tu']['index']]['picTitle']; ?>
吗？')" href="main.php?action=editPicture&catId=<?php echo $this->_tpl_vars['catId']; ?>
&page=<?php echo $this->_tpl_vars['pageInfo']['current_page']; ?>
&id=<?php echo $this->_tpl_vars['pics'][$this->_sections['tu']['index']]['id']; ?>
&act=delete">删除</a>】
							</span>
						</li>
					    <?php endfor; else: ?>
						<li class="light-row">
							本页没有需要的图片
						</li>
					    <?php endif; ?>
					<?php endif; ?>
				
					<li class="dark-row">
						<span class="col_width" style="margin-left:15px"> 
							<a href="javascript:select()">全选</a>/<a href="javascript:fanselect()">反选</a>/<a href="javascript:noselect()">全不选</a>&nbsp;&nbsp;选中项: 
							<input  name="delb" type="image" title="删除"  src="images/delete.gif">&nbsp;&nbsp;
						 </span> 
						<span class="right">
							该相册中共 <b><?php echo $this->_tpl_vars['pageInfo']['row_total']; ?>
</b> 张图片,本页显示 <?php echo $this->_tpl_vars['pageInfo']['page_start']; ?>
-<?php echo $this->_tpl_vars['pageInfo']['page_end']; ?>
 张图片&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['pageInfo']['current_page']; ?>
/<?php echo $this->_tpl_vars['pageInfo']['page_num']; ?>
&nbsp;&nbsp;&nbsp;&nbsp;
							<?php if ($this->_tpl_vars['pageInfo']['current_page'] == 1): ?>
								<img border=0  alt="第一页" src="images/first.gif">&nbsp;&nbsp;
							<?php else: ?>
								<a href="main.php?action=editPicture&catId=<?php echo $this->_tpl_vars['catId']; ?>
&page=1"><img border=0 alt="第一页" src="images/first.gif"></a>&nbsp;&nbsp;
							<?php endif; ?>
							<?php if ($this->_tpl_vars['pageInfo']['prev_page']): ?>	
								<a href="main.php?action=editPicture&catId=<?php echo $this->_tpl_vars['catId']; ?>
&page=<?php echo $this->_tpl_vars['pageInfo']['prev_page']; ?>
"><img border=0  alt="上一页" src="images/prev.gif"></a>&nbsp;&nbsp;
							<?php else: ?>
								<img border=0  alt="上一页" src="images/prev.gif">&nbsp;&nbsp;
							<?php endif; ?>
						
						
							<?php if ($this->_tpl_vars['pageInfo']['next_page']): ?>	
								<a href="main.php?action=editPicture&catId=<?php echo $this->_tpl_vars['catId']; ?>
&page=<?php echo $this->_tpl_vars['pageInfo']['next_page']; ?>
"><img border=0  alt="下一页" src="images/next.gif"></a>&nbsp;&nbsp;
							<?php else: ?>
								<img border=0  alt="下一页" src="images/next.gif">&nbsp;&nbsp;
							<?php endif; ?>
							<?php if ($this->_tpl_vars['pageInfo']['current_page'] == $this->_tpl_vars['pageInfo']['page_num']): ?>
								<img border=0  alt="最后一页" src="images/last.gif">&nbsp;&nbsp;
							<?php else: ?>
								<a href="main.php?action=editPicture&catId=<?php echo $this->_tpl_vars['catId']; ?>
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