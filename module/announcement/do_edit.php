<?
require_once("../../mainfile.php");

if (!$currmodule->isadmin($curruser))
	_redirect();
else
{
	$_GET["topic_no"] = intval($_GET["topic_no"]);
	$result = $currdb->query("SELECT * FROM `".$currdb->prefix("anno_topic")."` WHERE topic_no='".$_GET["topic_no"]."'");
	if ($currdb->num_rows($result) == 1)
	{
		$tagtmp = $_POST['tag'];
		$i = 0;
		$tag = 1;
		while ($tagtmp[$i] != 0)
		{
			$tag *= $tagtmp[$i];
			$i++;
		}

		$_POST["content"] = htmlencode($_POST["content"]);
		$_POST["content"] = str_replace("&amp;", "&", $_POST["content"]);

		$criteria = new CriteriaCompo(new Criteria("title", htmlencode($_POST["title"])));
		$criteria->add(new Criteria("content", $_POST["content"]));
		$criteria->add(new Criteria("tag", $tag));
		$criteria->add(new Criteria("times", mktime()));
		$criteria->add(new Criteria("top", $_POST["top"]));
		$criteria->add(new Criteria("poster_no", $curruser->uno));
		$criteria->add(new Criteria("link", htmlencode($_POST["link"])));
		$criteria->add(new Criteria("go_link", $_POST["go_link"]));
		$currdb->query("UPDATE `".$currdb->prefix("anno_topic")."` ".$criteria->updatesql()." WHERE topic_no='".$_GET["topic_no"]."'");

		_redirect(URL."/module/".$currmodule->name."/index.php");
	}
	else
		dies("沒有這篇公告");
}
?>
