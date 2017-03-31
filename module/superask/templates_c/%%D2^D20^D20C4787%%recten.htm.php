<?php /* Smarty version 2.6.18, created on 2007-08-10 02:31:53
         compiled from block/recten.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlencode', 'block/recten.htm', 24, false),)), $this); ?>
<style type="text/css">
#recten
{
	margin: 0px;
	background: url("<?php echo $this->_tpl_vars['block']['dirname']; ?>
/templates/images/c_top2_1.jpg") no-repeat;
	overflow: hidden;
	width: 204px;
	height: 35px;
}

#recten h1
{
	margin-top: 4px;
	margin-left: 15px;
	font-size: 10pt;
}
</style>

<div id="recten"><h1>推薦主題</h1></div>
<div class="block_top_content">
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
<div class="block_top_bottom"></div>