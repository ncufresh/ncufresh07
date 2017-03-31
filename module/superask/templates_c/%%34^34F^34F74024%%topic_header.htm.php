<?php /* Smarty version 2.6.18, created on 2007-08-03 22:19:02
         compiled from topic_header.htm */ ?>
<?php if (( $this->_tpl_vars['_WikiPost']->pno != $this->_tpl_vars['_WikiTopic']->currpost->pno || ! $this->_tpl_vars['wikiview'] )): ?>
<div style="margin-bottom: 10px; text-align: right;">

<?php if (( $this->_tpl_vars['_WikiPost']->pno != $this->_tpl_vars['_WikiTopic']->currpost->pno )): ?>
  <b>您目前<?php if (( $this->_tpl_vars['wikiview'] )): ?>瀏覽<?php else: ?>編輯<?php endif; ?>的文章不是最新的版本</b>
<?php if (( $this->_tpl_vars['wikiedit'] )): ?>
  <a href="javascript: document.location.href = '<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/view.php?pno=<?php echo $this->_tpl_vars['_WikiTopic']->currpost->pno; ?>
'" title="目前版本" class="topic_manage">目前版本</a>
<?php endif; ?>
<?php endif; ?>

<?php if (( ! $this->_tpl_vars['wikiview'] )): ?>
  <a href="javascript: document.location.href = '<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/view.php?pno=<?php echo $this->_tpl_vars['_WikiPost']->pno; ?>
'" title="觀看資訊" class="topic_manage">觀看資訊</a>
<?php endif; ?>

</div>
<?php endif; ?>
