<?
require_once("../../mainfile.php");

if (!$currmodule->isadmin($curruser))
	_redirect();
else if ($_GET["action"] == "tag")
	$currtpl->display("add_tag.htm");
else
{
	$tag = array();
	$result = $currdb->query("SELECT * FROM`".$currdb->prefix("anno_tag")."` ");

	while($tmp = $currdb->fetch_array($result))
		$tag[] = $tmp;

	if ($_GET["action"] == "post")
	{
		$currtpl->assign("tag",$tag);
		$currtpl->display("post_form.htm");
	}
	else if ($_GET["action"] == "edit")
	{
		$result = $currdb->query("SELECT * FROM`".$currdb->prefix("anno_topic")."` WHERE topic_no='".intval($_GET["topic_no"])."'");

		if($topic = $currdb->fetch_array($result))
		{
			$topic["title"] = htmlencode($topic["title"]);
			$topic["content"] = htmlencode($topic["content"]);
			$topic["link"] = htmlencode($topic["link"]);
			$topic["file_name"] = explode(",", $topic["file_name"]);
			$topic["file"] = explode(",", $topic["file"]);
			$file = array();
			$i = 0;
			while ($topic["file_name"][$i])
			{
				$tmp["file_name"] = $topic["file_name"][$i];
				$tmp["file_file"] = $topic["file"][$i];
				$tmp["fno"] = $i;
				$file[] = $tmp;
				$i++;
			}
			$currtpl->assign("file", $file);
			$currtpl->assign("tag", $tag);
			$currtpl->assign("topic", $topic);
			$currtpl->display("edit.htm");
		}
		else
			dies("沒有這篇公告");
	}
}
?>
