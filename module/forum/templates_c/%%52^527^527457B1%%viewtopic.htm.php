<?php /* Smarty version 2.6.18, created on 2007-08-08 05:36:11
         compiled from viewtopic.htm */ ?>
<script type="text/javascript">
	var pno = 0;

	function subscribe(type, no)
	{
		var parms = 'subscr_' + type + '=1&no=' + no;

		var req = new Ajax.Request("<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/do_subscribe.php", {method: "post", parameters: parms});
	}

	function rmtopic_result(req)
	{
		if (req.responseText == '找不到主題')
			alert(req.responseText);
		else
			document.location.href = '<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/viewboard.php?no=<?php echo $this->_tpl_vars['forumtopic']->board_no; ?>
';
	}

	function rmtopic(no)
	{
		var parms = 'rmtopic=1&tno=' + no;

		var req = new Ajax.Request("<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/do_topic.php", {method: "post", parameters: parms, onComplete: rmtopic_result});
	}

	function rmreply_result(req)
	{
		if (req.responseText == '找不到文章')
			alert(req.responseText);
		else
			document.location.href = '<?php echo $this->_tpl_vars['currconfig']->phpself; ?>
';
	}

	function rmreply(no)
	{
		var parms = 'rmreply=1&rno=' + no;

		var req = new Ajax.Request("<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/do_reply.php", {method: "post", parameters: parms, onComplete: rmreply_result});
	}

	function show_push(no)
	{
		if (pno > 0)
			$('push_form' + pno).innerHTML = '';

		var str = '';
		str = str + '<form method="post" action="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/do_push.php" name="do_push" id="do_push">\n';
		str = str + '<?php echo $this->_tpl_vars['curruser']->name; ?>
:→ <input type="text" name="content" size="40" />&nbsp;&nbsp;<input type="hidden" name="dopush" value="1" /><input type="hidden" name="rno" value="' + no + '" /><input type="submit" value="確定" />&nbsp;&nbsp;\n';
		str = str + '</form>\n';

		$('push_form' + no).innerHTML = str;

		pno = no;
	}
</script>
<table class="titleTable">
  <tr>
    <td><a href="javascript: subscribe('board', <?php echo $this->_tpl_vars['forumboard']->board_no; ?>
)" title="訂閱看板">．</a>&nbsp;<?php echo $this->_tpl_vars['forumboard']->title; ?>
&nbsp;&raquo;</td>
  </tr>
</table>

<table class="itemTable">
  <tr>
    <th><?php echo $this->_tpl_vars['forumtopic']->title; ?>
&raquo;</th>
  </tr>
  <tr>
    <td class="itemContent"><?php echo $this->_tpl_vars['forumtopic']->content; ?>
</td>
  </tr>
  <tr>
    <td align="right"><a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/topicfeed.php?no=<?php echo $this->_tpl_vars['forumtopic']->topic_no; ?>
" title="rss"><img src="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/templates/images/feed.jpg" border="0" alt="rss" /></a><?php if (( $this->_tpl_vars['curruser']->haveperm($this->_tpl_vars['curruser']->p_handler->getpermvalid()) && ( $this->_tpl_vars['forumtopic']->poster_no == $this->_tpl_vars['curruser']->uno || $this->_tpl_vars['bm'] ) )): ?>&nbsp;<a href="do_topic.php?mdarticle=1&tno=<?php echo $this->_tpl_vars['forumtopic']->topic_no; ?>
" title="修改文章">[EDIT]</a><?php if (( $this->_tpl_vars['bm'] )): ?>&nbsp;<a href="javascript: rmtopic(<?php echo $this->_tpl_vars['forumtopic']->topic_no; ?>
);" title="刪除文章">[DEL]</a><?php endif; ?><?php endif; ?>&nbsp;</td>
  </tr>
  <tr>
    <td class="itemFooter">發文者：<a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/system/show_pfile.php?uno=<?php echo $this->_tpl_vars['forumtopic']->poster_no; ?>
" title="使用者資料"><?php echo $this->_tpl_vars['forumtopic']->poster_name; ?>
</a>&nbsp;&nbsp;點閱數：<?php echo $this->_tpl_vars['forumtopic']->numread; ?>
&nbsp;&nbsp;回應數：<?php echo $this->_tpl_vars['forumtopic']->numreply; ?>
&nbsp;&nbsp;發表時間：<?php echo $this->_tpl_vars['forumtopic']->posttime; ?>
</td>
  </tr>
</table>

<table class="titleTable">
  <tr>
    <td>回覆文章&raquo;</td>
  </tr>
</table>

<?php $_from = $this->_tpl_vars['forumreply']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['reply']):
?>

<table class="itemTable">
  <tr>
    <td class="itemContent"><?php echo $this->_tpl_vars['reply']->content; ?>
</td>
  </tr>
<?php if (( $this->_tpl_vars['curruser']->haveperm($this->_tpl_vars['curruser']->p_handler->getpermvalid()) && ( $this->_tpl_vars['reply']->poster_no == $this->_tpl_vars['curruser']->uno || $this->_tpl_vars['bm'] ) )): ?>
  <tr>
    <td class="itemAdmin"><a href="do_reply.php?mdreply=1&rno=<?php echo $this->_tpl_vars['reply']->reply_no; ?>
;" title="修改文章">[EDIT]</a>&nbsp;<a href="javascript: rmreply(<?php echo $this->_tpl_vars['reply']->reply_no; ?>
);" title="刪除文章">[DEL]</a></td>
  </tr>
<?php endif; ?>
  <tr>
    <td class="itemFooter">發文者：<a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/system/show_pfile.php?uno=<?php echo $this->_tpl_vars['reply']->poster_no; ?>
" title="使用者資料"><?php echo $this->_tpl_vars['reply']->poster_name; ?>
</a>&nbsp;&nbsp;發表時間：<?php echo $this->_tpl_vars['reply']->posttime; ?>
</td>
  </tr>
<?php $_from = $this->_tpl_vars['reply']->push; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['push']):
?>
  <tr>
    <td><a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/system/show_pfile.php?uno=<?php echo $this->_tpl_vars['push']->poster_no; ?>
" title="使用者資料"><?php echo $this->_tpl_vars['push']->poster_name; ?>
</a>:→ <?php echo $this->_tpl_vars['push']->content; ?>
</td>
  </tr>
<?php endforeach; endif; unset($_from); ?>
<?php if (( $this->_tpl_vars['curruser']->haveperm($this->_tpl_vars['curruser']->p_handler->getpermvalid()) )): ?>
  <tr>
    <td><input type="button" value="我要推文" onclick="javascript: show_push(<?php echo $this->_tpl_vars['reply']->reply_no; ?>
)" /><div id="push_form<?php echo $this->_tpl_vars['reply']->reply_no; ?>
"></div></td>
  </tr>
<?php endif; ?>
</table>
<?php endforeach; endif; unset($_from); ?>

<?php if (( $this->_tpl_vars['curruser']->haveperm($this->_tpl_vars['curruser']->p_handler->getpermvalid()) )): ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "reply_form.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>
<div style="text-align: center;"><?php $_from = $this->_tpl_vars['plink']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['link']):
?><?php echo $this->_tpl_vars['link']; ?>
&nbsp;&nbsp;<?php endforeach; endif; unset($_from); ?></div>
<div style="text-align: center;"><a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/viewboard.php?no=<?php echo $this->_tpl_vars['forumtopic']->board_no; ?>
">回看板</a></div>

