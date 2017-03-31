<?php /* Smarty version 2.6.18, created on 2007-08-18 00:45:23
         compiled from block/newten.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlencode', 'block/newten.htm', 58, false),)), $this); ?>
<style type="text/css">
#newten
{
	margin: 0px;
	background: url("<?php echo $this->_tpl_vars['block']['dirname']; ?>
/templates/images/p_forum_main2_1.jpg") no-repeat;
	overflow: hidden;
	width: 416px;
	height: 35px;
}

#newten h1
{
	margin-top: 7px;
	margin-left: 30px;
	font-size: 10pt;
}

#newten h1 a
{
	color: #000000;
	text-decoration: none;
}

.top_content
{
	margin: 0px;
	background: url("<?php echo $this->_tpl_vars['block']['dirname']; ?>
/templates/images/p_forum_main_bg.jpg") repeat-y;
	overflow: hidden;
	padding: 0px 3px;
	font-size: 10pt;
	width: 410px;
}

.top_content a
{
	color: #666666;
	text-decoration: none;
}

.top_bottom
{
	margin: 0px;
	background: url("<?php echo $this->_tpl_vars['block']['dirname']; ?>
/templates/images/p_forum_main_down.jpg") no-repeat;
	width: 416px;
	height: 35px;
}
</style>

<div id="newten"><h1><a href="<?php echo $this->_tpl_vars['block']['dirname']; ?>
/question.php" title="所有問題列表">最新發問</a></h1></div>
<div class="top_content">
  <table border="0" cellpadding="3" cellspacing="0" style="border-collapse: collapse;" width="100%">
    <tr>
      <th>問題</th>
      <th align="right">更新時間</th>
    </tr>
<?php $_from = $this->_tpl_vars['block']['question']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
    <tr>
      <td><a href="<?php echo $this->_tpl_vars['block']['dirname']; ?>
/question.php?qno=<?php echo $this->_tpl_vars['item']['qno']; ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['question'])) ? $this->_run_mod_handler('htmlencode', true, $_tmp) : htmlencode($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['question'])) ? $this->_run_mod_handler('htmlencode', true, $_tmp) : htmlencode($_tmp)); ?>
</a></td>
      <td align="right"><?php echo $this->_tpl_vars['item']['posttime']; ?>
</td>
    </tr>
<?php endforeach; endif; unset($_from); ?>
  </table>
</div>
<div class="top_bottom"></div>