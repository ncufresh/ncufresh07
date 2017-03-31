<?php /* Smarty version 2.6.18, created on 2007-08-13 13:24:20
         compiled from login.htm */ ?>
<p class="field_top">使用者登入</p>
<div class="field_content">
  <form method="post" action="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/include/user.php">
    <table border="0" cellpadding="5" cellspacing="0" style="border-collapse: collapse" align="center">
      <tr>
        <td align="right">帳號</td>
        <td align="left"><input type="text" name="id" size="10" /></td>
      </tr>
      <tr>
        <td align="right">密碼</td>
        <td align="left"><input type="password" name="pwd" size="10" /></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input type="hidden" name="user_login" value="1" /><input type="submit" value="登入" />&nbsp;&nbsp;<input type="reset" value="取消" /></td>
      </tr>
      <tr>
        <td colspan="2" align="center">還沒有帳號？<a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/register.php" title="註冊">註冊</a></td>
      </tr>
    </table>
  </form>
</div>
<p class="field_bottom"></p>