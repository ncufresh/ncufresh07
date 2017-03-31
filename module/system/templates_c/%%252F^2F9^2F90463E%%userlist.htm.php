<?php /* Smarty version 2.6.18, created on 2007-08-17 02:39:02
         compiled from userlist.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlencode', 'userlist.htm', 25, false),)), $this); ?>
<style type="text/css">
#userlist table th a
{
	color: #000000;
	letter-spacing: 1pt;
	text-decoration: underline;
}
</style>
<p class="field_top">使用者列表</p>
<div class="field_content">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "usersearchform.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <table border="0" cellpadding="5" cellspacing="0" style="border-collapse: collapse;" align="center" width="100%">
    <tr>
      <th><a href="<?php echo $this->_tpl_vars['currconfig']->phpself; ?>
?column=<?php echo $this->_tpl_vars['column']; ?>
&key=<?php echo $this->_tpl_vars['key']; ?>
&order=uid" title="帳號排序">帳號</a> ( <a href="<?php echo $this->_tpl_vars['currconfig']->phpself; ?>
?column=<?php echo $this->_tpl_vars['column']; ?>
&key=<?php echo $this->_tpl_vars['key']; ?>
&order=name" title="照暱稱排序">暱稱</a> ) </th>
      <th align="left"><a href="<?php echo $this->_tpl_vars['currconfig']->phpself; ?>
?column=<?php echo $this->_tpl_vars['column']; ?>
&key=<?php echo $this->_tpl_vars['key']; ?>
&order=sex" title="照性別排序">性別</a></th>
      <th align="left"><a href="<?php echo $this->_tpl_vars['currconfig']->phpself; ?>
?column=<?php echo $this->_tpl_vars['column']; ?>
&key=<?php echo $this->_tpl_vars['key']; ?>
&order=sid" title="照 SPARC 排序">SPARC</a></th>
<?php if (( $this->_tpl_vars['curruser']->haveperm($this->_tpl_vars['curruser']->p_handler->getpermadmin()) )): ?>
      <th align="right">修改資料</th>
<?php endif; ?>
    </tr>
<?php $_from = $this->_tpl_vars['users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['user']):
?>
    <tr>
      <td><?php echo $this->_tpl_vars['user']['uid']; ?>
 (<?php echo $this->_tpl_vars['user']['name']; ?>
)</td>
      <td><?php echo $this->_tpl_vars['user']['sex']; ?>
</td>
      <td><?php echo ((is_array($_tmp=$this->_tpl_vars['user']['sid'])) ? $this->_run_mod_handler('htmlencode', true, $_tmp) : htmlencode($_tmp)); ?>
</td>
<?php if (( $this->_tpl_vars['curruser']->haveperm($this->_tpl_vars['curruser']->p_handler->getpermadmin()) )): ?>
      <td align="right"><a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/edit_pfile.php?uno=<?php echo $this->_tpl_vars['user']['uno']; ?>
" title="修改資料">修改資料</a></td>
<?php endif; ?>
    </tr>
<?php endforeach; endif; unset($_from); ?>
  </table>
</div>
<p class="field_bottom"></p>