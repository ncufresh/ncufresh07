<?php /* Smarty version 2.6.18, created on 2007-07-25 17:03:34
         compiled from block/subscri.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlencode', 'block/subscri.htm', 21, false),)), $this); ?>
<script type="text/javascript">
	function unsubscribe(type, no)
	{
		var parms = 'unsubscr_' + type + '=1&no=' + no;

		var req = new Ajax.Request("<?php echo $this->_tpl_vars['block']['dirname']; ?>
/do_subscribe.php", {method: "post", parameters: parms, onComplete: function(q){alert('已取消訂閱'); window.location.reload();}});
	}
</script>
<table class="blockTable">
  <tr>
    <th colspan="3">訂閱<?php echo $this->_tpl_vars['block']['desc']; ?>
列表</th>
  </tr>
  <tr>
    <td width="15%">取消</td>
    <td width="70%">標題</td>
    <td width="15%">篇數</td>
  </tr>
<?php $_from = $this->_tpl_vars['block']['subscri']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['object']):
?>
  <tr>
    <td width="15%"><a href="javascript: unsubscribe('<?php echo $this->_tpl_vars['block']['type']; ?>
', <?php echo $this->_tpl_vars['object']['no']; ?>
);" title="閱讀文章"><img src="<?php echo $this->_tpl_vars['block']['dirname']; ?>
/templates/images/icon_left4.jpg" border="0" width="9" height="8" /></a></td>
    <td width="70%"><a href="<?php echo $this->_tpl_vars['block']['dirname']; ?>
/view<?php echo $this->_tpl_vars['block']['type']; ?>
.php?no=<?php echo $this->_tpl_vars['object']['no']; ?>
" title="閱讀文章"><?php echo ((is_array($_tmp=$this->_tpl_vars['object']['title'])) ? $this->_run_mod_handler('htmlencode', true, $_tmp) : htmlencode($_tmp)); ?>
</a></td>
    <td width="15%"><?php echo $this->_tpl_vars['object']['num']; ?>
</td>
  </tr>
<?php endforeach; endif; unset($_from); ?>
</table>