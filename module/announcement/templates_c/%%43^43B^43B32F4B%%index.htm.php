<?php /* Smarty version 2.6.18, created on 2007-08-08 05:15:30
         compiled from index.htm */ ?>
<?php if (( $this->_tpl_vars['currmodule']->isadmin($this->_tpl_vars['curruser']) )): ?>
	<p><a href="form.php?action=post">新增公告</a></p>
<?php endif; ?>
<?php $_from = $this->_tpl_vars['topics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['topic']):
?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "topic.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endforeach; endif; unset($_from); ?>
<p><a href="allanno.php?pno=1">所有公告列表</a></p>