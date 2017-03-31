<?
	require_once("../../mainfile.php");

	if($currmodule->isadmin($curruser))
	{
		$result=$currdb->query("select * from " .$currdb->prefix("mission_schedule"). " where mno='" .$_REQUEST['mno']. "'");
		if($currdb->num_rows($result)>0)
		{
			$detail=$currdb->fetch_array($result);
			$currtpl->assign_by_ref("mno",$detail['mno']);
			$currtpl->assign_by_ref("title",$detail['title']);
			$currtpl->assign_by_ref("detail",$detail['detail']);
			$currtpl->assign_by_ref("datebegin",$detail['datebegin']);
			$currtpl->assign_by_ref("datelast",$detail['datelast']);
			$currtpl->assign_by_ref("link",$detail['link']);
			$currtpl->display("mission_alter.tpl");
		}
	}
	else
	{
		_redirect();
	}
?>