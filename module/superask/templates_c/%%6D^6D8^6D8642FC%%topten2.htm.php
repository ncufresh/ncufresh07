<?php /* Smarty version 2.6.18, created on 2007-08-08 09:50:18
         compiled from block/topten2.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlencode', 'block/topten2.htm', 38, false),)), $this); ?>
<style type="text/css">
#topten_up
{
	margin: 0px;
	background: url("<?php echo $this->_tpl_vars['block']['dirname']; ?>
/templates/images/front_top.jpg") no-repeat;
	width: 190px;
	height: 45px;
}

#topten_content
{
	margin: 0px;
	background: url("<?php echo $this->_tpl_vars['block']['dirname']; ?>
/templates/images/front_bg.jpg") repeat-y;
	overflow: hidden;
	padding: 0px 10px;
	width: 170px;
}

#topten_content a
{
	color: #333333;
}

#topten_bottom
{
	margin: 0px;
	background: url("<?php echo $this->_tpl_vars['block']['dirname']; ?>
/templates/images/front_down.jpg") no-repeat;
	width: 190px;
	height: 20px;
}
</style>

<p id="topten_up"></p>
<div id="topten_content">
  <table border="0" cellpadding="3" cellspacing="0" style="border-collapse: collapse;" width="100%">
<?php $_from = $this->_tpl_vars['block']['topic']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
    <tr>
      <td><a href="<?php echo $this->_tpl_vars['block']['dirname']; ?>
/view.php?tno=<?php echo $this->_tpl_vars['item']['tno']; ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('htmlencode', true, $_tmp) : htmlencode($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('htmlencode', true, $_tmp) : htmlencode($_tmp)); ?>
</a></td>
    </tr>
<?php endforeach; endif; unset($_from); ?>
  </table>
</div>
<p id="topten_bottom"></p>