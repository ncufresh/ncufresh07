<?php /* Smarty version 2.6.18, created on 2007-08-10 00:51:11
         compiled from block/mainmenu.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlencode', 'block/mainmenu.htm', 74, false),)), $this); ?>
<style type="text/css">
.cate_menu
{
	margin: 0px;
	padding: 0px;
	list-style-type: none;
}

#tcat
{
	background: url("<?php echo $this->_tpl_vars['block']['dirname']; ?>
/templates/images/c_menu_top.jpg") no-repeat;
	width: 196px;
	height: 11px;
}

.pcat
{
	background: url("<?php echo $this->_tpl_vars['block']['dirname']; ?>
/templates/images/c_menu_bg.jpg") no-repeat;
	width: 196px;
	height: 30px;
}

.pcat a
{
	display: block;
	text-decoration: none;
	padding: 5px 15px;
	width: 166px;
	height: 20px;
}

.ccat
{
	background: url("<?php echo $this->_tpl_vars['block']['dirname']; ?>
/templates/images/c_menu_bg.jpg") no-repeat;
	width: 196px;
	height: 30px;

}

.ccat a
{
	display: block;
	text-decoration: none;
	padding: 5px 25px;
	width: 146px;
	height: 20px;
}


</style>

<script type="text/javascript">
	var i = 0;

	function show_cats(id)
	{
		if (i > 0)
			$('pcat_' + i).style.display = 'none';

		if (i != id)
		{
			$('pcat_' + id).style.display = 'block';
			i = id;
		}
		else
			i = 0;
	}
</script>

<div style="overflow: hidden; width: 200px;">
  <ul class="cate_menu">
    <li id="tcat"></li>
<?php $_from = $this->_tpl_vars['block']['cat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pcat']):
?>
    <li class="pcat"><a href="javascript: show_cats(<?php echo $this->_tpl_vars['pcat']['cno']; ?>
);" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['pcat']['name'])) ? $this->_run_mod_handler('htmlencode', true, $_tmp) : htmlencode($_tmp)); ?>
"><font color="#333333"><?php echo ((is_array($_tmp=$this->_tpl_vars['pcat']['name'])) ? $this->_run_mod_handler('htmlencode', true, $_tmp) : htmlencode($_tmp)); ?>
</font></a></li>
    <li id="pcat_<?php echo $this->_tpl_vars['pcat']['cno']; ?>
" style="margin: 0px; padding: 0px; display: none;">
      <ul class="cate_menu"">
<?php $_from = $this->_tpl_vars['pcat']['child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ccat']):
?>
<?php if (( $this->_tpl_vars['ccat']['tno'] )): ?>
        <li class="ccat"><a href="<?php echo $this->_tpl_vars['block']['dirname']; ?>
/view.php?tno=<?php echo $this->_tpl_vars['ccat']['tno']; ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['ccat']['title'])) ? $this->_run_mod_handler('htmlencode', true, $_tmp) : htmlencode($_tmp)); ?>
"><font color="#666666"><?php echo ((is_array($_tmp=$this->_tpl_vars['ccat']['title'])) ? $this->_run_mod_handler('htmlencode', true, $_tmp) : htmlencode($_tmp)); ?>
</font></a></li>
<?php else: ?>
        <li class="ccat"><a href="<?php echo $this->_tpl_vars['block']['dirname']; ?>
/showgroup.php?cno=<?php echo $this->_tpl_vars['ccat']['cno']; ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['ccat']['name'])) ? $this->_run_mod_handler('htmlencode', true, $_tmp) : htmlencode($_tmp)); ?>
"><font color="#333333"><?php echo ((is_array($_tmp=$this->_tpl_vars['ccat']['name'])) ? $this->_run_mod_handler('htmlencode', true, $_tmp) : htmlencode($_tmp)); ?>
</font></a></li>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
      </ul>
    </li>
<?php endforeach; endif; unset($_from); ?>
  </ul>
</div>