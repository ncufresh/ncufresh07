<?php /* Smarty version 2.6.18, created on 2007-08-02 23:46:41
         compiled from read_contact.htm */ ?>
<p class="field_top">聯絡我們</p>
<div class="field_content">
  <table border="0" cellpadding="3" cellspacing="0" style="border-collapse: collapse" align="center" width="500">
    <tr>
      <th colspan="2" style="font-size:18px; "><?php echo $this->_tpl_vars['title']; ?>
</th>
    </tr>
    <tr>
      <td>姓名：<a href="<?php echo $this->_tpl_vars['email']; ?>
" title="回覆"><?php echo $this->_tpl_vars['sender']; ?>
</a></td>
      <td align="right">ip:<?php echo $this->_tpl_vars['ip']; ?>
</td>
    </tr>
    <tr>
      <td colspan="2"><?php echo $this->_tpl_vars['content']; ?>
</td>
    </tr>
    <tr>
      <td align="left"><a href="javascript: window.back();" title="上一頁">回到上頁</a>&nbsp;&nbsp;
<a href="<?php echo $this->_tpl_vars['currconfig']->phpself; ?>
?del_contact=1&mno=<?php echo $this->_tpl_vars['mno']; ?>
" title="刪除留言">刪除</a></td>
      <td colspan="2" align="right">時間:<?php echo $this->_tpl_vars['time']; ?>
</td>
    </tr>
  </table>
</div>
<p class="field_bottom"></p>