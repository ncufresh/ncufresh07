<?php /* Smarty version 2.6.18, created on 2007-08-02 20:59:07
         compiled from admin/topicsearchform.htm */ ?>
<style type="text/css">
#usersearchform
{
	padding: 20px;
	text-align: center;
}
</style>
<form method="get" action="" id="usersearchform">
  搜尋欄位：
  <select name="column" size="1">
    <option value="title">主題</option>
  </select>
  關鍵字：
  <input type="text" name="key" size="20" />
  <input type="submit" value="查詢" />
  <a href="<?php echo $this->_tpl_vars['currconfig']->phpself; ?>
" title="列出全部主題">列出全部主題</a>
</form>