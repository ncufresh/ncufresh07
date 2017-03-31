<?
$fuckok = 1;

require_once("../../mainfile.php");

$select = "topic";

$result = $currdb->query("SELECT * FROM`".$currdb->prefix("anno_topic")."` WHERE topic_no='".intval($_GET["topic_no"])."'");

if ($topic = $currdb->fetch_array($result))
{
	$block_handler =& gethandler("block");
	$c_block = $block_handler->getblockbyno(3)->fetch();
	$c_block2 = $block_handler->getblockbyno(17)->fetch();

	$topic["times"] = date("Y-m-d H:i:s", $topic["times"]);
	$topic["content"] = replace($topic["content"]);
	$topic["content"] = nl2br($topic["content"]);
	$topic["link"] = $topic["link"];
	$topicfile["file_name"] = explode(",", $topic["file_name"]);
	$topicfile["file"] = explode(",", $topic["file"]);

	$file = array();
	$i = 0;

	while ($topicfile["file_name"][$i])
	{
		$tmp["file_name"] = $topicfile["file_name"][$i];
		$tmp["file_file"] = $topicfile["file"][$i];
		$file[] = $tmp;
		$i++;
	}

	$currtpl->assign("c_block", $c_block);
	$currtpl->assign("c_block2", $c_block2);
	$currtpl->assign("file", $file);
	$currtpl->assign("topic", $topic);
	$currtpl->assign("select", $select);
	$currtpl->display("showtopic.htm");
}
else
	dies("這篇公告不存在");
?>
