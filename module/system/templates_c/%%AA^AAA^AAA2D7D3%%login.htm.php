<?php /* Smarty version 2.6.18, created on 2007-07-23 16:19:06
         compiled from block/login.htm */ ?>
<?php if (( $this->_tpl_vars['curruser']->isguest() )): ?>
<style type="text/css">
#block_login
{
	background: url("<?php echo $this->_tpl_vars['currconfig']->url; ?>
/templates/images/block_bg.jpg") repeat;
	padding: 10px;
	letter-spacing: 1px;
	text-align: left;
	width: 150px;
	height: 160px;
}

#block_login_form
{
	margin-top: 20px;
	margin-right: 10px;
	text-align: right;
}

#block_login_form input
{
	background: #FFFFFF;
}
</style>

<div id="block_login">
  <img src="<?php echo $this->_tpl_vars['block']['dirname']; ?>
/templates/images/p_loginicon.gif" alt="" />
  <form method="post" action="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/include/user.php" id="block_login_form">
    <label class="id" for="login_id">ID</label> <input type="text" id="login_id" name="id" size="10" /><br /><br />
    <label class="pwd" for="login_pwd">PWD</label> <input type="password" id="login_pwd" name="pwd" size="10" /><br /><br />
    <input type="hidden" name="user_login" value="1" /><input type="submit" value="登入" />
<?php if (( $this->_tpl_vars['currconfig']->openreg == 1 )): ?>
&nbsp;&nbsp;<input type="button" value="註冊" onclick="javascript: document.location.href='<?php echo $this->_tpl_vars['block']['dirname']; ?>
/register.php';" />
<?php endif; ?>
  </form>
</div>
<?php endif; ?>