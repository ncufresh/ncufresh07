<?php /* Smarty version 2.6.18, created on 2007-07-24 02:39:50
         compiled from toolbar.htm */ ?>
<div id="toolbar">
<?php $_from = $this->_tpl_vars['tlb']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['b']):
?>
  <input type="button" value="<?php echo $this->_tpl_vars['b']; ?>
" onclick="javascript: insertTags('<?php echo $this->_tpl_vars['tid']; ?>
', '[<?php echo $this->_tpl_vars['b']; ?>
]', '[/<?php echo $this->_tpl_vars['b']; ?>
]', 'abc');" />
<?php endforeach; endif; unset($_from); ?>
</div>