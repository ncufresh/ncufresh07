<?
$fuckok = 1;

require_once("../../mainfile.php");

$block_handler =& gethandler("block");
$c_block = $block_handler->getblockbyno(3)->fetch();
$c_block2 = $block_handler->getblockbyno(17)->fetch();

$topics = array();
$result = $currdb->query("SELECT * FROM`".$currdb->prefix("anno_topic")."` ORDER BY top DESC, times DESC LIMIT 0, 4");

while ($tmp = $currdb->fetch_array($result))
{
	$tmp["times"] = date("Y-m-d H:i:s", $tmp["times"]);
	$tmp["content"] = mb__substr($tmp["content"], 0, 32);
	$tmp["content"] = nl2br($tmp["content"]);
//	$tmp["content"] = replace($tmp["content"]);
	$topics[] = $tmp;
}

$select = "index";

$currtpl->assign("c_block", $c_block);
$currtpl->assign("c_block2", $c_block2);
$currtpl->assign("select", $select);
$currtpl->assign("topics", $topics);
$currtpl->display("mainpage.htm");
?>
