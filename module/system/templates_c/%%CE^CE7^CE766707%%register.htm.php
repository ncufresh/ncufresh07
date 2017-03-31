<?php /* Smarty version 2.6.18, created on 2007-08-16 07:56:47
         compiled from register.htm */ ?>
<script type="text/javascript">
	function chk_uid(uid)
	{
		if (!uid)
			return false;

		var parms = 'chk_uid=1&uid=' + encodeURIComponent(uid);

		var req = new Ajax.Request('<?php echo $this->_tpl_vars['currconfig']->url; ?>
/include/user.php', {method: 'get', parameters: parms, onComplete: function (req) {$('chk_uid_result').innerHTML = (req.responseText == 'exists') ? '<font color="#FF0000">此帳號已有人使用</font>' : '';} });
	}
</script>
<p class="field_top">註冊帳號</p>
<div class="field_content">
  <form method="post" action="" id="register" name="register" onSubmit="
	if (!this.uid.value) {alert('請輸入帳號'); this.uid.focus(); return false;}
	if (!this.pwd.value) {alert('請輸入密碼'); this.pwd.focus(); return false;}
	if (!this.pwd_i.value) {alert('請確認密碼'); this.pwd_i.focus(); return false;}
	if (this.pwd.value.length < 6) {alert('密碼長度需超過 6 個字元'); this.pwd.focus(); return false;}
	if (this.pwd.value != this.pwd_i.value) {alert('密碼不相符'); this.pwd.focus(); return false;}
	if (!this.realname.value) {alert('請輸入姓名'); this.realname.focus(); return false;}
	if (!this.name.value) {alert('請輸入暱稱'); this.name.focus(); return false;}
	if (!this.sex[0].checked && !this.sex[1].checked) {alert('請選擇性別'); return false;}
">
    <table border="0" cellpadding="5" cellspacing="0" style="border-collapse: collapse" align="center" width="100%">
      <tr>
        <td width="25%"><font color="#FF0000">*&nbsp;</font>帳號</td>
        <td width="75%"><input type="text" name="uid" size="20" maxlength="12" onblur="chk_uid(this.value);" /><span id="chk_uid_result" style="margin: 0px 10px;"></span></td>
      </tr>
      <tr>
        <td width="25%"><font color="#FF0000">*&nbsp;</font>密碼</td>
        <td width="75%"><input type="password" name="pwd" size="20" /> 密碼長度須超過 6 個字元</td>
      </tr>
      <tr>
        <td width="25%"><font color="#FF0000">*&nbsp;</font>確認密碼</td>
        <td width="75%"><input type="password" name="pwd_i" size="20" /></td>
      </tr>
      <tr>
        <td width="25%"><font color="#FF0000">*&nbsp;</font>姓名</td>
        <td width="75%"><input type="text" name="realname" size="10" /></td>
      </tr>
      <tr>
        <td width="25%"><font color="#FF0000">*&nbsp;</font>暱稱</td>
        <td width="75%"><input type="text" name="name" size="20" /><div id="chk_name"></div></td>
      </tr>
      <tr>
        <td width="25%"><font color="#FF0000">*&nbsp;</font>性別</td>
        <td width="75%"><input type="radio" name="sex" value="boy" />男&nbsp;&nbsp;<input type="radio" name="sex" value="girl" />女</td>
      </tr>
      <tr>
        <td width="25%">SPARC 帳號 (學號)</td>
        <td width="75%"><input type="text" name="sid" size="10" /></td>
      </tr>
      <tr>
        <td width="25%">SPARC 密碼</td>
        <td width="75%"><input type="password" name="spwd" size="10" /> 新生請填出生日期 (YYYYMMDD)</td>
      </tr>
      <tr>
        <td width="25%"><font color="#FF0000">*&nbsp;</font>系所</td>
        <td width="75%"><select name="department" size="1">
<?php $_from = $this->_tpl_vars['dep']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['value'] => $this->_tpl_vars['desc']):
?>
          <option value="<?php echo $this->_tpl_vars['value']; ?>
"><?php echo $this->_tpl_vars['desc']; ?>
系</option>
<?php endforeach; endif; unset($_from); ?>
        </select></td>
      </tr>
      <tr>
        <td width="25%">首頁</td>
        <td width="75%"><input type="text" name="website" size="40" /></td>
      </tr>
      <tr>
        <td width="25%">電子信箱</td>
        <td width="75%"><input type="text" name="email" size="40" /></td>
      </tr>
      <tr>
        <td width="25%">自我介紹</td>
        <td width="75%"><textarea name="intro" rows="10" cols="40"></textarea></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input type="hidden" name="register_user" value="1" /><input type="submit" value="送出" />&nbsp;&nbsp;<input type="reset" value="取消" /></td>
      </tr>
    </table>
  </form>
</div>
<p class="field_bottom"></p>