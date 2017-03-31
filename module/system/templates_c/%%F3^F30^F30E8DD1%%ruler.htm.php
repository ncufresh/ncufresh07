<?php /* Smarty version 2.6.18, created on 2007-08-08 18:42:01
         compiled from block/ruler.htm */ ?>
<?php if (( $this->_tpl_vars['curruser']->isguest() || $this->_tpl_vars['fuckok'] )): ?>
<style type="text/css">
#icon_bbs
{
	margin: 0px;
	background: url("<?php echo $this->_tpl_vars['block']['dirname']; ?>
/templates/images/icon_bbs.gif") no-repeat;
	list-style-type: none;
	padding: 5px;
	width: 160px;
	height: 57px;
}

#icon_bbs li
{
	float: left;
}

#icon_bbs li a
{
	display: block;
	text-indent: -5000px;
	width: 79px;
	height: 53px;
}
</style>

<div style="margin: 5px 0px; text-align: center;">
  <ul id="icon_bbs">
    <li><a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/teach/course/Index.html" title="選課教學" target="_blank">選課教學</a></li>
    <li><a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/teach/bbs/index1.htm" title="BBS 教學" target="_blank">BBS 教學</a></li>
  </ul>
  <p><img src="<?php echo $this->_tpl_vars['block']['dirname']; ?>
/templates/images/ruler.jpg" border="0" width="170" height="400" /></p>
</div>
<?php endif; ?>