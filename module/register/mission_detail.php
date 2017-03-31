<?
	require_once("../../mainfile.php");
	
	if(($curruser->haveperm($curruser->p_handler->getpermvalid()) && (!strcasecmp("96",substr($curruser->sid,0,2)))) || $currmodule->isadmin($curruser))
	{
		$result=$currdb->query("select * from " .$currdb->prefix("mission_schedule"). " where mno='" .$_REQUEST['mno']. "'");
		if($currdb->num_rows($result)>0)
		{
			$detail=$currdb->fetch_array($result);
			$detail["detail"] = ereg_replace("http://[a-zA-Z0-9~_/?&%.-=]*", "<a href=\"\\0\" target=\"_blank\">\\0</a>", $datail["detail"]);
		}
		$currtpl->assign_by_ref("mno",$detail['mno']);
		$currtpl->assign_by_ref("priority",$detail['priority']);
		$currtpl->assign_by_ref("title",$detail['title']);
		$currtpl->assign_by_ref("detail",nl2br($detail['detail']));
		$currtpl->assign_by_ref("datebegin",$detail['datebegin']);
		$currtpl->assign_by_ref("datelast",$detail['datelast']);
		$currtpl->assign_by_ref("link",$detail['link']);
		$currtpl->assign_by_ref("state",$detail['state']);
		$currtpl->assign_by_ref("complete",$_REQUEST['com']);
		$currtpl->assign_by_ref("admin",$curruser->haveperm($curruser->p_handler->getpermadmin()));
		$currtpl->display("mission_detail.tpl");
	}
	else
	{
		_redirect();
	}
?>
