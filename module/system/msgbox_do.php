<?
require_once("../../mainfile.php");

if (!$curruser->isguest())
{
	$read = 1;
	$unread = 2;

	if (isset($_GET["msgread"]) && isset($_GET["mno"]))
	{
		$criteria = new CriteriaCompo(new Criteria("m.owner_no", $curruser->uno));
		$criteria->add(new Criteria("mno", $_GET["mno"]));

		$result = $currdb->query("SELECT m.*, u.uid as sender_id FROM `".$currdb->prefix("msg")."` m LEFT JOIN `".$currdb->prefix("user")."` u ON m.sender_no=u.uno WHERE ".$criteria->render());
			
		if ($currdb->num_rows($result) < 1)
			dies("找不到此訊息");

		$tmp = $currdb->fetch_array($result);

		//turn status
		if($tmp["status"] == $unread)
		{
			$status = ($tmp["status"] == $read) ? $unread : $read;
			$currdb->query("UPDATE `".$currdb->prefix("msg")."` m SET status='".$status."' WHERE ".$criteria->render());
		}

		$tmp["content"] = nl2br($tmp["content"]);
		$currtpl->assign("mno", $tmp["mno"]);
		$currtpl->assign("sender_no", $tmp["sender_no"]);
		$currtpl->assign("sender_id", $tmp["sender_id"]);
		$currtpl->assign("title", $tmp["title"]);
		$currtpl->assign("content", $tmp["content"]);
		$currtpl->assign("time", date("Y-m-d H:i:s", $tmp["time"]));

		$currtpl->display("msg_read.htm");
	}
	else if (isset($_GET["msgdel"]) && isset($_GET["mno"]))
	{
		$criteria = new CriteriaCompo(new Criteria("owner_no", $curruser->uno));
		$criteria->add(new Criteria("mno", $_GET["mno"]));

		$currdb->query("DELETE From `".$currdb->prefix("msg")."` where ".$criteria->render());

		_redirect(URL."/module/".$currmodule->name."/msgbox.php");
	}
	else if (isset($_GET["unread"]))
	{
		$currtpl->setndisplay();
	
		$result = $currdb->query("SELECT * FROM `".$currdb->prefix("msg")."` where owner_no='".$curruser->uno."' and status='".$unread."'");
		
		echo $currdb->num_rows($result);
	}
}
else
	_redirect();
?>
