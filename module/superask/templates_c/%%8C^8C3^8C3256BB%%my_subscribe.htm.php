<?php /* Smarty version 2.6.18, created on 2007-08-10 22:21:37
         compiled from my_subscribe.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlencode', 'my_subscribe.htm', 25, false),)), $this); ?>
<script type="text/javascript">
	function unsubscribe(type, no)
	{
		var parms = 'unsubscr_' + type + '=1&no=' + no;

		var req = new Ajax.Request("<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/do_subscribe.php", {method: "post", parameters: parms, onComplete: function(q){alert('取消訂閱成功');  document.location.href = '<?php echo $this->_tpl_vars['currconfig']->phpself; ?>
';}});
	}
</script>

<p class="field2_top"><img src="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/templates/images/p_mine_topic.jpg" alt="我的訂閱主題" /></p>
<div class="field2_content">
  <table border="0" cellpadding="5" cellspacing="0" style="border-collapse: collapse;" align="center" width="100%">
    <tr>
      <th align="left" width="60">取消訂閱</th>
      <th align="left">訂閱主題</th>
      <th align="left" width="150">最新發表人</th>
      <th align="left" width="90">最新發表日期</th>
    </tr>
    <tr>
      <td colspan="4"><hr width="100%" /></td>
    </tr>
<?php $_from = $this->_tpl_vars['s_topics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['topic']):
?>
    <tr>
      <td align="center"><a href="javascript: unsubscribe('topic', '<?php echo $this->_tpl_vars['topic']->tno; ?>
');" title="取消訂閱"><img src="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/templates/images/p_mine_unscribe.gif" border="0" /></a></td>
      <td><a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/view.php?tno=<?php echo $this->_tpl_vars['topic']->tno; ?>
" title=""><?php echo ((is_array($_tmp=$this->_tpl_vars['topic']->title)) ? $this->_run_mod_handler('htmlencode', true, $_tmp) : htmlencode($_tmp)); ?>
</a></td>
      <td><a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/system/show_pfile.php?uno=<?php echo $this->_tpl_vars['topic']->currpost->poster_no; ?>
" title=""><?php echo ((is_array($_tmp=$this->_tpl_vars['topic']->currpost->poster_name)) ? $this->_run_mod_handler('htmlencode', true, $_tmp) : htmlencode($_tmp)); ?>
</a></td>
      <td><?php echo $this->_tpl_vars['topic']->currpost->posttime; ?>
</td>
    </tr>
<?php endforeach; endif; unset($_from); ?>
  </table>
</div>
<p class="field2_bottom"></p>

<p class="field2_top"><img src="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/templates/images/p_mine_qanda.jpg" alt="我的訂閱問題" /></p>
<div class="field2_content">
  <table border="0" cellpadding="5" cellspacing="0" style="border-collapse: collapse;" align="center" width="100%">
    <tr>
      <th align="left" width="60">取消訂閱</th>
      <th align="left">訂閱問題</th>
      <th align="left" width="150">最新發表人</th>
      <th align="left" width="90">最新發表日期</th>
    </tr>
    <tr>
      <td colspan="4"><hr width="100%" /></td>
    </tr>
<?php $_from = $this->_tpl_vars['s_questions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['question']):
?>
    <tr>
      <td align="center"><a href="javascript: unsubscribe('qanda', '<?php echo $this->_tpl_vars['question']['qno']; ?>
');" title="取消訂閱"><img src="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/templates/images/p_mine_unscribe.gif" border="0" /></a></td>
      <td><a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/question.php?qno=<?php echo $this->_tpl_vars['question']['qno']; ?>
" title=""><?php echo ((is_array($_tmp=$this->_tpl_vars['question']['question'])) ? $this->_run_mod_handler('htmlencode', true, $_tmp) : htmlencode($_tmp)); ?>
</a></td>
      <td><a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/system/show_pfile.php?uno=<?php echo $this->_tpl_vars['question']['poster_no']; ?>
" title=""><?php echo ((is_array($_tmp=$this->_tpl_vars['question']['poster_name'])) ? $this->_run_mod_handler('htmlencode', true, $_tmp) : htmlencode($_tmp)); ?>
</a></td>
      <td><?php echo $this->_tpl_vars['question']['posttime']; ?>
</td>
    </tr>
<?php endforeach; endif; unset($_from); ?>
  </table>
</div>
<p class="field2_bottom"></p>
