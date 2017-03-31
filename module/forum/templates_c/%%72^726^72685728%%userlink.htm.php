<?php /* Smarty version 2.6.18, created on 2007-07-24 00:01:08
         compiled from userlink.htm */ ?>
<div style="text-align: left">&nbsp;<a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/index.php" title="討論區">討論區</a>&nbsp;&raquo;&nbsp;<a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/viewboard.php?no=<?php echo $this->_tpl_vars['forumboard']->board_no; ?>
" title="文章列表"><?php echo $this->_tpl_vars['forumboard']->title; ?>
</a></div>
<?php if (( $this->_tpl_vars['curruser']->haveperm($this->_tpl_vars['forumboard']->perm) || $this->_tpl_vars['bm'] )): ?><div style="text-align: right"><input type="button" value="發表新文章" onclick="javascript: document.location.href='do_topic.php?dopost=1&bno=<?php echo $this->_tpl_vars['forumboard']->board_no; ?>
';" /></div><?php endif; ?>
