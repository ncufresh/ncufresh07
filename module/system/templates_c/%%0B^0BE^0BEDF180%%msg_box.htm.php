<?php /* Smarty version 2.6.18, created on 2007-08-10 22:16:25
         compiled from msg_box.htm */ ?>
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
  <table border="0" cellpadding="5" cellspacing="0" style="border-collapse: collapse" align="center" width="100%">
    <tr>
      <td><a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/msgsend.php" title="傳送訊息"><img src="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/templates/images/icon_send.gif" border="0" alt="傳送訊息" />
<font color="#996600">傳送訊息</font></a></td>
      <td colspan="2" align="right">共有 <?php echo $this->_tpl_vars['num']; ?>
 封</td>
    </tr>
<?php unset($this->_sections['sec1']);
$this->_sections['sec1']['name'] = 'sec1';
$this->_sections['sec1']['loop'] = is_array($_loop=$this->_tpl_vars['title']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['sec1']['show'] = true;
$this->_sections['sec1']['max'] = $this->_sections['sec1']['loop'];
$this->_sections['sec1']['step'] = 1;
$this->_sections['sec1']['start'] = $this->_sections['sec1']['step'] > 0 ? 0 : $this->_sections['sec1']['loop']-1;
if ($this->_sections['sec1']['show']) {
    $this->_sections['sec1']['total'] = $this->_sections['sec1']['loop'];
    if ($this->_sections['sec1']['total'] == 0)
        $this->_sections['sec1']['show'] = false;
} else
    $this->_sections['sec1']['total'] = 0;
if ($this->_sections['sec1']['show']):

            for ($this->_sections['sec1']['index'] = $this->_sections['sec1']['start'], $this->_sections['sec1']['iteration'] = 1;
                 $this->_sections['sec1']['iteration'] <= $this->_sections['sec1']['total'];
                 $this->_sections['sec1']['index'] += $this->_sections['sec1']['step'], $this->_sections['sec1']['iteration']++):
$this->_sections['sec1']['rownum'] = $this->_sections['sec1']['iteration'];
$this->_sections['sec1']['index_prev'] = $this->_sections['sec1']['index'] - $this->_sections['sec1']['step'];
$this->_sections['sec1']['index_next'] = $this->_sections['sec1']['index'] + $this->_sections['sec1']['step'];
$this->_sections['sec1']['first']      = ($this->_sections['sec1']['iteration'] == 1);
$this->_sections['sec1']['last']       = ($this->_sections['sec1']['iteration'] == $this->_sections['sec1']['total']);
?>
    <tr>
      <td width="150"><a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/show_pfile.php?uno=<?php echo $this->_tpl_vars['sender_no'][$this->_sections['sec1']['index']]; ?>
" title="使用者資料"><?php echo $this->_tpl_vars['sender_id'][$this->_sections['sec1']['index']]; ?>
</a></td>
      <td width="250"><a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/msgbox_do.php?msgread=1&mno=<?php echo $this->_tpl_vars['mno'][$this->_sections['sec1']['index']]; ?>
" title="閱讀訊息"><?php if (( $this->_tpl_vars['status'][$this->_sections['sec1']['index']] == 2 )): ?><b><?php echo $this->_tpl_vars['title'][$this->_sections['sec1']['index']]; ?>
</b><?php else: ?><?php echo $this->_tpl_vars['title'][$this->_sections['sec1']['index']]; ?>
<?php endif; ?></a></td>
      <td align="right"><?php echo $this->_tpl_vars['time'][$this->_sections['sec1']['index']]; ?>
</td>
    </tr>
<?php endfor; endif; ?>
    <tr>
      <td colspan="3" align="right">頁數&nbsp;&nbsp;<?php $_from = $this->_tpl_vars['p']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pag']):
?><?php echo $this->_tpl_vars['pag']; ?>
&nbsp;&nbsp;<?php endforeach; endif; unset($_from); ?></td>
    </tr>
  </table>
</div>
<p class="field_bottom"></p>