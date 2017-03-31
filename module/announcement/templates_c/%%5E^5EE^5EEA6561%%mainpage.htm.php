<?php /* Smarty version 2.6.18, created on 2007-08-10 03:00:23
         compiled from mainpage.htm */ ?>
<div>
  <div style="float: left;">
    <?php echo $this->_tpl_vars['c_block']; ?>

    <?php echo $this->_tpl_vars['c_block2']; ?>

  </div>
  <div style="float: right; width: 420px;">
<?php if (( $this->_tpl_vars['currmodule']->isadmin($this->_tpl_vars['curruser']) )): ?>
    <p><a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/form.php?action=post" title="新增公告"><font color="#000000">新增公告</font></a></p>
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
    <p><a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/allanno.php?pno=1" title="公告列表"><font color="#000000">所有公告列表</font></a></p>    
  </div>
  <p style="clear: both;"></p>
</div>