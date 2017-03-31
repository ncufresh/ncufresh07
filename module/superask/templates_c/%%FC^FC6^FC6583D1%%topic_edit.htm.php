<?php /* Smarty version 2.6.18, created on 2007-08-08 12:56:39
         compiled from admin/topic_edit.htm */ ?>
<p class="field2_top">編輯主題</p>
<div class="field2_content">
  <form method="post" action="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/admin/topic_manage.php">
    <table border="0" cellpadding="5" cellspacing="0" style="border-collapse: collapse;" align="center" width="100%">
      <tr>
        <td>主題名稱</td>
        <td><input type="text" name="title" value="<?php echo $this->_tpl_vars['_WikiTopic']->title; ?>
" size="30" /></td>
      </tr>
      <tr>
        <td>類別</td>
        <td><select name="cno" size="1">
<?php $_from = $this->_tpl_vars['category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['parent']):
?>
          <option value="<?php echo $this->_tpl_vars['parent']['cno']; ?>
"<?php if (( $this->_tpl_vars['_WikiTopic']->cno == $this->_tpl_vars['parent']['cno'] )): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['parent']['name']; ?>
</option>
<?php $_from = $this->_tpl_vars['parent']['child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['child']):
?>
          <option value="<?php echo $this->_tpl_vars['child']['cno']; ?>
"<?php if (( $this->_tpl_vars['_WikiTopic']->cno == $this->_tpl_vars['child']['cno'] )): ?> selected<?php endif; ?>>&nbsp;&nbsp;<?php echo $this->_tpl_vars['child']['name']; ?>
</option>
<?php endforeach; endif; unset($_from); ?>
<?php endforeach; endif; unset($_from); ?>
        </select></td>
      </tr>
      <tr>
        <td>鎖定</td>
        <td><input type="checkbox" name="locks[]" value="1" <?php if (( binary_and ( $this->_tpl_vars['_WikiTopic']->locks , 1 ) )): ?>checked <?php endif; ?>/>鎖定資訊&nbsp;&nbsp;<input type="checkbox" name="locks[]" value="2" <?php if (( binary_and ( $this->_tpl_vars['_WikiTopic']->locks , 2 ) )): ?>checked <?php endif; ?>/>鎖定評論&nbsp;&nbsp;<input type="checkbox" name="locks[]" value="4" <?php if (( binary_and ( $this->_tpl_vars['_WikiTopic']->locks , 4 ) )): ?>checked <?php endif; ?>/>鎖定問答</td>
      </tr>
      <tr>
        <td>鎖定原因</td>
        <td><input type="text" name="whylock" value="<?php echo $this->_tpl_vars['_WikiTopic']->whylock; ?>
" size="50" /></td>
      </tr>
      <tr>
        <td>管理者</td>
        <td><input type="text" name="manager" value="<?php echo $this->_tpl_vars['_WikiTopic']->manager; ?>
" size="30" /></td>
      </tr>
      <tr>
        <td>瀏覽次數</td>
        <td><input type="text" name="numread" value="<?php echo $this->_tpl_vars['_WikiTopic']->numread; ?>
" size="10" /></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input type="hidden" name="edit" value="1" /><input type="hidden" name="tno" value="<?php echo $this->_tpl_vars['_WikiTopic']->tno; ?>
" /><input type="submit" value="修改" />&nbsp;&nbsp;<input type="reset" value="重填" />&nbsp;&nbsp;<input type="button" value="回上一頁" onclick="javascript: history.go(-1);" /></td>
      </tr>
    </table>
  </form>
</div>
<p class="field2_bottom"></p>