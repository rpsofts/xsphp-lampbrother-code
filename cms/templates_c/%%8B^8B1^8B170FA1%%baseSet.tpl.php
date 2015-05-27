<?php /* Smarty version 2.6.18, created on 2014-01-21 12:48:49
         compiled from admin/baseSet.tpl */ ?>
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
		    <form  method="post" action="main.php?action=baseSet">
			<div class="msg-box">
				<ul class="viewmess">
					<li class="light-row">
						<span class="col_width">前台显示风格</span>
							<select class="text-box" name="appStyle">
								<?php $_from = $this->_tpl_vars['varList']['selectStyle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
?>
									<option <?php if ($this->_tpl_vars['varList']['appStyle'] == $this->_tpl_vars['key']): ?> selected <?php endif; ?> value="<?php echo $this->_tpl_vars['key']; ?>
"><?php echo $this->_tpl_vars['value']; ?>
</option>
								<?php endforeach; endif; unset($_from); ?>
							</select>
						</li>
					<li class="dark-row">
						<span class="col_width">文章每页显示数目</span>
						<input type="text" class="text-box" name="articlePageSize" size="15" value="<?php echo $this->_tpl_vars['varList']['articlePageSize']; ?>
"> 条/页			
					</li>
					<li class="light-row">
						<span class="col_width">图片每页显示数目</span>
						<input type="text" class="text-box" name="picturePageSize" size="15" value="<?php echo $this->_tpl_vars['varList']['picturePageSize']; ?>
"> 条/页				
					</li>
					<li class="dark-row">
						<span class="col_width">后台图片显示方式</span>
						
						<input type="radio" name="pictureShowType" value="list" <?php if ($this->_tpl_vars['varList']['pictureShowType'] == 'list'): ?> checked  <?php endif; ?> > 列表	
						<input type="radio" name="pictureShowType" value="thumb" <?php if ($this->_tpl_vars['varList']['pictureShowType'] == 'thumb'): ?> checked  <?php endif; ?> > 缩略图
					</li>
					<li class="light-row">
						<span class="col_width">水印文字</span>
						<input type="text" class="text-box" name="waterText1" size="25" value="<?php echo $this->_tpl_vars['varList']['waterText1']; ?>
">&nbsp;&nbsp;
						<input type="text" class="text-box" name="waterText2" size="25" value="<?php echo $this->_tpl_vars['varList']['waterText2']; ?>
">
					</li>
					<li class="dark-row">
						<span class="col_width">缩略图尺寸</span>
						宽 <input type="text" class="text-box" name="width" size="5" value="<?php echo $this->_tpl_vars['varList']['width']; ?>
"> px&nbsp;&nbsp;
						高 <input type="text" class="text-box" name="height" size="5" value="<?php echo $this->_tpl_vars['varList']['height']; ?>
"> px
					</li>
					<li class="light-row">
						<span class="col_width">图片上传后的最大尺寸</span>
						宽 <input type="text" class="text-box" name="maxWidth" size="5" value="<?php echo $this->_tpl_vars['varList']['maxWidth']; ?>
"> px&nbsp;&nbsp;
						高 <input type="text" class="text-box" name="maxHeight" size="5" value="<?php echo $this->_tpl_vars['varList']['maxHeight']; ?>
"> px
					</li>
					<li class="dark-row">
						<span class="col_width">&nbsp;</span>
						<input type="submit" class="button" name="mod" value="修 改">&nbsp;&nbsp;
						<input type="reset" class="button" value="重 置">
					</li>
				</ul>	
			</div>
                    </form>	
		</div>
	</body>
</html>