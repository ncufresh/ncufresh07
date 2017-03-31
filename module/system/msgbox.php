<?
require_once("../../mainfile.php");

if (!$curruser->isguest())
{
	$page = (intval($_GET["page"]) <= 0) ? 1 : intval($_GET["page"]);

	//get all msgs
	$page_first_msg = ($page - 1) * 10;

	$criteria = new CriteriaCompo(new Criteria("m.owner_no", $curruser->uno));
	$order = ($order) ? $order : "mno";

	$pri = ($pri == "asc") ? "asc" : "desc";

	$result = $currdb->query("SELECT SQL_CALC_FOUND_ROWS m.*, u.uid as sender_id FROM `".$currdb->prefix("msg")."` m LEFT JOIN `".$currdb->prefix("user")."` u ON m.sender_no=u.uno WHERE ".$criteria->render()." ORDER BY ".$order." ".$pri." LIMIT ".$page_first_msg.", 10");

	for ($i = 0;$tmp = $currdb->fetch_array($result);$i++)
	{
		$mno[$i] = $tmp["mno"];
		$sender_no[$i] = $tmp["sender_no"];
		$sender_id[$i] = $tmp["sender_id"];
		$title[$i] = $tmp["title"];
		$time[$i] = date("Y-m-d H:i", $tmp["time"]);
		$status[$i] = $tmp["status"];
	}

	$result = $currdb->query("SELECT FOUND_ROWS()");

	$how_many_msgs = $currdb->fetch_array($result);

	$how_many_msgs = $how_many_msgs[0];

	$maxpage = ($how_many_msgs % 10 == 0) ? intval($how_many_msgs / 10) : intval($how_many_msgs / 10 + 1);

	$page = ($page > $maxpage) ? $maxpage : $page;	

	$p = multipage($page, $maxpage, URL."/module/".$currmodule->name."/msgbox.php");
	$currtpl->assign("num", $how_many_msgs);
	$currtpl->assign("p", $p);

	$currtpl->assign("mno", $mno);
	$currtpl->assign("sender_no", $sender_no);
	$currtpl->assign("sender_id", $sender_id);
	$currtpl->assign("title", $title);
	$currtpl->assign("time", $time);
	$currtpl->assign("status", $status);
	$currtpl->display("msg_box.htm");
}
else
	_redirect();
?>
