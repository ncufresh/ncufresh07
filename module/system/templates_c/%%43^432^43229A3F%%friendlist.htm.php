<?php /* Smarty version 2.6.18, created on 2007-08-16 17:04:24
         compiled from friendlist.htm */ ?>
<script type="text/javascript">
	function chk_uid(uid)
	{
		if (!uid)
			return false;

		var parms = 'chk_uid=1&uid=' + encodeURIComponent(uid);

		var req = new Ajax.Request('<?php echo $this->_tpl_vars['currconfig']->url; ?>
/include/user.php', {method: 'get', parameters: parms, onComplete: function (req) {$('chk_uid_result').innerHTML = (req.responseText == 'exists') ? '' : '<font color="#FF0000">錯誤的使用者帳號</font>';} });
	}

	function addfriend()
	{
		if (!document.fl.fid.value)
			return ;

		var parms = 'add_friend=1&fid=' + document.fl.fid.value;

		var req = new Ajax.Request("<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/friendlist_ajax.php", {method: "post", parameters: parms, onComplete: function(q){ document.location.href = '<?php echo $this->_tpl_vars['currconfig']->phpself; ?>
';}});
	}

	function delfriend(fno)
	{
		if (fno == 0)
			return ;

		var parms = 'del_friend=1&fno=' + fno;

		var req = new Ajax.Request("<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/friendlist_ajax.php", {method: "post", parameters: parms, onComplete: function(q){alert('已從好友名單中刪除'); document.location.href = '<?php echo $this->_tpl_vars['currconfig']->phpself; ?>
';}});
	}

	function turnfriendship(fno)
	{
		if (fno == 0)
			return ;

		var parms = 'turn_friendship=1&fno=' + fno;

		var req = new Ajax.Request("<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/friendlist_ajax.php", {method: "post", parameters: parms, onComplete: function(q){document.location.href = '<?php echo $this->_tpl_vars['currconfig']->phpself; ?>
';}});
	}
</script>

<p class="field_top"><img src="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/templates/images/p_friendicon.jpg" alt="好友名單" /></p>
<div class="field_content">
  <form method="post" action="" id="fl" name="fl" style="border-bottom: 1px dotted #CCCCCC; padding: 10px;">
    <img src="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/templates/images/p_friendadd.gif" alt="" />&nbsp; 新增好友 <input type="text" name="fid" size="20" onblur="chk_uid(this.value);" />&nbsp;&nbsp;<input type="button" value="新增" onclick="javascript: addfriend();" /><span id="chk_uid_result" style="margin: 0px 10px;"></span>
  </form>

  <table border="0" cellpadding="3" cellspacing="0" style="border-collapse: collapse;" width="100%">
    <tr>
      <td width="250">帳號 (暱稱)</td>
      <td width="40">傳訊</td>
      <td width="40">類別</td>
      <td>刪除</td>
    </tr>
    <tr>
      <td colspan="4"><hr width="100%" /></td>
    </tr>
<?php $_from = $this->_tpl_vars['friend']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['user']):
?>
    <tr>
      <td><font color="#<?php if (( $this->_tpl_vars['user']->friendship == $this->_tpl_vars['friend_handler']->goodfriend )): ?>CC9900<?php else: ?>666666<?php endif; ?>"><?php echo $this->_tpl_vars['user']->uid; ?>
 (<?php echo $this->_tpl_vars['user']->name; ?>
)</font></td>
      <td><a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/msgsend.php?fno=<?php echo $this->_tpl_vars['user']->uno; ?>
" title="傳送訊息"><img src="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/templates/images/p_friendmail.gif" alt="" border="0" /></a></td>
      <td><a href="javascript: turnfriendship(<?php echo $this->_tpl_vars['user']->uno; ?>
);" title="設成<?php if (( $this->_tpl_vars['user']->friendship == $this->_tpl_vars['friend_handler']->goodfriend )): ?>壞人<?php else: ?>好友<?php endif; ?>"><img src="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/templates/images/p_friend<?php if (( $this->_tpl_vars['user']->friendship == $this->_tpl_vars['friend_handler']->goodfriend )): ?>good<?php else: ?>bad<?php endif; ?>.gif" alt="" border="0" /></a></td>
      <td><a href="javascript: delfriend(<?php echo $this->_tpl_vars['user']->uno; ?>
);" title="從名單中刪除"><img src="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/templates/images/p_friendminus.gif" alt="" border="0" /></a></td>
    </tr>
<?php endforeach; endif; unset($_from); ?>
  </table>
</div>
<p class="field_bottom"></p>