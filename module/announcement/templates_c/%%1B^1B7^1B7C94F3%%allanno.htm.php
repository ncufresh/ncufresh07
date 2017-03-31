<?php /* Smarty version 2.6.18, created on 2007-08-29 00:04:15
         compiled from allanno.htm */ ?>
<div>
  <div style="float: left;">
    <?php echo $this->_tpl_vars['c_block']; ?>

    <?php echo $this->_tpl_vars['c_block2']; ?>

  </div>
  <div style="float: right; width: 420px;">
    <img src="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/templates/images/c_icon_news_4.gif">
    <div class="allanno">
<?php $_from = $this->_tpl_vars['topics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
      <font style="color:#666666"><?php echo $this->_tpl_vars['item']['times']; ?>
</font>&nbsp;&nbsp;<a href="topic.php?topic_no=<?php echo $this->_tpl_vars['item']['topic_no']; ?>
"><?php if (( $this->_tpl_vars['item']['top'] == 1 )): ?><font style="color:#C06">[重要]&nbsp;</font><?php endif; ?><?php echo $this->_tpl_vars['item']['title']; ?>
...</a>
<?php if (( $this->_tpl_vars['currmodule']->isadmin($this->_tpl_vars['curruser']) )): ?>
      <a href="form.php?topic_no=<?php echo $this->_tpl_vars['item']['topic_no']; ?>
&action=edit">[EDIT]</a>&nbsp;&nbsp;<a href="delete.php?topic_no=<?php echo $this->_tpl_vars['item']['topic_no']; ?>
">[DELETE]</a>
<?php endif; ?>
      <br />
<?php endforeach; endif; unset($_from); ?>
    </div>
    Page :
<?php $_from = $this->_tpl_vars['plink']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['link']):
?>
    <?php echo $this->_tpl_vars['link']; ?>
&nbsp;&nbsp;
<?php endforeach; endif; unset($_from); ?>
<!--
    <p><a href="index.php"><font color="#000000">回首頁</font></a></p>
-->
  </div>
  <p style="clear: both;"></p>
</div>
