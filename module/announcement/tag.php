<?
require_once("../../mainfile.php");

if (!$currmodule->isadmin($curruser))
	_redirect();
else if ($_GET["action"] == "delete")
{
	$_GET["tag_no"] = intval($_GET["tag_no"]);

	$currdb->query("UPDATE `".$currdb->prefix("anno_topic")."` SET tag=tag/".$_GET["tag_no"]." WHERE tag%".$_GET["tag_no"]."=0");
	$currdb->query("DELETE FROM `".$currdb->prefix("anno_tag")."` WHERE tag_no=".$_GET["tag_no"]);
	_redirect("index.php");
}
else if ($_GET["action"] == "add")
{
	if(!$_POST['title'])
		_redirect(URL."/module/".$currmodule->name."/form.php?action=tag");

	$tagall = array();
	$result = $currdb->query("SELECT tag_no FROM`".$currdb->prefix("anno_tag")."` ");

	while ($tmp = $currdb->fetch_array($result))
		$tagall[] = $tmp;

	$tag_no = 2;
	$i = 0;
	while ($tagall[$i][tag_no])
	{
		if($tag_no % $tagall[$i][tag_no] == 0)
		{
			$i = -1;
			$tag_no++;
		}
		$i++;
	}

	$_POST["title"] = htmlencode($_POST["title"]);

	$criteria = new CriteriaCompo(new Criteria("title", $_POST["title"]));
	$criteria->add(new Criteria("tag_no", $tag_no));
	$result2 = $currdb->query("SELECT title FROM`".$currdb->prefix("anno_tag")."` WHERE title='".$_POST["title"]."'");

	if( $tmp = $currdb->fetch_array($result2))
		dies("已有相同的類別名稱");
	else
		$currdb->query("INSERT INTO `".$currdb->prefix("anno_tag")."` ".$criteria->insertsql());

	_redirect("URL."/module/".$currmodule->name."/index.php");
}
?>
