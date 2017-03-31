<?php /* Smarty version 2.6.18, created on 2007-08-10 22:25:30
         compiled from msg_read.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'urlencode', 'msg_read.htm', 22, false),)), $this); ?>
<style type="text/css">
.field_content a
{
	text-decoration: none;
}
</style>

<p class="field_top"><img src="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/templates/images/p_mailicon.jpg" alt="傳訊息" /></p>
<div class="field_content">
  <table border="0" cellpadding="3" cellspacing="0" style="border-collapse: collapse" align="center" width="500">
    <tr>
      <th colspan="2" style="font-size:18px;"><?php echo $this->_tpl_vars['title']; ?>
</th>
    </tr>
    <tr>
      <td>寄件者：<?php echo $this->_tpl_vars['sender_id']; ?>
</td>
      <td align="right"><?php echo $this->_tpl_vars['time']; ?>
</td>
    </tr>
    <tr>
      <td colspan="2"><?php echo $this->_tpl_vars['content']; ?>
</td>
    </tr>
    <tr>
      <td colspan="2" align="right"><a href="javascript: history.go(-1);" title="上一頁">回到上頁</a>&nbsp;&nbsp;<a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/msgsend.php?msgreply=1&title=Re:<?php echo ((is_array($_tmp=$this->_tpl_vars['title'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&fno=<?php echo $this->_tpl_vars['sender_no']; ?>
" title="回覆留言">回覆</a>&nbsp;&nbsp;<a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/msgbox_do.php?msgdel=1&mno=<?php echo $this->_tpl_vars['mno']; ?>
" title="刪除留言">刪除</a></td>
    </tr>
  </table>
</div>
<p class="field_bottom"></p>