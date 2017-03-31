<?php /* Smarty version 2.6.18, created on 2007-08-14 20:49:37
         compiled from index.tpl */ ?>
  <div class="top"></div>
  <div class="middle">
    <div class="title"></div>
	<div class="left">
	  <div class="user">
<?php if ($this->_tpl_vars['sex'] == '男'): ?>
	<?php if ($this->_tpl_vars['level'] == 1): ?>
		<div id="man_pic0"></div>
	<?php elseif ($this->_tpl_vars['level'] == 2): ?>
		<div id="man_pic1"></div>
	<?php elseif ($this->_tpl_vars['level'] == 3): ?>
		<div id="man_pic2"></div>
	<?php elseif ($this->_tpl_vars['level'] == 4): ?>
		<div id="man_pic3"></div>
	<?php elseif ($this->_tpl_vars['level'] == 5): ?>
		<div id="man_pic4"></div>
	<?php elseif ($this->_tpl_vars['level'] == 6): ?>
		<div id="man_pic5"></div>		
	<?php endif; ?>
	<?php if ($this->_tpl_vars['secondary'] >= 1): ?>
		  <div id="man_pic_1"></div>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['secondary'] >= 2): ?>
		  <div id="man_pic_2"></div>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['secondary'] >= 3): ?>
		  <div id="man_pic_3"></div>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['secondary'] >= 4): ?>
		  <div id="man_pic_4"></div>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['secondary'] >= 5): ?>
		  <div id="man_pic_5"></div>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['secondary'] >= 6): ?>
		  <div id="man_pic_6"></div>
	<?php endif; ?>
<?php else: ?>
	<?php if ($this->_tpl_vars['level'] == 1): ?>
		<div id="woman_pic0"></div>
	<?php elseif ($this->_tpl_vars['level'] == 2): ?>
		<div id="woman_pic1"></div>
	<?php elseif ($this->_tpl_vars['level'] == 3): ?>
		<div id="woman_pic2"></div>
	<?php elseif ($this->_tpl_vars['level'] == 4): ?>
		<div id="woman_pic3"></div>
	<?php elseif ($this->_tpl_vars['level'] == 5): ?>
		<div id="woman_pic4"></div>
	<?php elseif ($this->_tpl_vars['level'] == 6): ?>
		<div id="woman_pic5"></div>		
	<?php endif; ?>
	<?php if ($this->_tpl_vars['secondary'] >= 1): ?>
		  <div id="woman_pic_1"></div>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['secondary'] >= 2): ?>
		  <div id="woman_pic_2"></div>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['secondary'] >= 3): ?>
		  <div id="woman_pic_3"></div>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['secondary'] >= 4): ?>
		  <div id="woman_pic_4"></div>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['secondary'] >= 5): ?>
		  <div id="woman_pic_5"></div>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['secondary'] >= 6): ?>
		  <div id="woman_pic_6"></div>
	<?php endif; ?>
<?php endif; ?>
		<table id="user_table">
		  <tr><td width="50%">冒險者</td><td><?php echo $this->_tpl_vars['name']; ?>
</td></tr>
		  <tr><td width="50%">等級</td><td>中大的<?php echo $this->_tpl_vars['title']; ?>
</td></tr>
		  <tr><td width="50%">已完成主要任務</td><td><?php echo $this->_tpl_vars['level']-1; ?>
</td></tr>
		  <tr><td width="50%">待完成主要任務</td><td><?php echo $this->_tpl_vars['left']; ?>
</td></tr>
		  <tr><td width="50%">已完成次要任務</td><td><?php echo $this->_tpl_vars['secondary']; ?>
</td></tr>
	    </table>
		</div>
	</div>
	<div class="right">
	  <table id="schedule">
