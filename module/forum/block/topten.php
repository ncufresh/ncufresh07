<?
if (!defined("MAINFILE_INCLUDED"))
	exit();

function forum_hottopic($dirname = null)
{
	$block = array();

	$block["desc"] = "十大熱門話題";

	$result = $GLOBALS["currdb"]->query("SELECT topic_no, title, numread FROM `".$GLOBALS["currdb"]->prefix("forum_topic")."` ORDER BY numread DESC LIMIT 0, 10");

	for ($i = 0;$tmp = $GLOBALS["currdb"]->fetch_array($result);$i++)
	{
		$block["topten"][$i] = $tmp;
		$block["topten"][$i]["no"] = $i + 1;
		$block["topten"][$i]["titles"] = mb__substr($block["topten"][$i]["title"], 0, 10)."...";
		$block["topten"][$i]["num"] = $tmp["numread"];
	}

	return $block;
}

function forum_hotreply($dirname = null)
{
	$block = array();

	$block["desc"] = "十大熱門回覆";

	$result = $GLOBALS["currdb"]->query("SELECT topic_no, title, numreply FROM `".$GLOBALS["currdb"]->prefix("forum_topic")."` ORDER BY numreply DESC LIMIT 0, 10");

	for ($i = 0;$tmp = $GLOBALS["currdb"]->fetch_array($result);$i++)
	{
		$block["topten"][$i] = $tmp;
		$block["topten"][$i]["no"] = $i + 1;
		$block["topten"][$i]["titles"] = mb__substr($block["topten"][$i]["title"], 0, 10)."...";
		$block["topten"][$i]["num"] = $tmp["numreply"];
	}

	return $block;	
}

function forum_hotnewt($dirname = null)
{
	$block = array();

	$block["p"] = 3;
	$block["desc"] = "最新發表主題";

	$result = $GLOBALS["currdb"]->query("SELECT topic_no, title, numreply FROM `".$GLOBALS["currdb"]->prefix("forum_topic")."` ORDER BY topic_no DESC LIMIT 0, 10");

	for ($i = 0;$tmp = $GLOBALS["currdb"]->fetch_array($result);$i++)
	{
		$block["topten"][$i] = $tmp;
		$block["topten"][$i]["no"] = $i + 1;
		$block["topten"][$i]["titles"] = mb__substr($block["topten"][$i]["title"], 0, 10)."...";
		$block["topten"][$i]["num"] = $tmp["numreply"];
	}

	return $block;
}
?>
