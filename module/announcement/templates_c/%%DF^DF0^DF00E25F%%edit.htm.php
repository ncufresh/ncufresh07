<?php /* Smarty version 2.6.18, created on 2007-08-08 05:20:15
         compiled from edit.htm */ ?>
<div>
	<form method="post" action="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/do_edit.php?topic_no=<?php echo $this->_tpl_vars['topic']['topic_no']; ?>
" enctype="multipart/form-data">
		<table border="1">
			<tr>
				<td colspan="2">修改公告</td>
			</tr>
			<tr>
				<td valign="top">公告分類</td>
				<td align="left">
					<select name="tag[]" size="3" multiple>
					<?php $_from = $this->_tpl_vars['tag']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
						<?php if (( $this->_tpl_vars['topic']['tag'] % $this->_tpl_vars['item']['tag_no'] == 0 )): ?>
							<option selected value="<?php echo $this->_tpl_vars['item']['tag_no']; ?>
"><?php echo $this->_tpl_vars['item']['title']; ?>
</option>
						<?php else: ?>
							<option value="<?php echo $this->_tpl_vars['item']['tag_no']; ?>
"><?php echo $this->_tpl_vars['item']['title']; ?>
</option>
						<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>置頂與否</td>
				<?php if (( $this->_tpl_vars['topic']['top'] == 1 )): ?>
					<td align="left"><input type="radio" name="top" value="1" checked>是<input type="radio" name="top" value"0">否</td>
				<?php else: ?>
					<td align="left"><input type="radio" name="top" value="1">是<input type="radio" name="top" value"0" checked>否</td>
				<?php endif; ?>
			<tr>
				<td>公告主題</td>
				<td align="left"><input type="title" name="title" size="50" value="<?php echo $this->_tpl_vars['topic']['title']; ?>
"></td>
			</tr>
			<tr>
				<td valign="top">公告內容</td>
				<td><textarea name="content" cols="60" rows="20"><?php echo $this->_tpl_vars['topic']['content']; ?>
</textarea></td>
			</tr>
			<tr>
				<td>相關連結</td>
				<td align="left"><input type="title" name="link" size="70" value="<?php echo $this->_tpl_vars['topic']['link']; ?>
"></td>
			</tr>
			<tr>
				<td>是否直接連結</td>
				<?php if (( $this->_tpl_vars['topic']['go_link'] == 1 )): ?>
					<td align="left"><input type="radio" name="go_link" value="1" checked>是<input type="radio" name="go_link" value"0">否</td>
				<?php else: ?>
					<td align="left"><input type="radio" name="go_link" value="1">是<input type="radio" name="go_link" value"0" checked>否</td>
				<?php endif; ?>
			</tr>
			<?php if (( $this->_tpl_vars['topic']['file'] != null )): ?>
				<tr>
					<td>附加檔案</td>
					<td>
						<?php $_from = $this->_tpl_vars['file']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
							<a href="res/<?php echo $this->_tpl_vars['topic']['topic_no']; ?>
/<?php echo $this->_tpl_vars['item']['file_file']; ?>
" title="<?php echo $this->_tpl_vars['item']['file_file']; ?>
">[<?php echo $this->_tpl_vars['item']['file_name']; ?>
]</a>&nbsp;<a href="file.php?topic_no=<?php echo $this->_tpl_vars['topic']['topic_no']; ?>
&fno=<?php echo $this->_tpl_vars['item']['fno']; ?>
&action=delete">delete</a>&nbsp;&nbsp;
						<?php endforeach; endif; unset($_from); ?>
					</td>
				</tr>
			<?php endif; ?>
			<tr>
				<td colspan="2" align="center">
					<input type="button" onclick="javascript: location.href = 'file.php?topic_no=<?php echo $this->_tpl_vars['topic']['topic_no']; ?>
&action=file';" value="夾帶檔案" />
					<input type="submit" value="送出" />
					<input type="reset" value="重填" />
					<input type="button" onclick="javascript: location.href = 'index.php';" value="放棄修改" />
				</td>
			</tr>
		</table>
	</form>
</div>