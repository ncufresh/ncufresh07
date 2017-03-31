<?php /* Smarty version 2.6.18, created on 2007-08-03 21:45:59
         compiled from admin/topiclist.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'urlencode', 'admin/topiclist.htm', 16, false),)), $this); ?>
<p class="field2_top">主題列表</p>
<div class="field2_content">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/topicsearchform.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <table border="0" cellpadding="5" cellspacing="0" style="border-collapse: collapse;" align="center" width="100%">
    <tr>
      <th><a href="<?php echo $this->_tpl_vars['currconfig']->phpself; ?>
?column=<?php echo $this->_tpl_vars['column']; ?>
&key=<?php echo $this->_tpl_vars['key']; ?>
&order=title" title="照主題排序">主題</a> (<a href="?column=<?php echo $this->_tpl_vars['column']; ?>
&key=<?php echo $this->_tpl_vars['key']; ?>
&order=sum" title="照篇數排序">篇數</a>)</th>
      <th align="left" width="30"><a href="<?php echo $this->_tpl_vars['currconfig']->phpself; ?>
?column=<?php echo $this->_tpl_vars['column']; ?>
&key=<?php echo $this->_tpl_vars['key']; ?>
&order=locks" title="照鎖定排序">鎖定</a></th>
      <th align="left" width="120"><a href="<?php echo $this->_tpl_vars['currconfig']->phpself; ?>
?column=<?php echo $this->_tpl_vars['column']; ?>
&key=<?php echo $this->_tpl_vars['key']; ?>
&order=cno" title="照類別排序">類別</a></th>
      <th align="left">版主</th>
<?php if (( $this->_tpl_vars['currmodule']->isadmin($this->_tpl_vars['curruser']) )): ?>
      <th align="right" width="60">修改資料</th>
<?php endif; ?>
    </tr>
<?php $_from = $this->_tpl_vars['topics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['topic']):
?>
    <tr>
      <td><a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/?<?php echo ((is_array($_tmp=$this->_tpl_vars['topic']['title'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
" title="<?php echo $this->_tpl_vars['topic']['title']; ?>
"><?php echo $this->_tpl_vars['topic']['title']; ?>
</a> (<a href="<?php echo $this->_tpl_vars['currconfig']->phpself; ?>
?resave=1&tno=<?php echo $this->_tpl_vars['topic']['tno']; ?>
" title="刪除先前資料"><?php echo $this->_tpl_vars['topic']['sum']; ?>
</a>)</td>
      <td><?php if (( $this->_tpl_vars['topic']['locks'] == 0 )): ?>開放<?php else: ?>鎖定<?php endif; ?></td>
      <td><?php echo $this->_tpl_vars['topic']['cat']; ?>
</td>
      <td><?php echo $this->_tpl_vars['topic']['manager']; ?>
</td>
<?php if (( $this->_tpl_vars['currmodule']->isadmin($this->_tpl_vars['curruser']) )): ?>
      <td align="right"><a href="<?php echo $this->_tpl_vars['currconfig']->phpself; ?>
?edit=1&tno=<?php echo $this->_tpl_vars['topic']['tno']; ?>
" title="修改資料">修改資料</a></td>
<?php endif; ?>
    </tr>
<?php endforeach; endif; unset($_from); ?>
  </table>
</div>
<p class="field2_bottom"></p>