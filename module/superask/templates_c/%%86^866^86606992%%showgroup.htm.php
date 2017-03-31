<?php /* Smarty version 2.6.18, created on 2007-08-10 00:15:08
         compiled from showgroup.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlencode', 'showgroup.htm', 8, false),)), $this); ?>
<div id="cats_bg">
  <div style="float: left;">
    <?php echo $this->_tpl_vars['c_block']; ?>

  </div>
  <div style="float: right; padding: 0px 5px;">
<?php if (( $this->_tpl_vars['category'] )): ?>
<?php $_from = $this->_tpl_vars['category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
    <div class="category_b_top"><h1><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('htmlencode', true, $_tmp) : htmlencode($_tmp)); ?>
</h1></div>
    <div class="category_b_content">
<?php $_from = $this->_tpl_vars['item']['child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['child']):
?>
      <a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/view.php?tno=<?php echo $this->_tpl_vars['child']['tno']; ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['child']['title'])) ? $this->_run_mod_handler('htmlencode', true, $_tmp) : htmlencode($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['child']['title'])) ? $this->_run_mod_handler('htmlencode', true, $_tmp) : htmlencode($_tmp)); ?>
</a>&nbsp;&nbsp;
<?php endforeach; endif; unset($_from); ?>
    </div>
<?php endforeach; endif; unset($_from); ?>
<?php else: ?>
    <div class="category_b_top"><h1><?php echo ((is_array($_tmp=$this->_tpl_vars['_WikiCat']->name)) ? $this->_run_mod_handler('htmlencode', true, $_tmp) : htmlencode($_tmp)); ?>
</h1></div>
    <div class="category_b_content">
<?php $_from = $this->_tpl_vars['topic']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
      <a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/view.php?tno=<?php echo $this->_tpl_vars['item']['tno']; ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('htmlencode', true, $_tmp) : htmlencode($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('htmlencode', true, $_tmp) : htmlencode($_tmp)); ?>
</a>&nbsp;&nbsp;
<?php endforeach; endif; unset($_from); ?>
    </div>
<?php endif; ?>
  </div>
</div>