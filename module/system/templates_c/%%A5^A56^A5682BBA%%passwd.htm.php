<?php /* Smarty version 2.6.18, created on 2007-07-25 16:06:23
         compiled from passwd.htm */ ?>
<script type="text/javascript">
	function show_passwd_result(req)
	{
		$('passwd_result').innerHTML = '<font color="#FF0000">' + req.responseText + '</font>';;

		if (req.responseText.indexOf('密碼更改成功', 0) >= 0)
			Element.hide('passwd_form');
		
	}

	function do_passwd()
	{
		var parms = 'o_pwd=' + document.passwd.o_pwd.value + '&n_pwd=' + document.passwd.n_pwd.value + '&i_pwd=' + document.passwd.i_pwd.value;

		var req = new Ajax.Request("<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/passwd.php", {method: "post", parameters: parms, onComplete: show_passwd_result});
	}
</script>
<p class="field_top">修改密碼</p>
<div class="field_content">
  <div id="passwd_result"></div>
  <div id="passwd_form">
    <form method="post" action="" id="passwd" name="passwd">
      <table border="0" cellpadding="5" cellspacing="0" style="border-collapse: collapse" align="center">
        <tr>
          <td>舊密碼</td>
          <td><input type="password" name="o_pwd" size="20" /></td>
        </tr>
        <tr>
          <td>新密碼</td>
          <td><input type="password" name="n_pwd" size="20" /></td>
        </tr>
        <tr>
          <td>確認新密碼</td>
          <td><input type="password" name="i_pwd" size="20" /></td>
        </tr>
        <tr>
          <td colspan="2" align="center"><input type="button" value="確定" onclick="javascript: do_passwd();" /></td>
        </tr>
      </table>
    </form>
  </div>
</div>
<p class="field_bottom"></p>
