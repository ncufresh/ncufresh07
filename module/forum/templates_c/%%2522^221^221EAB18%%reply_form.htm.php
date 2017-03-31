<?php /* Smarty version 2.6.18, created on 2007-07-24 00:01:08
         compiled from reply_form.htm */ ?>
<div id="reply_f_button" style="text-align:right;"><input type="button" value="我要回覆" onclick="javascript: Element.show('reply_form'); Element.hide('reply_f_button');" /></div>
<div id="reply_form" style="display: none;">
  <form method="post" action="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/<?php echo $this->_tpl_vars['currmodule']->name; ?>
/do_reply.php" id="" name="">
    <table class="formTable">
      <tr>
        <th>回覆主題</th>
      </tr>
      <tr>
        <td><textarea name="content" rows="10" cols="60"></textarea></td>
      </tr>
      <tr>
        <td><input type="hidden" name="doreply" value="1" /><input type="hidden" name="tno" value="<?php echo $this->_tpl_vars['forumtopic']->topic_no; ?>
" /><input type="submit" value="確定" />&nbsp;&nbsp;<input type="reset" value="重填" />&nbsp;&nbsp;<input type="button" value="取消" onclick="javascript: Element.show('reply_f_button'); Element.hide('reply_form');" /></td>
      </tr>
    </table>
  </form>
</div>