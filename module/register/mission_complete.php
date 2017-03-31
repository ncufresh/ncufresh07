<?
	require_once("../../mainfile.php");

	if(($curruser->haveperm($curruser->p_handler->getpermvalid()) && (!strcasecmp("96",substr($curruser->sid,0,2)))) || $currmodule->isadmin($curruser))
	{
		$result=$currdb->query("select * from " .$currdb->prefix("mission_user"). " where uno='" .$curruser->uno. "'");
		if($currdb->num_rows($result)>0)
		{
			$a=$currdb->fetch_array($result);
		}
		if($_POST['priority']==1)
		{
			$flag=$a['completepriority'].','.$_POST['mno'];
			$currdb->query("update " .$currdb->prefix("mission_user"). " set completepriority='" .$flag. "' where uno='" .$curruser->uno. "'");
		}
		else
		{
			$flag=$a['completesecondary'].','.$_POST['mno'];
			$currdb->query("update " .$currdb->prefix("mission_user"). " set completesecondary='" .$flag. "' where uno='" .$curruser->uno. "'");
		}
		header("location:index.php");
	}
	else
	{
		_redirect();
	}
?>