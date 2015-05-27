<?php /* Smarty version 2.6.18, created on 2014-01-21 12:47:44
         compiled from default/column.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'default/column.tpl', 53, false),array('modifier', 'date_format', 'default/column.tpl', 54, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/header.inc.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<div id="main">
		<div class="column_left">
       			<div class="dt"><strong><span>栏目导航</strong></div>
        		<div class="dd">
				<ul>
					<?php unset($this->_sections['col']);
$this->_sections['col']['name'] = 'col';
$this->_sections['col']['loop'] = is_array($_loop=$this->_tpl_vars['columnMenu']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['col']['show'] = true;
$this->_sections['col']['max'] = $this->_sections['col']['loop'];
$this->_sections['col']['step'] = 1;
$this->_sections['col']['start'] = $this->_sections['col']['step'] > 0 ? 0 : $this->_sections['col']['loop']-1;
if ($this->_sections['col']['show']) {
    $this->_sections['col']['total'] = $this->_sections['col']['loop'];
    if ($this->_sections['col']['total'] == 0)
        $this->_sections['col']['show'] = false;
} else
    $this->_sections['col']['total'] = 0;
if ($this->_sections['col']['show']):

            for ($this->_sections['col']['index'] = $this->_sections['col']['start'], $this->_sections['col']['iteration'] = 1;
                 $this->_sections['col']['iteration'] <= $this->_sections['col']['total'];
                 $this->_sections['col']['index'] += $this->_sections['col']['step'], $this->_sections['col']['iteration']++):
$this->_sections['col']['rownum'] = $this->_sections['col']['iteration'];
$this->_sections['col']['index_prev'] = $this->_sections['col']['index'] - $this->_sections['col']['step'];
$this->_sections['col']['index_next'] = $this->_sections['col']['index'] + $this->_sections['col']['step'];
$this->_sections['col']['first']      = ($this->_sections['col']['iteration'] == 1);
$this->_sections['col']['last']       = ($this->_sections['col']['iteration'] == $this->_sections['col']['total']);
?>
						<li class="par"><a href="column.php?pid=<?php echo $this->_tpl_vars['columnMenu'][$this->_sections['col']['index']]['colId']; ?>
" title="<?php echo $this->_tpl_vars['columnMenu'][$this->_sections['col']['index']]['description']; ?>
" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['columnMenu'][$this->_sections['col']['index']]['colTitle']; ?>
</a></li>
						<?php if ($this->_tpl_vars['columnMenu'][$this->_sections['col']['index']]['subCol'] != null): ?>
							<?php unset($this->_sections['sub']);
$this->_sections['sub']['name'] = 'sub';
$this->_sections['sub']['loop'] = is_array($_loop=$this->_tpl_vars['columnMenu'][$this->_sections['col']['index']]['subCol']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['sub']['show'] = true;
$this->_sections['sub']['max'] = $this->_sections['sub']['loop'];
$this->_sections['sub']['step'] = 1;
$this->_sections['sub']['start'] = $this->_sections['sub']['step'] > 0 ? 0 : $this->_sections['sub']['loop']-1;
if ($this->_sections['sub']['show']) {
    $this->_sections['sub']['total'] = $this->_sections['sub']['loop'];
    if ($this->_sections['sub']['total'] == 0)
        $this->_sections['sub']['show'] = false;
} else
    $this->_sections['sub']['total'] = 0;
if ($this->_sections['sub']['show']):

            for ($this->_sections['sub']['index'] = $this->_sections['sub']['start'], $this->_sections['sub']['iteration'] = 1;
                 $this->_sections['sub']['iteration'] <= $this->_sections['sub']['total'];
                 $this->_sections['sub']['index'] += $this->_sections['sub']['step'], $this->_sections['sub']['iteration']++):
$this->_sections['sub']['rownum'] = $this->_sections['sub']['iteration'];
$this->_sections['sub']['index_prev'] = $this->_sections['sub']['index'] - $this->_sections['sub']['step'];
$this->_sections['sub']['index_next'] = $this->_sections['sub']['index'] + $this->_sections['sub']['step'];
$this->_sections['sub']['first']      = ($this->_sections['sub']['iteration'] == 1);
$this->_sections['sub']['last']       = ($this->_sections['sub']['iteration'] == $this->_sections['sub']['total']);
?>
								<li class="sub"><a href="column.php?pid=<?php echo $this->_tpl_vars['columnMenu'][$this->_sections['col']['index']]['subCol'][$this->_sections['sub']['index']]['colId']; ?>
" title="<?php echo $this->_tpl_vars['columnMenu'][$this->_sections['col']['index']]['subCol'][$this->_sections['sub']['index']]['description']; ?>
" >&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['columnMenu'][$this->_sections['col']['index']]['subCol'][$this->_sections['sub']['index']]['colTitle']; ?>
</a></li>
							<?php endfor; endif; ?>
						<?php endif; ?>
					<?php endfor; else: ?>
						<li>该栏目下没有子栏目</li>
					<?php endif; ?>
				</ul>	
       			</div>
		</div>
	
		<div class="column_right">
       			<div class="dt">
				<div>当前位置：
				<?php unset($this->_sections['loc']);
$this->_sections['loc']['name'] = 'loc';
$this->_sections['loc']['loop'] = is_array($_loop=$this->_tpl_vars['locs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['loc']['show'] = true;
$this->_sections['loc']['max'] = $this->_sections['loc']['loop'];
$this->_sections['loc']['step'] = 1;
$this->_sections['loc']['start'] = $this->_sections['loc']['step'] > 0 ? 0 : $this->_sections['loc']['loop']-1;
if ($this->_sections['loc']['show']) {
    $this->_sections['loc']['total'] = $this->_sections['loc']['loop'];
    if ($this->_sections['loc']['total'] == 0)
        $this->_sections['loc']['show'] = false;
} else
    $this->_sections['loc']['total'] = 0;
if ($this->_sections['loc']['show']):

            for ($this->_sections['loc']['index'] = $this->_sections['loc']['start'], $this->_sections['loc']['iteration'] = 1;
                 $this->_sections['loc']['iteration'] <= $this->_sections['loc']['total'];
                 $this->_sections['loc']['index'] += $this->_sections['loc']['step'], $this->_sections['loc']['iteration']++):
$this->_sections['loc']['rownum'] = $this->_sections['loc']['iteration'];
$this->_sections['loc']['index_prev'] = $this->_sections['loc']['index'] - $this->_sections['loc']['step'];
$this->_sections['loc']['index_next'] = $this->_sections['loc']['index'] + $this->_sections['loc']['step'];
$this->_sections['loc']['first']      = ($this->_sections['loc']['iteration'] == 1);
$this->_sections['loc']['last']       = ($this->_sections['loc']['iteration'] == $this->_sections['loc']['total']);
?>
					<a href="column.php?pid=<?php echo $this->_tpl_vars['locs'][$this->_sections['loc']['index']]['colId']; ?>
" title="<?php echo $this->_tpl_vars['locs'][$this->_sections['loc']['index']]['description']; ?>
"><?php echo $this->_tpl_vars['locs'][$this->_sections['loc']['index']]['colTitle']; ?>
</a> >
				<?php endfor; endif; ?>		
					<a href="column.php?pid=<?php echo $this->_tpl_vars['column']['colId']; ?>
"><?php echo $this->_tpl_vars['column']['colTitle']; ?>
</a> 
				</div>
			</div>
        		<div class="dd">
				<?php if ($this->_tpl_vars['column']['colId'] != 1): ?>
				<div class="column_top">
					<?php if ($this->_tpl_vars['column']['picId'] == false): ?>
						<img src="<?php echo $this->_tpl_vars['stylePath']; ?>
/images/nophoto.gif" border="0" width="80" height="80">
					<?php else: ?>
						<img src="<?php echo $this->_tpl_vars['column']['picId']; ?>
" border="0" width="80" height="80">
					<?php endif; ?>
					<span>
						<?php echo $this->_tpl_vars['column']['description']; ?>

					</span>
					<div class="nav"> </div>
				</div>
				<?php endif; ?>
				<div class="tit">
					<span class="col1">&nbsp;&nbsp;&nbsp;&nbsp;文章标题</span> 
					<span class="col2">作者</span>
					<span class="col2">发布时间</span></li>
				</div>
				<ul class="dot">

					<?php unset($this->_sections['col']);
$this->_sections['col']['name'] = 'col';
$this->_sections['col']['loop'] = is_array($_loop=$this->_tpl_vars['column']['art']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['col']['show'] = true;
$this->_sections['col']['max'] = $this->_sections['col']['loop'];
$this->_sections['col']['step'] = 1;
$this->_sections['col']['start'] = $this->_sections['col']['step'] > 0 ? 0 : $this->_sections['col']['loop']-1;
if ($this->_sections['col']['show']) {
    $this->_sections['col']['total'] = $this->_sections['col']['loop'];
    if ($this->_sections['col']['total'] == 0)
        $this->_sections['col']['show'] = false;
} else
    $this->_sections['col']['total'] = 0;
if ($this->_sections['col']['show']):

            for ($this->_sections['col']['index'] = $this->_sections['col']['start'], $this->_sections['col']['iteration'] = 1;
                 $this->_sections['col']['iteration'] <= $this->_sections['col']['total'];
                 $this->_sections['col']['index'] += $this->_sections['col']['step'], $this->_sections['col']['iteration']++):
$this->_sections['col']['rownum'] = $this->_sections['col']['iteration'];
$this->_sections['col']['index_prev'] = $this->_sections['col']['index'] - $this->_sections['col']['step'];
$this->_sections['col']['index_next'] = $this->_sections['col']['index'] + $this->_sections['col']['step'];
$this->_sections['col']['first']      = ($this->_sections['col']['iteration'] == 1);
$this->_sections['col']['last']       = ($this->_sections['col']['iteration'] == $this->_sections['col']['total']);
?>
						<li>
							<span class="col1"><a href="article.php?aid=<?php echo $this->_tpl_vars['column']['art'][$this->_sections['col']['index']]['id']; ?>
" title="<?php echo $this->_tpl_vars['column']['art'][$this->_sections['col']['index']]['title']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['column']['art'][$this->_sections['col']['index']]['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 25) : smarty_modifier_truncate($_tmp, 25)); ?>
</a></span>							     		     			  <span class="col2"><?php echo $this->_tpl_vars['column']['art'][$this->_sections['col']['index']]['author']; ?>
</span>
							<span class="col2"><?php echo ((is_array($_tmp=$this->_tpl_vars['column']['art'][$this->_sections['col']['index']]['postTime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</span>

						</li>
					<?php endfor; else: ?>
						<li>该栏目下没有文章</li>
					<?php endif; ?>
				
				</ul>	
				<div class="page">
					该栏目中共 <b><?php echo $this->_tpl_vars['pageInfo']['row_total']; ?>
</b> 篇文章,本页显示第 <?php echo $this->_tpl_vars['pageInfo']['page_start']; ?>
-<?php echo $this->_tpl_vars['pageInfo']['page_end']; ?>
 篇&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['pageInfo']['current_page']; ?>
/<?php echo $this->_tpl_vars['pageInfo']['page_num']; ?>
&nbsp;&nbsp;&nbsp;&nbsp;
					<?php if ($this->_tpl_vars['pageInfo']['current_page'] == 1): ?>
						<img border=0  alt="第一页" src="<?php echo $this->_tpl_vars['stylePath']; ?>
/images/first.gif">&nbsp;&nbsp;
					<?php else: ?>
						<a href="column.php?pid=<?php echo $this->_tpl_vars['column']['colId']; ?>
&page=1"><img border=0 alt="第一页" src="<?php echo $this->_tpl_vars['stylePath']; ?>
/images/first.gif"></a>&nbsp;&nbsp;
					<?php endif; ?>
					<?php if ($this->_tpl_vars['pageInfo']['prev_page']): ?>	
						<a href="column.php?pid=<?php echo $this->_tpl_vars['column']['colId']; ?>
&page=<?php echo $this->_tpl_vars['pageInfo']['prev_page']; ?>
"><img border=0  alt="上一页" src="<?php echo $this->_tpl_vars['stylePath']; ?>
/images/prev.gif"></a>&nbsp;&nbsp;
					<?php else: ?>
						<img border=0  alt="上一页" src="<?php echo $this->_tpl_vars['stylePath']; ?>
/images/prev.gif">&nbsp;&nbsp;
					<?php endif; ?>
					<?php if ($this->_tpl_vars['pageInfo']['next_page']): ?>	
						<a href="column.php?pid=<?php echo $this->_tpl_vars['column']['colId']; ?>
&page=<?php echo $this->_tpl_vars['pageInfo']['next_page']; ?>
"><img border=0  alt="下一页" src="<?php echo $this->_tpl_vars['stylePath']; ?>
/images/next.gif"></a>&nbsp;&nbsp;
					<?php else: ?>
						<img border=0  alt="下一页" src="<?php echo $this->_tpl_vars['stylePath']; ?>
/images/next.gif">&nbsp;&nbsp;
					<?php endif; ?>
					<?php if ($this->_tpl_vars['pageInfo']['current_page'] == $this->_tpl_vars['pageInfo']['page_num']): ?>
						<img border=0  alt="最后一页" src="<?php echo $this->_tpl_vars['stylePath']; ?>
/images/last.gif">&nbsp;&nbsp;
					<?php else: ?>
						<a href="column.php?pid=<?php echo $this->_tpl_vars['column']['colId']; ?>
&page=<?php echo $this->_tpl_vars['pageInfo']['page_num']; ?>
"><img border=0 alt="最后一页" src="<?php echo $this->_tpl_vars['stylePath']; ?>
/images/last.gif"></a>&nbsp;&nbsp;
					<?php endif; ?>
				</div>
       			</div>
		</div>
	</div>

	<div id="sidebar">
		<div class="sidebox">
       			<div class="dt"><strong>本类推荐</strong></div>
        		<div class="dd dot">
          			<ul>
					<?php unset($this->_sections['article']);
$this->_sections['article']['name'] = 'article';
$this->_sections['article']['loop'] = is_array($_loop=$this->_tpl_vars['recommends']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['article']['show'] = true;
$this->_sections['article']['max'] = $this->_sections['article']['loop'];
$this->_sections['article']['step'] = 1;
$this->_sections['article']['start'] = $this->_sections['article']['step'] > 0 ? 0 : $this->_sections['article']['loop']-1;
if ($this->_sections['article']['show']) {
    $this->_sections['article']['total'] = $this->_sections['article']['loop'];
    if ($this->_sections['article']['total'] == 0)
        $this->_sections['article']['show'] = false;
} else
    $this->_sections['article']['total'] = 0;
if ($this->_sections['article']['show']):

            for ($this->_sections['article']['index'] = $this->_sections['article']['start'], $this->_sections['article']['iteration'] = 1;
                 $this->_sections['article']['iteration'] <= $this->_sections['article']['total'];
                 $this->_sections['article']['index'] += $this->_sections['article']['step'], $this->_sections['article']['iteration']++):
$this->_sections['article']['rownum'] = $this->_sections['article']['iteration'];
$this->_sections['article']['index_prev'] = $this->_sections['article']['index'] - $this->_sections['article']['step'];
$this->_sections['article']['index_next'] = $this->_sections['article']['index'] + $this->_sections['article']['step'];
$this->_sections['article']['first']      = ($this->_sections['article']['iteration'] == 1);
$this->_sections['article']['last']       = ($this->_sections['article']['iteration'] == $this->_sections['article']['total']);
?>
						<li><a href="article.php?aid=<?php echo $this->_tpl_vars['recommends'][$this->_sections['article']['index']]['id']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['recommends'][$this->_sections['article']['index']]['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 25) : smarty_modifier_truncate($_tmp, 25)); ?>
</a></li>
					<?php endfor; else: ?>
						<li>目前没有任何推荐文章</li>
					<?php endif; ?>
          			</ul>
			</div>
       		 </div>

		<div class="nav"> </div>
		<div class="sidebox">
       			<div class="dt"><strong>本类热门</strong></div>
        		 <div class="dd dot">
          			<ul>
					<?php unset($this->_sections['article']);
$this->_sections['article']['name'] = 'article';
$this->_sections['article']['loop'] = is_array($_loop=$this->_tpl_vars['hots']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['article']['show'] = true;
$this->_sections['article']['max'] = $this->_sections['article']['loop'];
$this->_sections['article']['step'] = 1;
$this->_sections['article']['start'] = $this->_sections['article']['step'] > 0 ? 0 : $this->_sections['article']['loop']-1;
if ($this->_sections['article']['show']) {
    $this->_sections['article']['total'] = $this->_sections['article']['loop'];
    if ($this->_sections['article']['total'] == 0)
        $this->_sections['article']['show'] = false;
} else
    $this->_sections['article']['total'] = 0;
if ($this->_sections['article']['show']):

            for ($this->_sections['article']['index'] = $this->_sections['article']['start'], $this->_sections['article']['iteration'] = 1;
                 $this->_sections['article']['iteration'] <= $this->_sections['article']['total'];
                 $this->_sections['article']['index'] += $this->_sections['article']['step'], $this->_sections['article']['iteration']++):
$this->_sections['article']['rownum'] = $this->_sections['article']['iteration'];
$this->_sections['article']['index_prev'] = $this->_sections['article']['index'] - $this->_sections['article']['step'];
$this->_sections['article']['index_next'] = $this->_sections['article']['index'] + $this->_sections['article']['step'];
$this->_sections['article']['first']      = ($this->_sections['article']['iteration'] == 1);
$this->_sections['article']['last']       = ($this->_sections['article']['iteration'] == $this->_sections['article']['total']);
?>
						<li><a href="article.php?aid=<?php echo $this->_tpl_vars['hots'][$this->_sections['article']['index']]['id']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['hots'][$this->_sections['article']['index']]['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 25) : smarty_modifier_truncate($_tmp, 25)); ?>
</a></li>
					<?php endfor; else: ?>
						<li>目前没有任何推荐文章</li>
					<?php endif; ?>
          			</ul>
			</div>
       		 </div>
		<div class="nav"> </div>
	</div>

	<div class="nav"> </div>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/footer.inc.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>