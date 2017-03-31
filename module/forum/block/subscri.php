<?
if (!defined("MAINFILE_INCLUDED"))
	exit();

function subscribe_board($dirname = null)
{
	if (!$GLOBALS["curruser"]->isguest())
	{
		$result = $GLOBALS["currdb"]->query("SELECT no, status FROM `".$GLOBALS["currdb"]->prefix("forum_subscribe")."` WHERE user_no='".$GLOBALS["curruser"]->uno."' and type='board'");

		$block = array();

		$block["type"] = "board";
		$block["desc"] = "看板";

		for ($i = 0;$tmp = $GLOBALS["currdb"]->fetch_array($result);$i++)
		{
			$tmp2 = new ForumObject("board", $tmp["no"]);

			$block["subscri"][$i]["no"] = $tmp2->board_no;

			$block["subscri"][$i]["title"] = $tmp2->title;

			$block["subscri"][$i]["num"] = $tmp2->numtopic;

			$block["subscri"][$i]["lasttime"] = date("Y-m-d H:i:s", $tmp2->lasttime);

			$result2 = $GLOBALS["currdb"]->query("SELECT topic_no FROM `".$GLOBALS["currdb"]->prefix("forum_topic")."` WHERE board_no='".$block["subscri"][$i]["no"]."' ORDER BY topic_no desc LIMIT 0, 1");

			$tmp2 = $GLOBALS["currdb"]->fetch_array($result2);

			$block["subscri"][$i]["status"] = ($tmp2["topic_no"] > $tmp["status"]) ? 1 : 0;
		}

		return $block;
	}
}

function subscribe_topic($dirname = null)
{
	if (!$GLOBALS["curruser"]->isguest())
	{
		$result = $GLOBALS["currdb"]->query("SELECT no, status FROM `".$GLOBALS["currdb"]->prefix("forum_subscribe")."` WHERE user_no='".$GLOBALS["curruser"]->uno."' and type='topic'");

		$block = array();

		$block["type"] = "topic";
		$block["desc"] = "文章";

		for ($i = 0;$tmp = $GLOBALS["currdb"]->fetch_array($result);$i++)
		{
			$tmp2 = new ForumObject("topic", $tmp["no"]);

			$block["subscri"][$i]["no"] = $tmp2->topic_no;

			$block["subscri"][$i]["title"] = mb__substr($tmp2->title, 0, 10);

			$block["subscri"][$i]["num"] = $tmp2->numreply;

			$block["subscri"][$i]["lasttime"] = date("Y-m-d H:i:s", $tmp2->lasttime);

			$result2 = $GLOBALS["currdb"]->query("SELECT rely_no FROM `".$GLOBALS["currdb"]->prefix("forum_reply")."` WHERE topic_no='".$block["subscri"][$i]["no"]."' ORDER BY relpy_no desc LIMIT 0, 1");

			$tmp2 = $GLOBALS["currdb"]->fetch_array($result2);

			$block["subscri"][$i]["status"] = ($tmp2["reply_no"] > $tmp["status"]) ? 1 : 0;
		}

		return $block;
	}
}
?>
