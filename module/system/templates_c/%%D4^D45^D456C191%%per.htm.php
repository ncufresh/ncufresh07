<?php /* Smarty version 2.6.18, created on 2007-07-23 20:52:58
         compiled from per.htm */ ?>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
  <tr>
    <td colspan="2" align="center"><form method="post" action="" name="bsubscribe" id="bsubscribe"><select name="bsubscribe" size="1">
<?php $_from = $this->_tpl_vars['uf_blocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['block']):
?>
      <option value="<?php echo $this->_tpl_vars['block']->bno; ?>
"><?php echo $this->_tpl_vars['block']->name; ?>
</option>
<?php endforeach; endif; unset($_from); ?>
    </select>&nbsp;<input type="button" value="增加" onclick="javascript: update_click();">&nbsp;<input type="button" value="刪除" onclick="javascript: delete_click();"></form></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
</table>
<div id="DropZone0" style="float: left;border: 1px dashed #85A3BF;overflow: auto;width: 49%;height: 700px;">
<?php $_from = $this->_tpl_vars['user_blocks']['0']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['block']):
?>
  <div id="b_<?php echo $this->_tpl_vars['block']['bno']; ?>
">
<?php echo $this->_tpl_vars['block']['content']; ?>

  </div>
<?php endforeach; endif; unset($_from); ?>
</div>
<div id="DropZone1" style="float: right;border: 1px dashed #85A3BF;overflow: auto;width: 49%;height: 700px;">
<?php $_from = $this->_tpl_vars['user_blocks']['1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['block']):
?>
  <div id="b_<?php echo $this->_tpl_vars['block']['bno']; ?>
">
<?php echo $this->_tpl_vars['block']['content']; ?>

  </div>
<?php endforeach; endif; unset($_from); ?>
</div>
<script type="text/javascript">
	function delete_click()
	{
		subscri_update('del', document.bsubscribe.bsubscribe.options[document.bsubscribe.bsubscribe.options.selectedIndex].value);
	}

	function update_click()
	{
		subscri_update('add', document.bsubscribe.bsubscribe.options[document.bsubscribe.bsubscribe.options.selectedIndex].value);
	}

	function subscri_update(type, bno)
	{
		var parms = type + '=1&bno=' + bno;

		var req = new Ajax.Request("<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/bsubscri_ajax.php", {method: "post", parameters: parms, onComplete: function(q){window.location.reload();}});
	}

	function subscri_allupdate(str)
	{
		var parms = 'chg=1&' + str;

		var req = new Ajax.Request("<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/bsubscri_ajax.php", {method: "post", parameters: parms});
	}

	Sortable.create('DropZone0', {dropOnEmpty: true, containment: ['DropZone0', 'DropZone1'], constraint: false, onUpdate: function () {subscri_allupdate(Sortable.serialize('DropZone0') + '&' + Sortable.serialize('DropZone1'));} });
	Sortable.create('DropZone1', {dropOnEmpty: true, containment: ['DropZone0', 'DropZone1'], constraint: false, onUpdate: function () {} });
</script>