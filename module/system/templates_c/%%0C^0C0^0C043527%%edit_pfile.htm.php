<?php /* Smarty version 2.6.18, created on 2007-08-05 23:43:32
         compiled from edit_pfile.htm */ ?>
<p class="field_top">修改個人資料</p>
<div class="field_content">
<?php if (( $this->_tpl_vars['curruser']->uno == $this->_tpl_vars['user']->uno )): ?>
  <div style="margin-bottom: 10px; text-align: right;">
<?php if (( ! $this->_tpl_vars['curruser']->haveperm($this->_tpl_vars['curruser']->p_handler->getpermvalid()) && ! $this->_tpl_vars['curruser']->haveperm($this->_tpl_vars['curruser']->p_handler->getpermdeny()) )): ?>
    <a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/sparc.php" title="SPARC 確認">SPARC 確認</a>&nbsp;&nbsp;
<?php endif; ?>
    <a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/passwd.php" title="修改密碼">修改密碼</a>&nbsp;&nbsp;
  </div>
<?php endif; ?>

  <form method="post" action="" onSubmit="
	if (!this.name.value) {alert('請輸入姓名'); this.name.focus(); return false;}
">
    <table border="0" cellpadding="5" cellspacing="0" style="border-collapse: collapse" align="center" width="500">
      <tr>
        <td width="25%" class="label">帳號</td>
        <td width="75%"><?php echo $this->_tpl_vars['user']->uid; ?>
</td>
      </tr>
      <tr>
        <td width="25%" class="label">姓名</td>
        <td width="75%"><?php if (( $this->_tpl_vars['curruser']->haveperm($this->_tpl_vars['curruser']->p_handler->getpermadmin()) )): ?><input type="text" name="realname" value="<?php echo $this->_tpl_vars['user']->realname; ?>
" size="10" /><?php else: ?><?php echo $this->_tpl_vars['user']->realname; ?>
<?php endif; ?></td>
      </tr>
      <tr>
        <td width="25%" class="label"><font color="#FF0000">*</font>&nbsp;暱稱</td>
        <td width="75%"><input type="text" name="name" value="<?php echo $this->_tpl_vars['user']->name; ?>
" size="20" /></div></td>
      </tr>
      <tr>
        <td width="25%" class="label">性別</td>
        <td width="75%"><?php if (( $this->_tpl_vars['curruser']->haveperm($this->_tpl_vars['curruser']->p_handler->getpermadmin()) )): ?><input type="radio" name="sex" value="boy" <?php if (( $this->_tpl_vars['user']->sex == "男" )): ?>checked <?php endif; ?>/>男&nbsp;&nbsp;<input type="radio" name="sex" value="girl" <?php if (( $this->_tpl_vars['user']->sex != "男" )): ?>checked <?php endif; ?>/>女<?php else: ?><?php echo $this->_tpl_vars['user']->sex; ?>
<?php endif; ?></td>
      </tr>
      <tr>
        <td width="25%" class="label"><font color="#FF0000">*</font>&nbsp;學號</td>
        <td width="75%"><?php if (( $this->_tpl_vars['curruser']->haveperm($this->_tpl_vars['curruser']->p_handler->getpermadmin()) )): ?><input type="text" name="sid" value="<?php echo $this->_tpl_vars['user']->sid; ?>
" size="10" /><?php else: ?><?php echo $this->_tpl_vars['user']->sid; ?>
<?php endif; ?></td>
      </tr>
      <tr>
        <td width="25%" class="label">首頁</td>
        <td width="75%"><input type="text" name="website" value="<?php echo $this->_tpl_vars['user']->website; ?>
" size="40" /></td>
      </tr>
      <tr>
        <td width="25%" class="label">電子信箱</td>
        <td width="75%"><input type="text" name="email" value="<?php echo $this->_tpl_vars['user']->email; ?>
" size="40" /></td>
      </tr>
      <tr>
        <td width="25%" class="label">自我介紹</td>
        <td width="75%"><textarea name="intro" rows="10" cols="40"><?php echo $this->_tpl_vars['user']->intro; ?>
</textarea></td>
      </tr>
<?php if (( $this->_tpl_vars['curruser']->haveperm($this->_tpl_vars['curruser']->p_handler->getpermadmin()) )): ?>
      <tr>
        <td width="25%" class="label">使用者權限</td>
        <td width="75%">
<?php $_from = $this->_tpl_vars['user']->p_handler->permlist; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['perm']):
?>
          <input type="checkbox" name="perm[]" value="<?php echo $this->_tpl_vars['perm']['perm_id']; ?>
"<?php if (( binary_and ( $this->_tpl_vars['perm']['perm_id'] , $this->_tpl_vars['user']->perm ) )): ?> checked<?php endif; ?> /> <?php echo $this->_tpl_vars['perm']['perm_desc']; ?>
&nbsp;
<?php endforeach; endif; unset($_from); ?>
        </td>
      </tr>
<?php endif; ?>
      <tr>
        <td colspan="2" align="center"><input type="hidden" name="edit_pfile" value="1" /><input type="hidden" name="uno" value="<?php echo $this->_tpl_vars['user']->uno; ?>
" /><input type="submit" value="送出" />&nbsp;&nbsp;<input type="reset" value="取消" /></td>
      </tr>
    </table>
  </form>
</div>  
<p class="field_bottom"></p>