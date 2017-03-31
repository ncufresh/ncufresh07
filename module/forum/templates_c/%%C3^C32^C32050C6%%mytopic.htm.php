<?php /* Smarty version 2.6.18, created on 2007-07-25 20:14:23
         compiled from block/mytopic.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlencode', 'block/mytopic.htm', 7, false),)), $this); ?>
<table class="blockTable">
  <tr>
    <th>文章記錄</th>
  </tr>
<?php $_from = $this->_tpl_vars['block']['mytopic']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['topic']):
?>
  <tr>
    <td>&nbsp;&nbsp;<a href="<?php echo $this->_tpl_vars['block']['dirname']; ?>
/viewtopic.php?no=<?php echo $this->_tpl_vars['topic']['topic_no']; ?>
" title="閱讀文章"><?php echo ((is_array($_tmp=$this->_tpl_vars['topic']['title'])) ? $this->_run_mod_handler('htmlencode', true, $_tmp) : htmlencode($_tmp)); ?>
&nbsp;(<?php echo $this->_tpl_vars['topic']['num']; ?>
)</a></td>
  </tr>
<?php endforeach; endif; unset($_from); ?>
</table>
