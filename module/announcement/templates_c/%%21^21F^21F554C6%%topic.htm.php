<?php /* Smarty version 2.6.18, created on 2007-08-10 03:06:55
         compiled from topic.htm */ ?>
<div style="margin:0px 10px">
	<div class="post_top" style="color:#333">公告時間：<font style="color:#666"><?php echo $this->_tpl_vars['topic']['times']; ?>
</font></div>
	<div class="post_content" <?php if (( $this->_tpl_vars['select'] == 'index' )): ?>style="height:60pt"<?php endif; ?>>

		<?php if (( $this->_tpl_vars['select'] == 'index' )): ?><a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/topic.php?topic_no=<?php echo $this->_tpl_vars['topic']['topic_no']; ?>
" title="<?php echo $this->_tpl_vars['topic']['title']; ?>
" style="text-decoration: none;"><?php endif; ?>
  		<font style="font-size:12pt; color: #000;"><?php if (( $this->_tpl_vars['topic']['top'] == 1 )): ?><font color="#CC0066">[重要]</font>&nbsp;<?php endif; ?><?php echo $this->_tpl_vars['topic']['title']; ?>
</font>
  		<?php if (( $this->_tpl_vars['select'] == 'index' )): ?><img src="templates/images/more.gif" border="0" /></a><?php endif; ?><br />
		<font style="font-size:10pt"><font style="color:<?php if (( $this->_tpl_vars['select'] == 'topic' )): ?>#333<?php else: ?>#666<?php endif; ?>"><?php echo $this->_tpl_vars['topic']['content']; ?>
</font></font>
			<?php if (( $this->_tpl_vars['select'] == topic )): ?>
				<?php if (( $this->_tpl_vars['topic']['file'] != null )): ?>
					<p>附件：
					<?php $_from = $this->_tpl_vars['file']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item1']):
?>
			  			<a href="res/<?php echo $this->_tpl_vars['topic']['topic_no']; ?>
/<?php echo $this->_tpl_vars['item1']['file_file']; ?>
" title="<?php echo $this->_tpl_vars['item1']['file_file']; ?>
">[<?php echo $this->_tpl_vars['item1']['file_name']; ?>
]</a>&nbsp;
					<?php endforeach; endif; unset($_from); ?>
					</p>
				<?php endif; ?>
				<?php if (( $this->_tpl_vars['topic']['go_link'] == 0 && $this->_tpl_vars['topic']['link'] )): ?>
					<p align="left"><a href="<?php echo $this->_tpl_vars['topic']['link']; ?>
" target="_blank">相關連結</a></p>
				<?php endif; ?>
			<?php endif; ?>
			
	</div>
		<?php $this->assign('poster', $this->_tpl_vars['curruser']->u_handler->getuserbyno($this->_tpl_vars['topic']['poster_no'])); ?>
		<div class="post_bottom">
		<?php if (( $this->_tpl_vars['select'] == 'index' )): ?>
			<?php if (( $this->_tpl_vars['currmodule']->isadmin($this->_tpl_vars['curruser']) )): ?>
				<a href="form.php?topic_no=<?php echo $this->_tpl_vars['topic']['topic_no']; ?>
&action=edit">[EDIT]</a>&nbsp;&nbsp;<a href="delete.php?topic_no=<?php echo $this->_tpl_vars['topic']['topic_no']; ?>
">[DELETE]</a>
			<?php endif; ?>
		<?php endif; ?>
		公告單位：<font style="color:#666"><?php echo $this->_tpl_vars['poster']->name; ?>
</font></div>
</div>
<?php if (( $this->_tpl_vars['select'] == 'topic' )): ?>
	<p><a href="javascript: history.go(-1);"><font color="#000000">回上頁</font></a></p>
<?php endif; ?>