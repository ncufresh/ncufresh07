<?php /* Smarty version 2.6.18, created on 2007-08-16 17:01:46
         compiled from show_pfile.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlencode', 'show_pfile.htm', 28, false),array('modifier', 'nl2br', 'show_pfile.htm', 36, false),)), $this); ?>
<script type="text/javascript">
	function add_friend2(fid)
	{
		var parms = 'add_friend=1&fid=' + fid;

		var req = new Ajax.Request("<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/friendlist_ajax.php", {method: "post", parameters: parms, onComplete: function (q){alert('已加入好友名單');}});
	}
</script>
<p class="field_top">使用者資料</p>
<div class="field_content">
  <table border="0" cellpadding="10" cellspacing="0" style="border-collapse: collapse;" width="100%">
    <tr>
      <th colspan="5"><?php echo $this->_tpl_vars['user']->uid; ?>
(<?php if (( $this->_tpl_vars['user']->isonline() == 1 )): ?>正在線上<?php else: ?>不在線上<?php endif; ?>)</th>
    </tr>
    <tr>
      <td width="25%">暱稱</td>
      <td width="25%"><?php echo $this->_tpl_vars['user']->name; ?>
</td>
      <td colspan="2" align="right" width="50%"><?php if (( ! $this->_tpl_vars['curruser']->isguest() )): ?><a href="javascript: add_friend2('<?php echo $this->_tpl_vars['user']->uid; ?>
')" title="加入好友" style="text-decoration: none;"><img src="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/templates/images/p_friendadd.gif" border="0" /> 加為好友</a>&nbsp;&nbsp;<a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/msgsend.php?fno=<?php echo $this->_tpl_vars['user']->uno; ?>
" title="傳送訊息" style="text-decoration: none;"><img src="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/templates/images/p_friendmail.gif" border="0" /> 傳送訊息</a><?php endif; ?></td>
    </tr>
    <tr>
      <td width="25%">性別</td>
      <td width="25%"><?php echo $this->_tpl_vars['user']->sex; ?>
</td>
      <td width="25%">系所</td>
      <td width="25%"><?php echo $this->_tpl_vars['user']->department; ?>
</td>
    </tr>
    <tr>
      <td width="25%">首頁</td>
      <td colspan="3" width="82%"><?php if (( $this->_tpl_vars['user']->website )): ?><a href="http://<?php echo ((is_array($_tmp=$this->_tpl_vars['user']->website)) ? $this->_run_mod_handler('htmlencode', true, $_tmp) : htmlencode($_tmp)); ?>
" target="_blank" title="個人首頁">請按我</a><?php else: ?>無<?php endif; ?></td>
    </tr>
    <tr>
      <td width="25%">電子信箱</td>
      <td colspan="3" width="82%"><?php if (( $this->_tpl_vars['user']->email )): ?><a href="mailto:<?php echo ((is_array($_tmp=$this->_tpl_vars['user']->email)) ? $this->_run_mod_handler('htmlencode', true, $_tmp) : htmlencode($_tmp)); ?>
" title="電子信箱"><?php echo ((is_array($_tmp=$this->_tpl_vars['user']->email)) ? $this->_run_mod_handler('htmlencode', true, $_tmp) : htmlencode($_tmp)); ?>
</a><?php else: ?>無<?php endif; ?></td>
    </tr>
    <tr>
      <td width="25%">自我介紹</td>
      <td colspan="3" width="82%"><?php echo ((is_array($_tmp=$this->_tpl_vars['user']->intro)) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
    </tr>
  </table>
</div>
<p class="field_bottom"></p>