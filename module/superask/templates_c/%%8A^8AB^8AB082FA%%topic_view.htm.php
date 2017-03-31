<?php /* Smarty version 2.6.18, created on 2007-08-09 21:31:42
         compiled from topic_view.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlencode', 'topic_view.htm', 81, false),array('modifier', 'nl2br', 'topic_view.htm', 202, false),array('modifier', 'urlencode', 'topic_view.htm', 226, false),)), $this); ?>
<script type="text/javascript">
<?php if (( ! $this->_tpl_vars['curruser']->isguest() )): ?>
	function subscribe(type, no)
	{
		var parms = 'subscr_' + type + '=1&no=' + no;

		var req = new Ajax.Request("<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/do_subscribe.php", {method: "post", parameters: parms, onComplete: function(q){alert('訂閱成功');}});
	}
<?php endif; ?>
<?php if (( $this->_tpl_vars['_WikiPost']->pno == $this->_tpl_vars['_WikiTopic']->currpost->pno && $this->_tpl_vars['curruser']->haveperm($this->_tpl_vars['curruser']->p_handler->getpermvalid()) )): ?>
	var qi = 0;

	function show_qform(id)
	{
		if (qi > 0)
			$('ans_' + qi).style.display = 'none';

		$('ans_' + id).style.display = 'block';

		qi = id;
	}

	function show_form(name)
	{
		if ($(name).style.display == 'none')
			new Effect.SlideDown($(name));
	}
<?php endif; ?>
</script>

<?php if (( $this->_tpl_vars['_WikiPost']->pno == $this->_tpl_vars['_WikiTopic']->currpost->pno )): ?>
<div id="comment_form" style="display: none;">
<?php if (( $this->_tpl_vars['_WikiTopic']->unlock($this->_tpl_vars['LOCK_COMM']) )): ?>
  <form action="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/do_topic.php" method="post">
    <table border="0" cellpadding="5" cellspacing="0" style="border-collapse: collapse;" align="center">
      <tr>
        <th>發表評論</th>
      </tr>
      <tr>
        <td><textarea id="comment" name="comment" rows="5" cols="25"></textarea></td>
      </tr>
      <tr>
        <td align="right"><input type="hidden" name="docomment" value="1" /><input type="hidden" name="tno" value=<?php echo $this->_tpl_vars['_WikiTopic']->tno; ?>
" /><input type="submit" value="送出" />&nbsp;<input type="button" value="取消" onclick="javascript: new Effect.SlideUp($('comment_form')); $('comment').value='';" /></td>
      </tr>
    </table>
  </form>
<?php else: ?>
  此主題已被鎖定&nbsp;&nbsp;
  <input type="button" value="確定" onclick="javascript: new Effect.SlideUp($('comment_form')); $('comment').value='';" />
<?php endif; ?>
  <p class="topic_form_bottom"></p>
</div>
<div id="qanda_form" style="display: none;">
<?php if (( $this->_tpl_vars['_WikiTopic']->unlock($this->_tpl_vars['LOCK_QUES']) )): ?>
  <form action="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/do_question.php" method="post">
    <table border="0" cellpadding="5" cellspacing="0" style="border-collapse: collapse;">
      <tr>
        <th>發表問題</th>
      </tr>
      <tr>
        <td><textarea id="question" name="question" rows="5" cols="25"></textarea></td>
      </tr>
      <tr>
        <td>相關主題 <input type="text" id="ref" name="ref" value="<?php echo $this->_tpl_vars['_WikiTopic']->title; ?>
," size="20"></td>
      </tr>
      <tr>
        <td align="right"><input type="hidden" name="doask" value="1" /><input type="submit" value="送出" />&nbsp;<input type="button" value="取消" onclick="javascript: new Effect.SlideUp($('qanda_form')); $('question').value=''; $('ref').value='<?php echo $this->_tpl_vars['_WikiTopic']->title; ?>
,';" /></td>
      </tr>
    </table>
  </form>
<?php else: ?>
  此主題已被鎖定&nbsp;&nbsp;
  <input type="button" value="確定" onclick="javascript: new Effect.SlideUp($('qanda_form')); $('comment').value='';" />
<?php endif; ?>
  <p class="topic_form_bottom"></p>
</div>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "topic_header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="topic_view_top">
  <h1><?php echo ((is_array($_tmp=$this->_tpl_vars['_WikiTopic']->title)) ? $this->_run_mod_handler('htmlencode', true, $_tmp) : htmlencode($_tmp)); ?>
</h1>
  <ul>
    <li<?php if (( $this->_tpl_vars['_WikiPost']->pno == $this->_tpl_vars['_WikiTopic']->currpost->pno && $this->_tpl_vars['curruser']->haveperm($this->_tpl_vars['curruser']->p_handler->getpermvalid()) )): ?> onclick="javascript: show_form('comment_form');"<?php endif; ?>>發表評論</li>
    <li<?php if (( $this->_tpl_vars['_WikiPost']->pno == $this->_tpl_vars['_WikiTopic']->currpost->pno && $this->_tpl_vars['curruser']->haveperm($this->_tpl_vars['curruser']->p_handler->getpermvalid()) )): ?> onclick="javascript: show_form('qanda_form');"<?php endif; ?>>發表問題</li>
  </ul>
</div>
<div class="topic_view_field">
  <div class="topic_view_content" style="font-size: 10pt;"><?php echo $this->_tpl_vars['_WikiPost']->content(); ?>
</div>
  <div class="topic_view_manage">
<?php if (( ! $this->_tpl_vars['curruser']->isguest() )): ?>
    <a href="javascript: subscribe('topic', '<?php echo $this->_tpl_vars['_WikiTopic']->tno; ?>
');" title="訂閱主題"><img src="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/templates/images/p_subscribeicon1.gif" border="0" alt="訂閱主題" /></a><br />
<?php endif; ?>
<?php if (( $this->_tpl_vars['_WikiPost']->pno != $this->_tpl_vars['_WikiTopic']->currpost->pno )): ?>
    <a href="javascript: document.location.href = '<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/view.php?pno=<?php echo $this->_tpl_vars['_WikiTopic']->currpost->pno; ?>
'" title="目前版本" class="topic_manage">目前版本</a><br />
<?php else: ?>
    <a href="javascript: document.location.href = '<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/allversion.php?tno=<?php echo $this->_tpl_vars['_WikiTopic']->tno; ?>
'" title="編修紀錄" class="topic_manage">編修紀錄</a><br />
<?php endif; ?>

<?php if (( $this->_tpl_vars['curruser']->haveperm($this->_tpl_vars['curruser']->p_handler->getpermvalid()) )): ?>
    <a href="javascript: document.location.href = '<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/do_topic.php?newpost=1&pno=<?php echo $this->_tpl_vars['_WikiPost']->pno; ?>
'" title="編輯" class="topic_manage">編輯</a><br />
    <a href="javascript: document.location.href = '<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/do_topic.php?impeach=1&no=<?php echo $this->_tpl_vars['_WikiPost']->pno; ?>
'" title="檢舉" class="topic_manage">檢舉</a>
<?php if (( $this->_tpl_vars['_WikiPost']->impeach > 0 )): ?>
    <img src="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/templates/images/warn.gif" border="0" />
<?php endif; ?>
<?php endif; ?>
  </div>
</div>
<p class="topic_view_bottom"></p>

<?php if (( $this->_tpl_vars['_WikiPost']->pno == $this->_tpl_vars['_WikiTopic']->currpost->pno )): ?>
<style type="text/css">
#extend_menu
{
	margin-top: 10px;
	border-bottom: 1px solid #C1C1C1;
	width: 615px;
	height: 24px;
}

#extend_menu ul
{
	margin: 0px;
	list-style-type: none;
	display: inline;
}

#extend_menu li
{
	float: left;
	margin: 0px;
	display: block;
	cursor: pointer;
	padding: 1px 10px;
	width: 85px;
	height: 23px;
}

#cbutton
{
	background: url("<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/templates/images/c_extend_menu1.jpg") no-repeat;
}

#qbutton
{
	background: url("<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/templates/images/c_extend_menu2.jpg") no-repeat;
}
</style>

<script type="text/javascript">
	function topic_extend(show)
	{
		if (show == 1)
		{
			$('topic_comment').style.display = 'block';
			$('topic_qanda').style.display = 'none';

			$('cbutton').style.background = 'url(<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/templates/images/c_extend_menu1_2.jpg)';
			$('qbutton').style.background = 'url(<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/templates/images/c_extend_menu2.jpg)';
		}
		else
		{
			$('topic_comment').style.display = 'none';
			$('topic_qanda').style.display = 'block';

			$('cbutton').style.background = 'url(<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/templates/images/c_extend_menu1.jpg)';
			$('qbutton').style.background = 'url(<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/templates/images/c_extend_menu2_2.jpg)';
		}
	}
</script>

<div id="extend_menu">
  <ul>
    <li id="cbutton" onclick="javascript: topic_extend(1)">評論 (<?php echo $this->_tpl_vars['numcomment']; ?>
)</li>
    <li id="qbutton" onclick="javascript: topic_extend(2)">問答 (<?php echo $this->_tpl_vars['numqanda']; ?>
)</li>
  </ul>
</div>

<div id="topic_comment" style="margin-left: 10px; display: none; width: 585px;">
  <table border="0" cellpadding="2" cellspacing="0" style="border-collapse: collapse;" width="100%">
<?php $_from = $this->_tpl_vars['_WikiTopic']->comment; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['comment']):
?>
    <tr>
      <td style="letter-spacing: 1pt;"><a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/system/show_pfile.php?uno=<?php echo $this->_tpl_vars['comment']['poster_no']; ?>
" title=""><?php echo ((is_array($_tmp=$this->_tpl_vars['comment']['poster_name'])) ? $this->_run_mod_handler('htmlencode', true, $_tmp) : htmlencode($_tmp)); ?>
</a>→<?php echo ((is_array($_tmp=$this->_tpl_vars['comment']['comment'])) ? $this->_run_mod_handler('htmlencode', true, $_tmp) : htmlencode($_tmp)); ?>
</td>
      <td align="right">(<?php echo $this->_tpl_vars['comment']['posttime']; ?>
)
<?php if (( $this->_tpl_vars['_WikiTopic']->ismanager() )): ?>
<a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/do_topic.php?delcomment=1&mno=<?php echo $this->_tpl_vars['comment']['mno']; ?>
" title="刪除">刪除</a>
<?php endif; ?>
</td>
    </tr>
<?php endforeach; endif; unset($_from); ?>
  </table>
</div>

<div id="topic_qanda" style="margin-top: 10px; display: none;">
<?php $_from = $this->_tpl_vars['_WikiTopic']->qanda; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qanda']):
?>
  <p class="reply_top"></p>
  <div class="reply_content">
    <table border="0" cellpadding="5" cellspacing="0" style="border-collapse: collapse;" width="100%">
      <tr>
        <td><a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/system/show_pfile.php?uno=<?php echo $this->_tpl_vars['qanda']['poster_no']; ?>
" title=""><?php echo ((is_array($_tmp=$this->_tpl_vars['qanda']['poster_id'])) ? $this->_run_mod_handler('htmlencode', true, $_tmp) : htmlencode($_tmp)); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['qanda']['poster_name'])) ? $this->_run_mod_handler('htmlencode', true, $_tmp) : htmlencode($_tmp)); ?>
)</a> 問：</td>
      </tr>
      <tr>
        <td style="padding: 5px 10px; letter-spacing: 1pt;"><font color="#333333"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['qanda']['question'])) ? $this->_run_mod_handler('htmlencode', true, $_tmp) : htmlencode($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</font></td>
      </tr>
<?php if (( ! $this->_tpl_vars['curruser']->isguest() )): ?>
      <tr>
        <td align="right">at <?php echo $this->_tpl_vars['qanda']['posttime']; ?>
 
<?php if (( $this->_tpl_vars['currmodule']->isadmin($this->_tpl_vars['curruser']) )): ?>&nbsp;&nbsp;<a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/do_question.php?delques=1&qno=<?php echo $this->_tpl_vars['qanda']['qno']; ?>
" title="刪除問題">刪除問題</a><?php endif; ?>
<?php if (( ! $this->_tpl_vars['curruser']->isguest() )): ?>&nbsp;&nbsp;<a href="javascript: subscribe('qanda', '<?php echo $this->_tpl_vars['qanda']['qno']; ?>
');" title="訂閱問題"><img src="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/templates/images/p_subscribeicon2.jpg" border="0" alt="訂閱問題" /></a><?php endif; ?>
        </td>
      </tr>
<?php endif; ?>
<?php if (( $this->_tpl_vars['qanda']['answer'] )): ?>
      <tr>
        <td style="border-top: 1px dotted #000000;">[最佳解答]</td>
      </tr>
      <tr>
        <td><a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/system/show_pfile.php?uno=<?php echo $this->_tpl_vars['qanda']['answer']['poster_no']; ?>
" title=""><?php echo ((is_array($_tmp=$this->_tpl_vars['qanda']['answer']['poster_id'])) ? $this->_run_mod_handler('htmlencode', true, $_tmp) : htmlencode($_tmp)); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['qanda']['answer']['poster_name'])) ? $this->_run_mod_handler('htmlencode', true, $_tmp) : htmlencode($_tmp)); ?>
)</a>答：</td>
      </tr>
      <tr>
        <td style="padding: 5px 10px;"><font color="#333333"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['qanda']['answer']['answer'])) ? $this->_run_mod_handler('htmlencode', true, $_tmp) : htmlencode($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</font></td>
      </tr>
      <tr>
        <td>相關主題：
<?php $_from = $this->_tpl_vars['qanda']['ref']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ref']):
?>
<?php if (( $this->_tpl_vars['ref'] )): ?>
          <a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/view.php?title=<?php echo ((is_array($_tmp=$this->_tpl_vars['ref'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
" title=""><?php echo $this->_tpl_vars['ref']; ?>
</a>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
        </td>
      </tr>
      <tr>
        <td align="right">at <?php echo $this->_tpl_vars['qanda']['answer']['posttime']; ?>
</td>
      <tr>
<?php else: ?>
      <tr>
        <td align="right">共有 <?php echo $this->_tpl_vars['qanda']['numans']; ?>
 篇回答&nbsp;&nbsp;<a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/question.php?qno=<?php echo $this->_tpl_vars['qanda']['qno']; ?>
" title="">觀看此問題的回答</a>&nbsp;&nbsp;
<?php if (( $this->_tpl_vars['curruser']->haveperm($this->_tpl_vars['curruser']->p_handler->getpermvalid()) )): ?>
          <a href="javascript: show_qform(<?php echo $this->_tpl_vars['qanda']['qno']; ?>
)" title="回答問題">回答問題</a>
          <div id="ans_<?php echo $this->_tpl_vars['qanda']['qno']; ?>
" style="display: none">
            <form method="post" action="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/do_question.php">
              <textarea name="answer" rows="5" cols="50"></textarea><br />
              相關主題：<input type="text" name="ref" size="20" /><br />
              <input type="hidden" name="doanswer" value="1" /><input type="hidden" name="qno" value="<?php echo $this->_tpl_vars['qanda']['qno']; ?>
" /><input type="submit" value="確定" />
            </form>
          </div>
<?php endif; ?>
        </td>
      </tr>
<?php endif; ?>
    </table>
  </div>
  <p class="reply_bottom"></p>
<?php endforeach; endif; unset($_from); ?>
</div>
<?php endif; ?>