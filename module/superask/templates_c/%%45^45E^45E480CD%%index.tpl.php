<?php /* Smarty version 2.6.18, created on 2007-08-08 10:09:01
         compiled from index.tpl */ ?>
<body>
	<form>
		<table border="1" bordercolor="bbccdd" width="400">
			<?php unset($this->_sections['post']);
$this->_sections['post']['name'] = 'post';
$this->_sections['post']['loop'] = is_array($_loop=$this->_tpl_vars['post']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['post']['show'] = true;
$this->_sections['post']['max'] = $this->_sections['post']['loop'];
$this->_sections['post']['step'] = 1;
$this->_sections['post']['start'] = $this->_sections['post']['step'] > 0 ? 0 : $this->_sections['post']['loop']-1;
if ($this->_sections['post']['show']) {
    $this->_sections['post']['total'] = $this->_sections['post']['loop'];
    if ($this->_sections['post']['total'] == 0)
        $this->_sections['post']['show'] = false;
} else
    $this->_sections['post']['total'] = 0;
if ($this->_sections['post']['show']):

            for ($this->_sections['post']['index'] = $this->_sections['post']['start'], $this->_sections['post']['iteration'] = 1;
                 $this->_sections['post']['iteration'] <= $this->_sections['post']['total'];
                 $this->_sections['post']['index'] += $this->_sections['post']['step'], $this->_sections['post']['iteration']++):
$this->_sections['post']['rownum'] = $this->_sections['post']['iteration'];
$this->_sections['post']['index_prev'] = $this->_sections['post']['index'] - $this->_sections['post']['step'];
$this->_sections['post']['index_next'] = $this->_sections['post']['index'] + $this->_sections['post']['step'];
$this->_sections['post']['first']      = ($this->_sections['post']['iteration'] == 1);
$this->_sections['post']['last']       = ($this->_sections['post']['iteration'] == $this->_sections['post']['total']);
?>
				<tr><td width="30%"><a target="_blank" href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/view.php?pno=<?php echo $this->_tpl_vars['post'][$this->_sections['post']['index']]['pno']; ?>
"><?php echo $this->_tpl_vars['post'][$this->_sections['post']['index']]['title']; ?>
</a></td><td width="30%"><?php echo $this->_tpl_vars['post'][$this->_sections['post']['index']]['poster_id']; ?>
</td><td width="30%"><?php echo $this->_tpl_vars['post'][$this->_sections['post']['index']]['impeach_id']; ?>
</td><td width="10%"><a href="de_impeach.php?tno=<?php echo $this->_tpl_vars['post'][$this->_sections['post']['index']]['tno']; ?>
">取消</a></td></tr>
			<?php endfor; endif; ?>
		</table>
	</form>
</body>