<?php unset($this->_sections['schedule']);
$this->_sections['schedule']['name'] = 'schedule';
$this->_sections['schedule']['loop'] = is_array($_loop=$this->_tpl_vars['schedule']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['schedule']['show'] = true;
$this->_sections['schedule']['max'] = $this->_sections['schedule']['loop'];
$this->_sections['schedule']['step'] = 1;
$this->_sections['schedule']['start'] = $this->_sections['schedule']['step'] > 0 ? 0 : $this->_sections['schedule']['loop']-1;
if ($this->_sections['schedule']['show']) {
    $this->_sections['schedule']['total'] = $this->_sections['schedule']['loop'];
    if ($this->_sections['schedule']['total'] == 0)
        $this->_sections['schedule']['show'] = false;
} else
    $this->_sections['schedule']['total'] = 0;
if ($this->_sections['schedule']['show']):

            for ($this->_sections['schedule']['index'] = $this->_sections['schedule']['start'], $this->_sections['schedule']['iteration'] = 1;
                 $this->_sections['schedule']['iteration'] <= $this->_sections['schedule']['total'];
                 $this->_sections['schedule']['index'] += $this->_sections['schedule']['step'], $this->_sections['schedule']['iteration']++):
$this->_sections['schedule']['rownum'] = $this->_sections['schedule']['iteration'];
$this->_sections['schedule']['index_prev'] = $this->_sections['schedule']['index'] - $this->_sections['schedule']['step'];
$this->_sections['schedule']['index_next'] = $this->_sections['schedule']['index'] + $this->_sections['schedule']['step'];
$this->_sections['schedule']['first']      = ($this->_sections['schedule']['iteration'] == 1);
$this->_sections['schedule']['last']       = ($this->_sections['schedule']['iteration'] == $this->_sections['schedule']['total']);
?>
        <tr>
		  <td width="10%">
<?php if ($this->_tpl_vars['schedule'][$this->_sections['schedule']['index']]['state'] != 0): ?>
	<?php if ($this->_tpl_vars['flag'][$this->_sections['schedule']['iteration']] == 0): ?>
		    <img src="templates/images/wait.gif" />
	<?php else: ?>
			<img src="templates/images/done.gif" />
	<?php endif; ?>
<?php endif; ?>
          </td>
		  <td width="30%">
		    <img src="<?php echo $this->_tpl_vars['schedule'][$this->_sections['schedule']['index']]['date']; ?>
" />
		  </td>
		  <td id="schedule_title" width="60%" onclick="location.href='mission_detail.php?mno=<?php echo $this->_tpl_vars['schedule'][$this->_sections['schedule']['index']]['mno']; ?>
&com=<?php echo $this->_tpl_vars['flag'][$this->_sections['schedule']['iteration']]; ?>
'">
<?php if ($this->_tpl_vars['schedule'][$this->_sections['schedule']['index']]['priority'] == 1 && $this->_tpl_vars['schedule'][$this->_sections['schedule']['index']]['state'] == 1 && $this->_tpl_vars['flag'][$this->_sections['schedule']['iteration']] == 0): ?>
		    <font color="#009900">
<?php elseif ($this->_tpl_vars['flag'][$this->_sections['schedule']['iteration']] == 1): ?>
		    <font color="#CC6699">
<?php elseif ($this->_tpl_vars['schedule'][$this->_sections['schedule']['index']]['state'] == 0 || $this->_tpl_vars['schedule'][$this->_sections['schedule']['index']]['state'] == 2): ?>
		    <font color="#999999">
<?php elseif ($this->_tpl_vars['schedule'][$this->_sections['schedule']['index']]['priority'] == 2 && $this->_tpl_vars['schedule'][$this->_sections['schedule']['index']]['state'] == 1 && $this->_tpl_vars['flag'][$this->_sections['schedule']['iteration']] == 0): ?>
		    <font color="#33CC66">
<?php endif; ?>
		    <?php echo $this->_tpl_vars['schedule'][$this->_sections['schedule']['index']]['title']; ?>
</font>
		  </td>
		</tr>
<?php endfor; endif; ?>
	  </table>
	</div>
	<div class="ps">
	<table align="center">
      <tr>
        <td>
		  <img src="templates/images/done.gif" />表任務已完成，<img src="templates/images/wait.gif" />表任務已開始但未完成，
          <font color="#999999">灰色表任務未開始或已結束</font>，<br /><font color="#CC6699">暗紅色表任務已完成</font>，<font color="#009900">深綠色表已開始的主要任務</font>，<font color="#33CC66">淺綠色表已開始的次要任務</font>
        </td>
      </tr>
    </table>
	</div>
  </div>
  <div class="bottom"></div>