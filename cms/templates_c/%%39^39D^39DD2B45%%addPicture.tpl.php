<?php /* Smarty version 2.6.18, created on 2014-01-21 12:49:58
         compiled from admin/addPicture.tpl */ ?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
		<title>�ޱ����ĵ�</title>
		<meta name="Author" content="�����" />
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
" enctype="multipart/form-data">
			<div class="msg-box">
				<ul class="viewmess">
					<li class="light-row">
						<span class="col_width">��ӵ����</span>
							<?php echo $this->_tpl_vars['select']; ?>
	
						</li>
					<li class="dark-row">
						<span class="col_width">ͼƬ����<span class="red_font">*</span></span>
						<input type="text" class="text-box" name="picTitle" size="20" value="<?php echo $this->_tpl_vars['post']['picTitle']; ?>
">
					</li>
					<li class="light-row">
						<span class="col_width" style="margin-top:30px">ͼƬ����</span>
						<textarea class="text-box" name="description" cols="30" rows="5"><?php echo $this->_tpl_vars['post']['description']; ?>
</textarea>
					</li>

					<li class="dark-row">
						<span class="col_width">&nbsp; </span>
						<input type="checkbox" name="hasThumb" value="1" <?php echo $this->_tpl_vars['hasThumb']; ?>
> ��������ͼ 
						<input type="checkbox" name="hasMark" value="1" <?php echo $this->_tpl_vars['hasMark']; ?>
> ��ˮӡ 
					</li>
					<?php if ($this->_tpl_vars['picPath']): ?>
					<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['post']['id']; ?>
">
					<input type="hidden" name="picName" value="<?php echo $this->_tpl_vars['post']['picName']; ?>
">
					<li class="light-row">
						<span class="col_width" style="margin-top:45px">ͼƬԤ��</span>
						<img src="<?php echo $this->_tpl_vars['picPath']; ?>
" alt="ͼƬԤ��" width=100 height="100" id="previewPic">
					</li>
					<li class="dark-row">
					<?php else: ?>
					<li class="light-row">
						<span class="col_width">�ϴ�ͼƬ </span>
						<input type="file" name="uploadPic"  onChange="previewPic.src=this.value">
					</li>
					<li class="dark-row">
						<span class="col_width" style="margin-top:45px">ͼƬԤ��</span>
						<img src="images/no_image.gif" alt="ͼƬԤ��" width=100 height="100" id="previewPic"/>
					</li>
					<li class="light-row">
					<?php endif; ?>
						<span class="col_width">&nbsp;</span>
						<input type="hidden" name="action" value="<?php echo $this->_tpl_vars['act']; ?>
">
						<input type="submit" class="button" name="mod" value="<?php echo $this->_tpl_vars['submitButton']; ?>
">&nbsp;&nbsp;
						<input type="reset" class="button" value="�� ��">
					</li>
				</ul>	
			</div>
                    </form>	
		</div>
	</body>
</html>