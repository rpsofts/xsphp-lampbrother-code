<?php /* Smarty version 2.6.18, created on 2014-01-21 12:51:26
         compiled from admin/addUser.tpl */ ?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
		<title>�ޱ����ĵ�</title>
		<meta name="Author" content="�����" />
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
		    <form  method="post" action="main.php?action=<?php echo $this->_tpl_vars['action']; ?>
">
			<div class="msg-box">
				<ul class="viewmess">
					<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['post']['id']; ?>
">
					<li class="light-row">
						<span class="col_width">�û���&nbsp;&nbsp;&nbsp;<span class="red_font">*</span></span>
						<input name="userName" type="text"  value="<?php echo $this->_tpl_vars['post']['userName']; ?>
" class="text-box">
						����ʹ�����ģ�����ֹ��[@][.]������������
					</li>
					<li class="dark-row">
						<span class="col_width">��¼����<span class="red_font">*</span></span>
						<input name="userPwd" type="password"   class="text-box">
					</li>
					<li class="light-row">
						<span class="col_width">ȷ������<span class="red_font">*</span></span>
						<input name="userpwdok" type="password"  size="20" class="text-box">
					</li>
					<li class="dark-row">
						<span class="col_width">�����ʼ�<span class="red_font">*</span></span>
						<input name="email" type="text"  value="<?php echo $this->_tpl_vars['post']['email']; ?>
" class="text-box">
						����ȷ��д��ĵ����ʼ���ַ
					</li>	

					<li class="light-row">
						<span class="col_width">��&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;��</span>
						<input type="radio" name="sex" value="��"> �� &nbsp;
        					<input type="radio" name="sex" value="Ů"> Ů &nbsp;
         					<input name="sex" type="radio" value="" checked="checked"> ���� 
					</li>
				
					<li class="dark-row">
						<span class="col_width"> &nbsp; </span>
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