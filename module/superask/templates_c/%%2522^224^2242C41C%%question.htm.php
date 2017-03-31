<?php /* Smarty version 2.6.18, created on 2007-08-10 16:03:52
         compiled from question.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlencode', 'question.htm', 21, false),array('modifier', 'nl2br', 'question.htm', 24, false),array('modifier', 'urlencode', 'question.htm', 30, false),)), $this); ?>
<script type="text/javascript">
<?php if (( ! $this->_tpl_vars['curruser']->isguest() )): ?>
	function subscribe(type, no)
	{
		var parms = 'subscr_' + type + '=1&no=' + no;

		var req = new Ajax.Request("<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/do_subscribe.php", {method: "post", parameters: parms, onComplete: function(q){alert('訂閱成功');}});
	}
<?php endif; ?>
<?php if (( $this->_tpl_vars['curruser']->haveperm($this->_tpl_vars['curruser']->p_handler->getpermvalid()) && ! $this->_tpl_vars['bestans'] )): ?>
	function show_qandaform()
	{
		 $('qandaform').style.display = 'block';;
	}
<?php endif; ?>
</script>
<p class="reply_top"></p>
<div class="reply_content">
  <table border="0" cellpadding="5" cellspacing="0" style="border-collapse: collapse;" width="100%">
    <tr>
      <td><a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/system/show_pfile.php?uno=<?php echo $this->_tpl_vars['question']['poster_no']; ?>
" title=""><?php echo ((is_array($_tmp=$this->_tpl_vars['question']['poster_id'])) ? $this->_run_mod_handler('htmlencode', true, $_tmp) : htmlencode($_tmp)); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['question']['poster_name'])) ? $this->_run_mod_handler('htmlencode', true, $_tmp) : htmlencode($_tmp)); ?>
)</a> 問：</td>
    </tr>
    <tr>
      <td style="padding: 5px 10px; letter-spacing: 1pt;"><font color="#333333"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['question']['question'])) ? $this->_run_mod_handler('htmlencode', true, $_tmp) : htmlencode($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</font></td>
    </tr>
      <tr>
        <td>相關主題：
<?php $_from = $this->_tpl_vars['question']['ref']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ref']):
?>
<?php if (( $this->_tpl_vars['ref'] )): ?>
          <a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/view.php?title=<?php echo ((is_array($_tmp=$this->_tpl_vars['ref'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
" title=""><?php echo $this->_tpl_vars['ref']; ?>
</a>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
        </td>
      </tr>
    <tr>
      <td align="right">at <?php echo $this->_tpl_vars['question']['posttime']; ?>

<?php if (( $this->_tpl_vars['currmodule']->isadmin($this->_tpl_vars['curruser']) )): ?>&nbsp;&nbsp;<a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/do_question.php?delques=1&qno=<?php echo $this->_tpl_vars['question']['qno']; ?>
" title="刪除問題">刪除問題</a><?php endif; ?>
<?php if (( ! $this->_tpl_vars['curruser']->isguest() )): ?>&nbsp;&nbsp;<a href="javascript: subscribe('qanda', '<?php echo $this->_tpl_vars['question']['qno']; ?>
');" title="訂閱問題"><img src="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/templates/images/p_subscribeicon2.jpg" border="0" alt="訂閱問題" /></a><?php endif; ?>
      </td>
    </tr>
<?php if (( $this->_tpl_vars['bestans'] )): ?>
    <tr>
      <td style="border-top: 1px dotted #000000;">[最佳解答]</td>
    </tr>
    <tr>
      <td><a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/system/show_pfile.php?uno=<?php echo $this->_tpl_vars['bestans']['poster_no']; ?>
" title=""><?php echo ((is_array($_tmp=$this->_tpl_vars['bestans']['poster_id'])) ? $this->_run_mod_handler('htmlencode', true, $_tmp) : htmlencode($_tmp)); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['bestans']['poster_name'])) ? $this->_run_mod_handler('htmlencode', true, $_tmp) : htmlencode($_tmp)); ?>
)</a>答：</td>
    </tr>
    <tr>
      <td style="padding: 5px 10px;"><font color="#333333"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['bestans']['answer'])) ? $this->_run_mod_handler('htmlencode', true, $_tmp) : htmlencode($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</font></td>
    </tr>
    <tr>
      <td align="right">at <?php echo $this->_tpl_vars['bestans']['posttime']; ?>
</td>
    <tr>
<?php endif; ?>
    <tr>
      <td style="border-top: 1px dotted #000000;">待選擇解答</td>
    </tr>
<?php $_from = $this->_tpl_vars['answers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ans']):
?>
    <tr>
      <td style="border-top: 1px dotted #000000;"><a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/system/show_pfile.php?uno=<?php echo $this->_tpl_vars['ans']['poster_no']; ?>
" title=""><?php echo ((is_array($_tmp=$this->_tpl_vars['ans']['poster_id'])) ? $this->_run_mod_handler('htmlencode', true, $_tmp) : htmlencode($_tmp)); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['ans']['poster_name'])) ? $this->_run_mod_handler('htmlencode', true, $_tmp) : htmlencode($_tmp)); ?>
)</a>答：</td>
    </tr>
    <tr>
      <td style="padding: 5px 10px;"><font color="#333333"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['ans']['answer'])) ? $this->_run_mod_handler('htmlencode', true, $_tmp) : htmlencode($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</font></td>
    </tr>
      <tr>
        <td>相關主題：
<?php $_from = $this->_tpl_vars['ans']['ref']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ref']):
?>
<?php if (( $this->_tpl_vars['ref'] )): ?>
          <a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/view.php?title=<?php echo ((is_array($_tmp=$this->_tpl_vars['ref'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
" title=""><?php echo $this->_tpl_vars['ref']; ?>
</a>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
        </td>
      </tr>
    <tr>
      <td align="right">at <?php echo $this->_tpl_vars['ans']['posttime']; ?>

<?php if (( $this->_tpl_vars['currmodule']->isadmin($this->_tpl_vars['curruser']) || $this->_tpl_vars['curruser']->uno == $this->_tpl_vars['ans']['poster_no'] )): ?>&nbsp;&nbsp;<a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/do_question.php?delans=1&ano=<?php echo $this->_tpl_vars['ans']['ano']; ?>
" title="刪除回答">刪除回答</a><?php endif; ?>
<?php if (( $this->_tpl_vars['currmodule']->isadmin($this->_tpl_vars['curruser']) || $this->_tpl_vars['curruser']->uno == $this->_tpl_vars['question']['poster_no'] )): ?>&nbsp;&nbsp;<a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/do_question.php?bestans=1&qno=<?php echo $this->_tpl_vars['question']['qno']; ?>
&ano=<?php echo $this->_tpl_vars['ans']['ano']; ?>
" title="選擇為最佳回答">選擇為最佳回答</a><?php endif; ?>
</td>
    <tr>
<?php endforeach; endif; unset($_from); ?>
<?php if (( $this->_tpl_vars['curruser']->haveperm($this->_tpl_vars['curruser']->p_handler->getpermvalid()) && ! $this->_tpl_vars['bestans'] )): ?>
    <tr>
      <td style="border-top: 1px dotted #000000;"><a href="javascript: show_qandaform();" title="回答問題">回答問題</a></td>
    </tr>
    <tr>
      <td align="right">
        <form id="qandaform" method="post" action="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/do_question.php" style="display: none;">
          <textarea name="answer" rows="5" cols="50"></textarea><br />
          相關主題：<input type="text" name="ref" size="20" /><br />
          <input type="hidden" name="doanswer" value="1" /><input type="hidden" name="qno" value="<?php echo $this->_tpl_vars['question']['qno']; ?>
" /><input type="submit" value="確定" />
        </form>
      </td>
    </tr>
<?php endif; ?>
  </table>
</div>
<p class="reply_bottom"></p>
