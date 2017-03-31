<?php /* Smarty version 2.6.18, created on 2007-08-02 23:27:57
         compiled from send_contact.htm */ ?>
<p class="field_top">聯絡我們</p>
<div class="field_content">
  <form method="post" action="" onSubmit="
<?php if (( $this->_tpl_vars['curruser']->isguest() )): ?>
	if (!this.sender.value) {alert('請輸入寄件人'); this.sender.focus(); return false;}
	if (!this.email.value) {alert('請輸入email'); this.email.focus(); return false;}
<?php endif; ?>
	if (!this.title.value) {alert('請輸入標題'); this.title.focus(); return false;}
	if (!this.content.value) {alert('請輸入內容'); this.content.focus(); return false;}
" >
    <table border="0" cellpadding="5" cellspacing="0" style="border-collapse: collapse" align="center">
<?php if ($this->_tpl_vars['curruser']->isguest()): ?>
      <tr>
        <td>姓名</td>
        <td><input type="text" name="sender" size="20"/></td>
      </tr>
      <tr>
        <td>E-Mail</td>
        <td><input type="text" name="email" size="20"/></td>
      </tr>
<?php endif; ?>
      <tr>
        <td>標題</td>
        <td><input type="text" name="title" value="" size="40" /></td>
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