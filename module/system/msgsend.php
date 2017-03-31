<?
require_once("../../mainfile.php");

if (!$curruser->isguest())
{
	$read = 1;
	$unread = 2;
	if (!empty($_POST["fid"]) && !empty($_POST["title"]) && !empty($_POST["content"]))
	{
		$owner_no = $curruser->u_handler->getuserbyid($_POST["fid"])->uno;
		
		if ($owner_no > 0)
		{
			$title = htmlencode($_POST["title"]);
			$content = htmlencode($_POST["content"]);

			if ($curruser->uno > 0 && $owner_no > 0)
			{
				$criteria = new CriteriaCompo(new Criteria("mno", ""));
				$criteria->add(new Criteria("sender_no", $curruser->uno));
				$criteria->add(new Criteria("owner_no", $owner_no));
				$criteria->add(new Criteria("title", $title));
				$criteria->add(new Criteria("content", $content));
				$criteria->add(new Criteria("time", mktime()));
				$criteria->add(new Criteria("status", $unread));


				$currdb->query("INSERT INTO `".$currdb->prefix("msg")."` ".$criteria->insertsql());
			}

			dies("訊息傳送成功", URL."/module/".$currmodule->name."/msgbox.php");
		}
		else
			echo "錯誤的使用者帳號";
	}
	else
	{
		if (isset($_GET["fno"]) || isset($_GET["msgreply"]))
		{
			$fid = "";
			$title = "";

			if (isset($_GET["fno"]))
				$fid = $curruser->u_handler->getuserbyno($_GET["fno"])->uid;

			if (isset($_GET["title"]))
				$title = $_GET["title"];

			$currtpl->assign("fid", $fid);
			$currtpl->assign("title", $title);
		}

		$currtpl->display("msg_send_form.htm");
	}
}
else
	_redirect();
?>
