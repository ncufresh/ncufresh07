<?php /* Smarty version 2.6.18, created on 2007-08-18 08:40:40
         compiled from viewboard.htm */ ?>
<script type="text/javascript">
	function subscribe(type, no)
	{
		var parms = '&subscr_' + type + '=1&no=' + no;

		var req = new Ajax.Request("<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/do_subscribe.php", {method: "post", parameters: parms, onComplete: function(q){alert('訂閱成功');}});
	}

	function rmtopic_result(req)
	{
		if (req.responseText == '找不到主題')
			alert(req.responseText);
		else
			document.location.href = '<?php echo $this->_tpl_vars['currconfig']->phpself; ?>
';
	}

	function rmtopic(no)
	{
		var parms = 'rmtopic=1&tno=' + no;

		var req = new Ajax.Request("<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/do_topic.php", {method: "post", parameters: parms, onComplete: rmtopic_result});
	}

	function toptopic(no)
	{
		var parms = 'toptopic=1&tno=' + no;

		var req = new Ajax.Request("<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/do_top.php", {method: "post", parameters: parms, onComplete: function(q){document.location.href = '<?php echo $this->_tpl_vars['currconfig']->phpself; ?>
';}});
	}
</script>

<table class="titleTable">
  <tr>
    <td><a href="javascript: subscribe('board', <?php echo $this->_tpl_vars['forumboard']->board_no; ?>
)" title="訂閱看板">．</a>&nbsp;<?php echo $this->_tpl_vars['forumboard']->title; ?>
&nbsp;&raquo;</td>
  </tr>
</table>

<?php $_from = $this->_tpl_vars['forumtopic']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['topic']):
?>
<table class="itemTable">
  <tr>
    <th><a href="javascript: subscribe('topic', <?php echo $this->_tpl_vars['topic']->topic_no; ?>
)" title="訂閱文章">•</a><a href="viewtopic.php?no=<?php echo $this->_tpl_vars['topic']->topic_no; ?>
"><?php echo $this->_tpl_vars['topic']->title; ?>
&raquo;</a></th>
  </tr>
  <tr>
    <td class="itemContent"><?php echo $this->_tpl_vars['topic']->content; ?>
....(<a href="viewtopic.php?no=<?php echo $this->_tpl_vars['topic']->topic_no; ?>
">詳全文</a>)</td>
  </tr>
<?php if (( $this->_tpl_vars['poster']->uno == $this->_tpl_vars['curruser']->uno || $this->_tpl_vars['bm'] )): ?>
  <tr>
    <td class="itemAdmin"><a href="do_topic.php?mdarticle=1&tno=<?php echo $this->_tpl_vars['topic']->topic_no; ?>
" title="修改文章">[EDIT]</a><?php if (( $this->_tpl_vars['bm'] )): ?><a href="javascript: toptopic(<?php echo $this->_tpl_vars['topic']->topic_no; ?>
);" title="文章置頂">[SET TOP]</a>&nbsp;<a href="javascript: rmtopic(<?php echo $this->_tpl_vars['topic']->topic_no; ?>
);" title="刪除文章">[DEL]</a><?php endif; ?>&nbsp;</td>
  </tr>
<?php endif; ?>
  <tr>
    <td class="itemFooter">發文者：<a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/system/show_pfile.php?uno=<?php echo $this->_tpl_vars['topic']->poster_no; ?>
" title="使用者資料"><?php echo $this->_tpl_vars['topic']->poster_name; ?>
</a>&nbsp;&nbsp;點閱數：<?php echo $this->_tpl_vars['topic']->numread; ?>
&nbsp;&nbsp;回應數：<?php echo $this->_tpl_vars['topic']->numreply; ?>
&nbsp;&nbsp;<br />發表時間：<?php echo $this->_tpl_vars['topic']->posttime; ?>
&nbsp;&nbsp;最後時間：<?php echo $this->_tpl_vars['topic']->lasttime; ?>
</td>
  </tr>
</table>
<?php endforeach; endif; unset($_from); ?>
<div style="text-align: center;"><?php $_from = $this->_tpl_vars['plink']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['link']):
?><?php echo $this->_tpl_vars['link']; ?>
&nbsp;&nbsp;<?php endforeach; endif; unset($_from); ?></div>
<p></p>
<div style="text-align: center;"><a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/index.php">回討論區</a></div>
