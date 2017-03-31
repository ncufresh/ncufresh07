<?php /* Smarty version 2.6.18, created on 2007-08-05 20:16:25
         compiled from topic_chkorv_form.htm */ ?>
<p class="field2_top"><?php echo $this->_tpl_vars['_WikiTopic']->title; ?>
 - 編修主題</p>
<div class="field2_content">
  <form action="" method="post">
    <table border="0" cellpadding="5" cellspacing="0" style="border-collapse: collapse;" align="center">
      <tr>
        <td colspan="2" align="center"><?php echo $this->_tpl_vars['title']; ?>
</td>
      </tr>
      <tr>
        <td colspan="2" align="center">您所修改的文章已經過期，可能在修改文章時已經有了新版本。是否要存檔？<div style="display: none;"><textarea name="content" rows="15" cols="60"><?php echo $this->_tpl_vars['content']; ?>
</textarea></div></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input type="hidden" name="newpost" value="1" /><input type="hidden" name="chkorv" value="1" /><input type="hidden" name="pno" value="<?php echo $this->_tpl_vars['_WikiPost']->pno; ?>
" /><input type="submit" value="更新內容" />&nbsp;&nbsp;<input type="button" value="重新填寫" onclick="javascript: window.back();" /></td>
      </tr>
    </table>
  </form>
</div>
<p class="field2_bottom"></p>