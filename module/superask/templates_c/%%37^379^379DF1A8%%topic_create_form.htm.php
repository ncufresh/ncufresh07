<?php /* Smarty version 2.6.18, created on 2007-07-24 02:39:50
         compiled from topic_create_form.htm */ ?>
<p class="field2_top">成立新主題</p>
<div class="field2_content">
  <form action="" method="post">
    <table border="0" cellpadding="5" cellspacing="0" style="border-collapse: collapse;" align="center">
      <tr>
        <td>主題</td>
        <td><input type="text" name="title" value="<?php echo $this->_tpl_vars['title']; ?>
" size="60" /></td>
      </tr>
      <tr>
        <td>內容</td>
        <td>
<?php $this->assign('tid', 'contents'); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "toolbar.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
          <textarea id="contents" name="content" rows="15" cols="60"></textarea>
        </td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input type="hidden" name="create" value="1" /><input type="submit" value="建立主題" />&nbsp;&nbsp;<input type="reset" value="重新填寫" /></td>
      </tr>
    </table>
  </form>
</div>
<p class="field2_bottom"></p>