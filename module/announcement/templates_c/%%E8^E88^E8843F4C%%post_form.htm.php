<?php /* Smarty version 2.6.18, created on 2007-08-08 05:20:48
         compiled from post_form.htm */ ?>
<div>
	<form method="post" action="do_post.php">
	<table border="1">
		<tr>
			<td colspan="2">新增公告</td>
		</tr>
		<tr>
			<td valign="top">公告分類</td>
			<td align="left">
				<select name="tag[]" size="3" multiple>
				<?php $_from = $this->_tpl_vars['tag']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
					<option value="<?php echo $this->_tpl_vars['item']['tag_no']; ?>
"><?php echo $this->_tpl_vars['item']['title']; ?>
</option>
				<?php endforeach; endif; unset($_from); ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>置頂與否</td>
			<td align="left"><input type="radio" name="top" value="1">是<input type="radio" name="top" value"0" checked>否</td>
		<tr>
			<td>公告主題</td>
			<td align="left"><input type="title" name="title" size="70"></td>
		</tr>
		<tr>
			<td valign="top">公告內容</td>
			<td><textarea name="content" cols="60" rows="20"></textarea></td>
		</tr>
		<tr>
			<td>相關連結</td>
			<td align="left"><input type="title" name="link" size="70"></td>
		</tr>
		<tr>
			<td>是否直接連結</td>
			<td align="left"><input type="radio" name="go_link" value="1">是<input type="radio" name="go_link" value"0" checked>否</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="submit" value="送出" />
				<input type="reset" value="重填" />
				<input type="button" onclick="history.go(-1)" value="放棄新增" />
			</td>
		</tr>
	</table>
	</form>
</div>