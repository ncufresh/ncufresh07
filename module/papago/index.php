<?php
require_once("../../mainfile.php");
if($currmodule->isadmin($curruser) && $_GET["action"] == "view")
{
	$who = array("1" => 0,"2"=>0,"3"=>0,"4"=>0);
	$winner = array();
	$result = $currdb->query("SELECT * FROM `".$currdb->prefix("papago_question")."` order by time DESC");
	while($tmp = $currdb->fetch_array($result))
	{
		$who[$tmp["favorite"]]++;
		if($tmp["answer"])
		{
			$tmp["time"] = date("Y-m-d H:i",$tmp["time"]);
			$winner[] = $tmp;
		}
	}
	$currtpl->assign("who",$who);
	$currtpl->assign("winner",$winner);
	$currtpl->display("view.htm");
}
else
{
	if($curruser->haveperm($curruser->p_handler->getpermvalid()) && (!strcasecmp("96",substr($curruser->sid,0,2))))
	{
		$result = $currdb -> query("SELECT * FROM `".$currdb -> prefix("papago_question")."` where id='".$curruser -> uno."'");
		$user["done"] = ($currdb -> num_rows($result) > 0)?true:false;
		$currtpl->assign("user",$user);
		$currtpl->assign("finish",true);
		$currtpl->display("map.htm");
	}
	else
	{
		$user["done"] = true;
		$currtpl->assign("user",$user);
		$currtpl->display("map.htm");
	}


}
?>
