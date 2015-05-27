<?php /* Smarty version 2.6.18, created on 2014-01-21 12:48:38
         compiled from admin/title.tpl */ ?>
<div class="head-dark-box">
	<div class="tit"><?php echo $this->_tpl_vars['dtitle']; ?>
</div>
</div>	
<div class="tip-msg <?php if ($this->_tpl_vars['mess'] == 'error'): ?>error-msg<?php endif; ?><?php if ($this->_tpl_vars['mess'] == 'sucess'): ?>sucess-msg<?php endif; ?>">
	<?php echo $this->_tpl_vars['tmess']; ?>
		
</div>