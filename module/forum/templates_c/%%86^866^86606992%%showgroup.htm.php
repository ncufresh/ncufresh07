<?php /* Smarty version 2.6.18, created on 2007-07-24 00:01:30
         compiled from showgroup.htm */ ?>
<script type="text/javascript">
	function subscribe(type, no)
	{
		var parms = 'subscr_' + type + '=1&no=' + no;

		var req = new Ajax.Request("<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/do_subscribe.php", {method: "post", parameters: parms, onComplete: function(q){alert('訂閱成功');}});
	}
</script>

<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="100%">
<?php $_from = $this->_tpl_vars['forumboard']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['board'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['board']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['board']):
        $this->_foreach['board']['iteration']++;
?>
<?php if (( $this->_foreach['board']['iteration'] % 2 == 1 )): ?>
  <tr>
<?php endif; ?>
    <td valign="top" width="50%">
      <table class="groupTable">
        <tr>
          <th colspan="3" height="30"><a href="javascript: subscribe('board', <?php echo $this->_tpl_vars['board']->board_no; ?>
)" title="訂閱看板"><img src="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/templates/images/inner_3.jpg" width="17" border="0" height="14" alt="訂閱看板" /></a><a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/viewboard.php?no=<?php echo $this->_tpl_vars['board']->board_no; ?>
" title="進入看板"><?php echo $this->_tpl_vars['board']->title; ?>
</a></th>
        </tr>
        <tr>
          <td width="15%" height="12" align="center">訂閱</td>
          <td width="70%" height="12">標題</td>
          <td width="15%" height="12">篇數</td>
        </tr>
<?php $_from = $this->_tpl_vars['board']->topics; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['topic']):
?>
        <tr>
          <td width="15%" height="15" align="center"><a href="javascript: subscribe('topic', <?php echo $this->_tpl_vars['topic']->topic_no; ?>
)" title="訂閱文章"><img border="0" src="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/templates/images/icon_left4.jpg" width="9" height="8" alt="訂閱文章" /></a></td>
          <td width="70%" height="15"><a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/viewtopic.php?no=<?php echo $this->_tpl_vars['topic']->topic_no; ?>
" title="<?php echo $this->_tpl_vars['topic']->title; ?>
"><?php echo $this->_tpl_vars['topic']->titles; ?>
</a></td>
          <td width="15%" height="15"><?php echo $this->_tpl_vars['topic']->numreply; ?>
</td>
        </tr>
<?php endforeach; endif; unset($_from); ?>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="3" align="right" height="15"><input type="button" value="MORE" onclick="javascript: document.location.href='<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/viewboard.php?no=<?php echo $this->_tpl_vars['board']->board_no; ?>
';" />&nbsp;&nbsp;</td>
        </tr>
      </table>
    </td>
<?php if (( $this->_foreach['board']['iteration'] % 2 == 0 )): ?>
  </tr>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<?php if (( $this->_foreach['board']['iteration'] % 2 == 1 )): ?>
    <td>a&nbsp;</td>
  </tr>
<?php endif; ?>
</table>