<?php /* Smarty version 2.6.18, created on 2014-01-21 12:44:53
         compiled from default/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'default/index.tpl', 10, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/header.inc.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<div id="main">
		<?php unset($this->_sections['col']);
$this->_sections['col']['name'] = 'col';
$this->_sections['col']['loop'] = is_array($_loop=$this->_tpl_vars['cols']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<?php if (!($this->_sections['col']['index'] % 2)): ?>
				<div class="leftbox">
			<?php else: ?>
				<div class="rightbox">
			<?php endif; ?>
				
       				<div class="dt"><strong><a href="column.php?pid=<?php echo $this->_tpl_vars['cols'][$this->_sections['col']['index']]['colId']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['cols'][$this->_sections['col']['index']]['colTitle'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 25) : smarty_modifier_truncate($_tmp, 25)); ?>
</a></strong><span class="more"><a href="column.php?pid=<?php echo $this->_tpl_vars['cols'][$this->_sections['col']['index']]['colId']; ?>
">更多...</a></span></div>
        			<div class="dd">
					<div class="left">
						<a href="column.php?pid=<?php echo $this->_tpl_vars['cols'][$this->_sections['col']['index']]['colId']; ?>
"><img src="<?php echo $this->_tpl_vars['cols'][$this->_sections['col']['index']]['picId']; ?>
" border="0" width="80" height="80"></a>
						<?php if ($this->_tpl_vars['cols'][$this->_sections['col']['index']]['subCol'] != null): ?>
							<ul>
								<?php unset($this->_sections['sub']);
$this->_sections['sub']['name'] = 'sub';
$this->_sections['sub']['loop'] = is_array($_loop=$this->_tpl_vars['cols'][$this->_sections['col']['index']]['subCol']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['sub']['max'] = (int)4;
$this->_sections['sub']['show'] = true;
if ($this->_sections['sub']['max'] < 0)
    $this->_sections['sub']['max'] = $this->_sections['sub']['loop'];
$this->_sections['sub']['step'] = 1;
$this->_sections['sub']['start'] = $this->_sections['sub']['step'] > 0 ? 0 : $this->_sections['sub']['loop']-1;
if ($this->_sections['sub']['show']) {
    $this->_sections['sub']['total'] = min(ceil(($this->_sections['sub']['step'] > 0 ? $this->_sections['sub']['loop'] - $this->_sections['sub']['start'] : $this->_sections['sub']['start']+1)/abs($this->_sections['sub']['step'])), $this->_sections['sub']['max']);
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
									<li><a href="column.php?pid=<?php echo $this->_tpl_vars['cols'][$this->_sections['col']['index']]['subCol'][$this->_sections['sub']['index']]['colId']; ?>
">&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['cols'][$this->_sections['col']['index']]['subCol'][$this->_sections['sub']['index']]['colTitle']; ?>
</a></li>
								<?php endfor; endif; ?>
							</ul>
						<?php endif; ?>
					</div>
					<div class="right dot">
						<ul>
							<?php unset($this->_sections['article']);
$this->_sections['article']['name'] = 'article';
$this->_sections['article']['loop'] = is_array($_loop=$this->_tpl_vars['cols'][$this->_sections['col']['index']]['art']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['article']['max'] = (int)10;
$this->_sections['article']['show'] = true;
if ($this->_sections['article']['max'] < 0)
    $this->_sections['article']['max'] = $this->_sections['article']['loop'];
$this->_sections['article']['step'] = 1;
$this->_sections['article']['start'] = $this->_sections['article']['step'] > 0 ? 0 : $this->_sections['article']['loop']-1;
if ($this->_sections['article']['show']) {
    $this->_sections['article']['total'] = min(ceil(($this->_sections['article']['step'] > 0 ? $this->_sections['article']['loop'] - $this->_sections['article']['start'] : $this->_sections['article']['start']+1)/abs($this->_sections['article']['step'])), $this->_sections['article']['max']);
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
								<li><a href="article.php?aid=<?php echo $this->_tpl_vars['cols'][$this->_sections['col']['index']]['art'][$this->_sections['article']['index']]['id']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['cols'][$this->_sections['col']['index']]['art'][$this->_sections['article']['index']]['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 25) : smarty_modifier_truncate($_tmp, 25)); ?>
</a></li>
							<?php endfor; else: ?>
								<li>该栏目中没有任何文章</li>
							<?php endif; ?>
						</ul>
					</div>
					
       				</div>
       		 	</div>
			<?php if (!($this->_sections['col']['rownum'] % 2)): ?>
				<?php if ($this->_sections['col']['last'] == false): ?>
					<div class="nav"> </div>
				<?php endif; ?>
			<?php endif; ?>
		<?php endfor; endif; ?>
	</div>

	<div id="sidebar">
		<div class="sidebox">
       			<div class="dt"><strong>强烈推荐</strong></div>
        		<div class="dd dot">
          			<ul>
					<?php unset($this->_sections['article']);
$this->_sections['article']['name'] = 'article';
$this->_sections['article']['loop'] = is_array($_loop=$this->_tpl_vars['recommends']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['article']['max'] = (int)10;
$this->_sections['article']['show'] = true;
if ($this->_sections['article']['max'] < 0)
    $this->_sections['article']['max'] = $this->_sections['article']['loop'];
$this->_sections['article']['step'] = 1;
$this->_sections['article']['start'] = $this->_sections['article']['step'] > 0 ? 0 : $this->_sections['article']['loop']-1;
if ($this->_sections['article']['show']) {
    $this->_sections['article']['total'] = min(ceil(($this->_sections['article']['step'] > 0 ? $this->_sections['article']['loop'] - $this->_sections['article']['start'] : $this->_sections['article']['start']+1)/abs($this->_sections['article']['step'])), $this->_sections['article']['max']);
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
       			<div class="dt"><strong>最近更新</strong></div>
        		 <div class="dd dot">
            			<ul>
					<?php unset($this->_sections['article']);
$this->_sections['article']['name'] = 'article';
$this->_sections['article']['loop'] = is_array($_loop=$this->_tpl_vars['news']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['article']['max'] = (int)10;
$this->_sections['article']['show'] = true;
if ($this->_sections['article']['max'] < 0)
    $this->_sections['article']['max'] = $this->_sections['article']['loop'];
$this->_sections['article']['step'] = 1;
$this->_sections['article']['start'] = $this->_sections['article']['step'] > 0 ? 0 : $this->_sections['article']['loop']-1;
if ($this->_sections['article']['show']) {
    $this->_sections['article']['total'] = min(ceil(($this->_sections['article']['step'] > 0 ? $this->_sections['article']['loop'] - $this->_sections['article']['start'] : $this->_sections['article']['start']+1)/abs($this->_sections['article']['step'])), $this->_sections['article']['max']);
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
						<li><a href="article.php?aid=<?php echo $this->_tpl_vars['news'][$this->_sections['article']['index']]['id']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['news'][$this->_sections['article']['index']]['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 25) : smarty_modifier_truncate($_tmp, 25)); ?>
</a></li>
					<?php endfor; else: ?>
						<li>目前没有任何推荐文章</li>
					<?php endif; ?>
          			</ul>
			</div>
       		 </div>
		<div class="nav"> </div>
		<div class="sidebox">
       			<div class="dt"><strong>本月热点</strong></div>
        		 <div class="dd dot">
          			<ul>
					<?php unset($this->_sections['article']);
$this->_sections['article']['name'] = 'article';
$this->_sections['article']['loop'] = is_array($_loop=$this->_tpl_vars['hots']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['article']['max'] = (int)10;
$this->_sections['article']['show'] = true;
if ($this->_sections['article']['max'] < 0)
    $this->_sections['article']['max'] = $this->_sections['article']['loop'];
$this->_sections['article']['step'] = 1;
$this->_sections['article']['start'] = $this->_sections['article']['step'] > 0 ? 0 : $this->_sections['article']['loop']-1;
if ($this->_sections['article']['show']) {
    $this->_sections['article']['total'] = min(ceil(($this->_sections['article']['step'] > 0 ? $this->_sections['article']['loop'] - $this->_sections['article']['start'] : $this->_sections['article']['start']+1)/abs($this->_sections['article']['step'])), $this->_sections['article']['max']);
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
	<div id="link">
       		<div class="dt"><strong><span>友情链接</span></strong></div>
        	<div class="dd">
               		<ul>
				<?php unset($this->_sections['fri']);
$this->_sections['fri']['name'] = 'fri';
$this->_sections['fri']['loop'] = is_array($_loop=$this->_tpl_vars['links']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['fri']['show'] = true;
$this->_sections['fri']['max'] = $this->_sections['fri']['loop'];
$this->_sections['fri']['step'] = 1;
$this->_sections['fri']['start'] = $this->_sections['fri']['step'] > 0 ? 0 : $this->_sections['fri']['loop']-1;
if ($this->_sections['fri']['show']) {
    $this->_sections['fri']['total'] = $this->_sections['fri']['loop'];
    if ($this->_sections['fri']['total'] == 0)
        $this->_sections['fri']['show'] = false;
} else
    $this->_sections['fri']['total'] = 0;
if ($this->_sections['fri']['show']):

            for ($this->_sections['fri']['index'] = $this->_sections['fri']['start'], $this->_sections['fri']['iteration'] = 1;
                 $this->_sections['fri']['iteration'] <= $this->_sections['fri']['total'];
                 $this->_sections['fri']['index'] += $this->_sections['fri']['step'], $this->_sections['fri']['iteration']++):
$this->_sections['fri']['rownum'] = $this->_sections['fri']['iteration'];
$this->_sections['fri']['index_prev'] = $this->_sections['fri']['index'] - $this->_sections['fri']['step'];
$this->_sections['fri']['index_next'] = $this->_sections['fri']['index'] + $this->_sections['fri']['step'];
$this->_sections['fri']['first']      = ($this->_sections['fri']['iteration'] == 1);
$this->_sections['fri']['last']       = ($this->_sections['fri']['iteration'] == $this->_sections['fri']['total']);
?>
					<li><a href="<?php echo $this->_tpl_vars['links'][$this->_sections['fri']['index']]['url']; ?>
" target="_blank">
						<?php if ($this->_tpl_vars['links'][$this->_sections['fri']['index']]['list']): ?>
							<img height="40" alt="<?php echo $this->_tpl_vars['links'][$this->_sections['fri']['index']]['webName']; ?>
" src="<?php echo $this->_tpl_vars['links'][$this->_sections['fri']['index']]['logo']; ?>
" border="0" >
						<?php else: ?>
							<?php echo $this->_tpl_vars['links'][$this->_sections['fri']['index']]['webName']; ?>

						<?php endif; ?>

					</a></li>
				<?php endfor; endif; ?>
          		</ul>
		</div>
      	 </div>
	<div class="nav"> </div>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/footer.inc.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>