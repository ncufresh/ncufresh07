<?php /* Smarty version 2.6.18, created on 2007-08-10 02:27:04
         compiled from block/status.htm */ ?>
<?php if (( ! $this->_tpl_vars['curruser']->isguest() )): ?>
<script type="text/javascript">
	function show_msg_status(req)
	{
		var msg_num = req.responseText;

		var status = (msg_num > 0) ? '<a href="<?php echo $this->_tpl_vars['block']['dirname']; ?>
/msgbox.php" title="訊息信箱">您有 ' + msg_num + ' 封新訊息</a>' : '您沒有新訊息';

		$('msg_status').innerHTML = status;
	}

	function get_msg_status()
	{
		var parms = "unread=1";

		var req = new Ajax.Request("<?php echo $this->_tpl_vars['block']['dirname']; ?>
/msgbox_do.php", {method: "get", parameters: parms, onComplete: show_msg_status});

		setTimeout(get_msg_status, 15 * 1000);
	}

	get_msg_status();
</script>

<style type="text/css">
#block_user_status
{
        background: url("<?php echo $this->_tpl_vars['currconfig']->url; ?>
/templates/images/block_bg.jpg") no-repeat;
	overflow: hidden;
        letter-spacing: 1px;
	padding-left: 10px;
        width: 160px;
        height: 180px;
}

#block_user_status p
{
	margin: 10px auto;
}

#block_user_status a
{
	margin-left: -5px;
}

#msg_status
{
	margin: 10px 0px;
	background: url("<?php echo $this->_tpl_vars['block']['dirname']; ?>
/templates/images/icon_mail.gif") no-repeat;
	overflow: hidden;
	padding: 10px;
	text-align: center;
	width: 150px;
	height: 20px;
}

#msg_status a
{
	color: #000000;
	text-decoration: none;
}
</style>
<div id="block_user_status">
  <p><img src="<?php echo $this->_tpl_vars['block']['dirname']; ?>
/templates/images/p_loginman.gif" alt="" /> hi, <?php echo $this->_tpl_vars['block']['name']; ?>
</p>
  <p>
    <a href="<?php echo $this->_tpl_vars['block']['dirname']; ?>
/friendlist.php" title="好友名單"><img src="<?php echo $this->_tpl_vars['block']['dirname']; ?>
/templates/images/p_loginfriend.gif" alt="好友名單" border="0" /></a>
    <a href="<?php echo $this->_tpl_vars['block']['dirname']; ?>
/edit_pfile.php" title="個人資訊"><img src="<?php echo $this->_tpl_vars['block']['dirname']; ?>
/templates/images/p_logininfo.gif" alt="個人資訊" border="0" /></a>
    <a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/superask/subscribe.php" title="我的訂閱"><img src="<?php echo $this->_tpl_vars['block']['dirname']; ?>
/templates/images/p_loginmine.gif" alt="我的訂閱" border="0" /></a>
  </p>
  <p>
    <a href="<?php echo $this->_tpl_vars['block']['dirname']; ?>
/msgbox.php" title="我的信箱"><img src="<?php echo $this->_tpl_vars['block']['dirname']; ?>
/templates/images/p_loginmail.gif" alt="我的信箱" border="0" /></a>
<!--
    <a href="" title="註冊精靈"><img src="<?php echo $this->_tpl_vars['block']['dirname']; ?>
/templates/images/p_loginfresh.gif" alt="註冊精靈" border="0" /></a>
-->
    <a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/include/user.php?user_logout=1" title="登出"><img src="<?php echo $this->_tpl_vars['block']['dirname']; ?>
/templates/images/p_loginout.gif" alt="登出" border="0" /></a>
  </p>
</div>
<div id="msg_status"></div>
<?php endif; ?>