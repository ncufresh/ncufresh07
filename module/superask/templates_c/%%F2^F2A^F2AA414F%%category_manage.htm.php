<?php /* Smarty version 2.6.18, created on 2007-08-03 19:19:08
         compiled from admin/category_manage.htm */ ?>
<div style="margin-bottom: 20px; color: #FF0000; font-weight: bold; text-align: center"><?php echo $this->_tpl_vars['action_msg']; ?>
</div>
<p class="field2_top">
<?php if (( ! $this->_tpl_vars['setedit'] )): ?>新增<?php else: ?>編輯<?php endif; ?>類別</p>
<div class="field2_content">
  <form action="" method="post">
    <table border="0" cellpadding="5" cellspacing="0" style="border-collapse: collapse;" align="center">
<?php if (( ! $this->_tpl_vars['setedit'] )): ?>
      <tr>
        <td colspan="2">新增至
          <select name="goal" size="1">
            <option value="0" selected>根類別</option>
<?php unset($this->_sections['result']);
$this->_sections['result']['name'] = 'result';
$this->_sections['result']['loop'] = is_array($_loop=$this->_tpl_vars['cats']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['result']['show'] = true;
$this->_sections['result']['max'] = $this->_sections['result']['loop'];
$this->_sections['result']['step'] = 1;
$this->_sections['result']['start'] = $this->_sections['result']['step'] > 0 ? 0 : $this->_sections['result']['loop']-1;
if ($this->_sections['result']['show']) {
    $this->_sections['result']['total'] = $this->_sections['result']['loop'];
    if ($this->_sections['result']['total'] == 0)
        $this->_sections['result']['show'] = false;
} else
    $this->_sections['result']['total'] = 0;
if ($this->_sections['result']['show']):

            for ($this->_sections['result']['index'] = $this->_sections['result']['start'], $this->_sections['result']['iteration'] = 1;
                 $this->_sections['result']['iteration'] <= $this->_sections['result']['total'];
                 $this->_sections['result']['index'] += $this->_sections['result']['step'], $this->_sections['result']['iteration']++):
$this->_sections['result']['rownum'] = $this->_sections['result']['iteration'];
$this->_sections['result']['index_prev'] = $this->_sections['result']['index'] - $this->_sections['result']['step'];
$this->_sections['result']['index_next'] = $this->_sections['result']['index'] + $this->_sections['result']['step'];
$this->_sections['result']['first']      = ($this->_sections['result']['iteration'] == 1);
$this->_sections['result']['last']       = ($this->_sections['result']['iteration'] == $this->_sections['result']['total']);
?>
            <option value="<?php echo $this->_tpl_vars['cats'][$this->_sections['result']['index']]['cno']; ?>
"><?php echo $this->_tpl_vars['cats'][$this->_sections['result']['index']]['name']; ?>
</option>
<?php endfor; endif; ?>
        </select></td>
      </tr>
<?php endif; ?>
      <tr>
        <td>分類名稱&nbsp;&nbsp;<input type="text" name="name" value="<?php echo $this->_tpl_vars['target']['name']; ?>
" size="20" /></td>
        <td>管理者名單&nbsp;&nbsp;<input type="text" name="manager" value="<?php echo $this->_tpl_vars['target']['manager']; ?>
" size="25" /></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input type="hidden" name="act" value="<?php if (( $this->_tpl_vars['setedit'] )): ?>edit<?php else: ?>add<?php endif; ?>" />
<?php if (( $this->_tpl_vars['setedit'] )): ?><input type="hidden" name="category" value="<?php echo $this->_tpl_vars['target']['cno']; ?>
" /><?php endif; ?>
<input type="submit" value="<?php if (( ! $this->_tpl_vars['setedit'] )): ?>新增<?php else: ?>編輯<?php endif; ?>" /></td>
      </tr>
    </table>
  </form>
</div>
<p class="field2_bottom"></p>
<br />
<p class="field2_top">類別管理</p>
<div class="field2_content">
  <form action="" method="post" onSubmit="
	if ($('action6').checked) { return confirm('確定要刪除');}
">
    <table border="0" cellpadding="5" cellspacing="0" style="border-collapse: collapse;" align="center">
      <tr>
        <td rowspan="6" valign="top">將
          <select name="category" size="1">
            <option selected>...</option>
<?php $_from = $this->_tpl_vars['cats']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
            <option value="<?php echo $this->_tpl_vars['item']['cno']; ?>
"><?php echo $this->_tpl_vars['item']['name']; ?>
</option>
<?php $_from = $this->_tpl_vars['item']['child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['child']):
?>
            <option value="<?php echo $this->_tpl_vars['child']['cno']; ?>
">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['child']['name']; ?>
</option>
<?php endforeach; endif; unset($_from); ?>
<?php endforeach; endif; unset($_from); ?>
        </select></td>
        <td><input type="radio" name="action" value="1" checked />移到上一層</td>
      </tr>
      <tr>
        <td><input type="radio" name="action" id="action2" value="2" />移到
          <select name="goal" size="1" onfocus="javascript: document.getElementById('action2').checked = true;">
            <option selected>...</option>
<?php unset($this->_sections['result']);
$this->_sections['result']['name'] = 'result';
$this->_sections['result']['loop'] = is_array($_loop=$this->_tpl_vars['cats']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['result']['show'] = true;
$this->_sections['result']['max'] = $this->_sections['result']['loop'];
$this->_sections['result']['step'] = 1;
$this->_sections['result']['start'] = $this->_sections['result']['step'] > 0 ? 0 : $this->_sections['result']['loop']-1;
if ($this->_sections['result']['show']) {
    $this->_sections['result']['total'] = $this->_sections['result']['loop'];
    if ($this->_sections['result']['total'] == 0)
        $this->_sections['result']['show'] = false;
} else
    $this->_sections['result']['total'] = 0;
if ($this->_sections['result']['show']):

            for ($this->_sections['result']['index'] = $this->_sections['result']['start'], $this->_sections['result']['iteration'] = 1;
                 $this->_sections['result']['iteration'] <= $this->_sections['result']['total'];
                 $this->_sections['result']['index'] += $this->_sections['result']['step'], $this->_sections['result']['iteration']++):
$this->_sections['result']['rownum'] = $this->_sections['result']['iteration'];
$this->_sections['result']['index_prev'] = $this->_sections['result']['index'] - $this->_sections['result']['step'];
$this->_sections['result']['index_next'] = $this->_sections['result']['index'] + $this->_sections['result']['step'];
$this->_sections['result']['first']      = ($this->_sections['result']['iteration'] == 1);
$this->_sections['result']['last']       = ($this->_sections['result']['iteration'] == $this->_sections['result']['total']);
?>
            <option value="<?php echo $this->_tpl_vars['cats'][$this->_sections['result']['index']]['cno']; ?>
"><?php echo $this->_tpl_vars['cats'][$this->_sections['result']['index']]['name']; ?>
</option>
<?php endfor; endif; ?>
          </select>
        中</td>
      </tr>
      <tr>
        <td><input type="radio" name="action" value="3" />向上移</td>
      </tr>
      <tr>
        <td><input type="radio" name="action" value="4" />向下移</td>
      </tr>
      <tr>
        <td><input type="radio" name="action" value="5" />編輯</td>
      </tr>
      <tr>
        <td><input type="radio" name="action" id="action6" value="6" />刪除</td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input type="hidden" name="act" value="move" /><input type="submit" value="確定" />&nbsp;&nbsp;&nbsp;
<input type="reset" value="取消" /></td>
      </tr>
    </table>
  </form>
</div>
<p class="field2_bottom"></p>