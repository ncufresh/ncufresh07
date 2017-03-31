<?php /* Smarty version 2.6.18, created on 2007-07-24 03:02:21
         compiled from topic_newpost_form.htm */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "topic_header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="field2_top"><?php echo $this->_tpl_vars['_WikiTopic']->title; ?>
 - 編修主題</div>
<div class="field2_content">
  <form action="" method="post">
    <table border="0" cellpadding="5" cellspacing="0" style="border-collapse: collaspe;" align="center">
      <tr>
        <th>編修主題</th>
      </tr>
      <tr>
        <td>
<?php $this->assign('tid', 'contents'); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "toolbar.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
          <textarea id="contents" name="content" rows="15" cols="60"><?php echo $this->_tpl_vars['_WikiPost']->content; ?>
</textarea>
        </td>
      </tr>
      <tr>
        <td align="center"><input type="hidden" name="newpost" value="1" /><input type="hidden" name="pno" value="<?php echo $this->_tpl_vars['_WikiPost']->pno; ?>
" /><input type="submit" value="更新內容" />&nbsp;&nbsp;<input type="reset" value="重新填寫" /></td>
      </tr>
    </table>
  </form>
</div>
<p class="field2_bottom"></p>