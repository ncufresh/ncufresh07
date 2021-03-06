<?php /* Smarty version 2.6.18, created on 2007-08-16 12:10:02
         compiled from block/friendlist.htm */ ?>
<?php if (( ! $this->_tpl_vars['curruser']->isguest() && ! $this->_tpl_vars['fuckok'] )): ?>
<style type="text/css">
#block_flist
{
	margin: 0px;
	width: 170px;
	height: 400px;
}

#block_flist ul
{
	margin: 0px;
	list-style-type: none;
	display: inline;
}

#block_flist li
{
	float: left;
	margin: 0px;
	display: block;
	width: 70px;
	height: 25px;
}

#flistDiv
{
	clear: both;
	background: url("<?php echo $this->_tpl_vars['block']['dirname']; ?>
/templates/images/friendlist.jpg") no-repeat;
	padding: 5px;
	width: 160px;
	height: 370px;
}

#flistShow
{
	overflow-x: hidden;
	overflow-y: auto;
	padding: 5px;
	width: 150px;
	height: 350px;
}

#flistShow a
{
	margin: auto 1px;
	color: #000000;
}
</style>

<script type="text/javascript">
	var listtype = <?php echo $this->_tpl_vars['block']['listtype']; ?>
;

	function show_friend_list(req)
	{
		var fno = req.responseXML.getElementsByTagName("fno");
		var fid = req.responseXML.getElementsByTagName("fid");

		var fl = (listtype == 1) ? 1 : 2;

		$('friend_button').style.background = 'url(<?php echo $this->_tpl_vars['block']['dirname']; ?>
/templates/images/c_friendlist_' + fl + '.jpg)';

		fl = 3 - fl;

		$('online_button').style.background = 'url(<?php echo $this->_tpl_vars['block']['dirname']; ?>
/templates/images/c_onlinelist_' + fl + '.jpg)';

		var friend = '<table border="0" cellspacing="0" cellpadding="0" style="border-collapse: collapse">\n';

		for (var i = 0;i < fid.length;i++)
		{
			var fno_data = (fno.item(i).firstChild) ? fno.item(i).firstChild.data : '';
			var fid_data = (fid.item(i).firstChild) ? fid.item(i).firstChild.data : '';

			friend = friend + '  <tr>\n    <td><a href="<?php echo $this->_tpl_vars['block']['dirname']; ?>
/msgsend.php?fno=' + fno_data + '" title="傳送訊息"><img src="<?php echo $this->_tpl_vars['block']['dirname']; ?>
/templates/images/p_friendmail.gif" alt="傳送訊息" border="0" /></a><a href="<?php echo $this->_tpl_vars['block']['dirname']; ?>
/show_pfile.php?uno=' +  fno_data + '" title="觀看使用者資料">' + fid_data + '</a></td>\n  </tr>\n';
		}

		friend = friend + '</table>\n';

		$('flistShow').innerHTML = friend;
	}

	function get_friend_list()
	{
		var parms = "listtype=" + listtype;

		var req = new Ajax.Request("<?php echo $this->_tpl_vars['block']['dirname']; ?>
/block/friendlist_ajax.php", {method: "post", parameters: parms, onComplete: show_friend_list});

		setTimeout(get_friend_list, 30 * 1000);
	}

	function turn_friend_list(p)
	{
		listtype = (p == 1 || p == 2) ? p : listtype;

		get_friend_list();
	}

	get_friend_list();
</script>
 <div id="block_flist">
   <ul>
     <li id="friend_button" onclick="javascript: turn_friend_list(1);" style="cursor: pointer; text-indent: -5000px;">好友名單</li>
     <li id="online_button" onclick="javascript: turn_friend_list(2);" style="cursor: pointer; text-indent: -5000px;">線上名單</li>
   </ul>
   <div id="flistDiv">
     <div id="flistShow"></div>
   </div>
 </div>
<?php endif; ?>