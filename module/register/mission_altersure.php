<?
	require_once("../../mainfile.php");

	if($currmodule->isadmin($curruser))
	{
		$currdb->query("update " .$currdb->prefix("mission_schedule"). " set title='" .$_POST['title']. "' , datebegin='" .$_POST['datebegin']. "' , datelast='" .$_POST['datelast']. "' , link='" .$_POST['link']. "' , detail='" .htmlencode($_POST['detail']). "' where mno='" .$_POST['mno']. "'");
		header("location:index.php");
	}
	else
	{
		_redirect();
	}
?>