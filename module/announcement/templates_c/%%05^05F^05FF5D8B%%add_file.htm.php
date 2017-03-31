<?php /* Smarty version 2.6.18, created on 2007-08-08 06:19:03
         compiled from add_file.htm */ ?>
<form method="post" action="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/file.php?topic_no=<?php echo $this->_tpl_vars['topic_no']; ?>
&action=add" enctype="multipart/form-data">
<table>
	<tr>
		<td valign="top">標題</td>
		<td align="left"><input type="text" name="file_name" size="50" /></td>
	</tr>
	<tr>
		<td valign="top">上傳檔案</td>
		<td align="left"><input type="file" name="res" size="50" /></td>
	</tr>
	<tr>
		<td colspan="2">
	<input type="submit" value="新增檔案" />
	<input type="button" onclick="history.go(-1)" value="放棄新增" /></td>
		</td>
	</tr>
</table>