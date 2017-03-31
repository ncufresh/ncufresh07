<?
	require_once("../../../mainfile.php");
	
	if($currmodule->isadmin($curruser))
	{
		$count=$currdb->query("SELECT * FROM `".$currdb->prefix("cloth_count")."`");
		$total=array();
		for($m=0;$flag=$currdb->fetch_array($count);$m++)
			array_push($total,$flag);
			
		$currtpl->assign_by_ref("total",$total);
		$currtpl->display("admin.tpl");
	}
	else
	{
		_redirect();
	}
?>