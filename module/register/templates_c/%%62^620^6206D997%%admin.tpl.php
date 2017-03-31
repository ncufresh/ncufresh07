<?php /* Smarty version 2.6.18, created on 2007-08-07 11:32:16
         compiled from admin.tpl */ ?>
<center>
  <table border="2" bordercolor="#f5f5f5">
    <tr><th bgcolor="#00cc99" colspan="6">營服統計表</th></tr>
    <tr><td>類別</td><td>總人數</td><td>S總人數</td><td>M總人數</td><td>L總人數</td><td>XL總人數</td></tr>
<?php unset($this->_sections['total']);
$this->_sections['total']['name'] = 'total';
$this->_sections['total']['loop'] = is_array($_loop=$this->_tpl_vars['total']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['total']['show'] = true;
$this->_sections['total']['max'] = $this->_sections['total']['loop'];
$this->_sections['total']['step'] = 1;
$this->_sections['total']['start'] = $this->_sections['total']['step'] > 0 ? 0 : $this->_sections['total']['loop']-1;
if ($this->_sections['total']['show']) {
    $this->_sections['total']['total'] = $this->_sections['total']['loop'];
    if ($this->_sections['total']['total'] == 0)
        $this->_sections['total']['show'] = false;
} else
    $this->_sections['total']['total'] = 0;
if ($this->_sections['total']['show']):

            for ($this->_sections['total']['index'] = $this->_sections['total']['start'], $this->_sections['total']['iteration'] = 1;
                 $this->_sections['total']['iteration'] <= $this->_sections['total']['total'];
                 $this->_sections['total']['index'] += $this->_sections['total']['step'], $this->_sections['total']['iteration']++):
$this->_sections['total']['rownum'] = $this->_sections['total']['iteration'];
$this->_sections['total']['index_prev'] = $this->_sections['total']['index'] - $this->_sections['total']['step'];
$this->_sections['total']['index_next'] = $this->_sections['total']['index'] + $this->_sections['total']['step'];
$this->_sections['total']['first']      = ($this->_sections['total']['iteration'] == 1);
$this->_sections['total']['last']       = ($this->_sections['total']['iteration'] == $this->_sections['total']['total']);
?>
    <tr><td><?php echo $this->_tpl_vars['total'][$this->_sections['total']['index']]['type']; ?>
</td><td><?php echo $this->_tpl_vars['total'][$this->_sections['total']['index']]['amount']; ?>
</td><td><?php echo $this->_tpl_vars['total'][$this->_sections['total']['index']]['s_amount']; ?>
</td><td><?php echo $this->_tpl_vars['total'][$this->_sections['total']['index']]['m_amount']; ?>
</td><td><?php echo $this->_tpl_vars['total'][$this->_sections['total']['index']]['l_amount']; ?>
</td><td><?php echo $this->_tpl_vars['total'][$this->_sections['total']['index']]['xl_amount']; ?>
</td></tr>
<?php endfor; endif; ?>
  </table>
</center>