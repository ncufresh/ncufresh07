<?php /* Smarty version 2.6.18, created on 2007-08-10 22:22:28
         compiled from msg_send_form.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlencode', 'msg_send_form.htm', 32, false),)), $this); ?>
<script type="text/javascript">
	function show_chk_uid(req)
	{
		$('chk_uid').innerHTML = (req.responseText == "exists") ? '' : '<font color="#FF0000">錯誤的使用者帳號</font>';
	}

	function chk_uid()
	{
		if (!document.msg_send.fid.value)
			return false;

		var parms = "chk_uid=1&uid=" + document.msg_send.fid.value;

		var req = new Ajax.Request("<?php echo $this->_tpl_vars['currconfig']->url; ?>
/include/user.php", {method: "get", parameters: parms, onComplete: show_chk_uid});
	}
</script>

<p class="field_top"><img src="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/templates/images/p_mailicon.jpg" alt="傳訊息" /></p>
<div class="field_content">
  <form method="post" action="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/msgsend.php" id="msg_send" name="msg_send" onSubmit="
  	if (!this.fid.value) {alert('請輸入收件人'); this.fid.focus(); return false;}
	if (!this.title.value) {alert('請輸入標題'); this.title.focus(); return false;}
	if (!this.content.value) {alert('請輸入內容'); this.content.focus(); return false;}
" >
    <table border="0" cellpadding="5" cellspacing="0" style="border-collapse: collapse" align="center">
      <tr>
        <td>收件人</td>
        <td><input type="text" name="fid" value="<?php echo $this->_tpl_vars['fid']; ?>
" size="20" onBlur="javascript: chk_uid()" /><span id="chk_uid" style="margin: 0px 10px;"></span></td>
      </tr>
      <tr>
        <td>標題</td>
        <td><input type="text" name="title" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['title'])) ? $this->_run_mod_handler('htmlencode', true, $_tmp) : htmlencode($_tmp)); ?>
" size="40" /></td>
      </tr>
      <tr>
        <td colspan="2"><textarea name="content" rows="10" cols="60"></textarea></td>
      </tr>
      <tr>
        <td colspan="2" align="right"><input type="submit" value="送出" />&nbsp;&nbsp;<input type="reset" value="清除" /></td>
      </tr>
    </table>
  </form>
</div>
<p class="field_bottom"></p>