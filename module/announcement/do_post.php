<?
require_once("../../mainfile.php");

if (!$currmodule->isadmin($curruser))
	_redirect();
else
{
	if (!$_POST['title'] || !$_POST['content'])
		_redirect();
	else
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

		$currdb->query("INSERT INTO `".$currdb->prefix("anno_topic")."` ".$criteria->insertsql());

		_redirect(URL."/module/".$currmodule->name."/index.php?tag_no=0");
	}
}
?>