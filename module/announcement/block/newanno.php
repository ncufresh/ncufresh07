<?
if (!defined("MAINFILE_INCLUDED"))
	exit();
function newanno($dirname = null)
{
	$block = array();
	$result = $GLOBALS["currdb"]->query("SELECT * FROM`".$GLOBALS["currdb"]->prefix("anno_topic")."` ORDER BY top DESC, times DESC LIMIT 0,5");
	while($tmp = $GLOBALS["currdb"]->fetch_array($result))
	{
		$tmp[times] = date("Y-m-d H:i:s", $tmp[times]);
		$tmp["title"] = htmlencode($tmp["title"]);
		$tmp["content"] = mb__substr($tmp["content"], 0, 64);
		$tmp["content"] = replace($tmp["content"]);
		$tmp["content"] = nl2br($tmp["content"]);
		$tmp["content"] = $tmp["content"]."...<a href=\"topic.php?topic_no=".$tmp["topic_no"]."\"><詳全文></a>";
		$tmp["link"] = htmlencode($tmp["link"]);
		$block["ann"][] = $tmp;
	}
	return $block;
}
?>
