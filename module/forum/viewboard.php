<?
require_once("./module.php");
require_once("../../mainfile.php");

$forumboard = new ForumObject("board", $_GET["no"]);

$currtpl->assign_by_ref("forumboard", $forumboard);

if (!$forumboard->board_no)
        dies("No such board.");

$currtpl->addhdr("<link rel=\"alternate\" type=\"application/xml\" title=\"RSS\" href=\"".$currconfig->url."/module/".$currmodule->name."/boardfeed.php?no=".$forumboard->board_no."\" />");

$manager = explode("/", $forumboard->admin);			// check if is board manager

$bm = (in_array($curruser->uid, $manager) || ($currmodule->isadmin($curruser))) ? true : false;

$currtpl->assign_by_ref("bm", $bm);

$criteria = new CriteriaCompo(new Criteria("board_no", $forumboard->board_no));

$result = $currdb->query("SELECT COUNT(topic_no) FROM `".$currdb->prefix("forum_topic")."` WHERE ".$criteria->render()." and type ^ '".TOPIC_TYPE_TOP."'");

$pagesize = 10;

$maxpage = $currdb->fetch_array($result);

$maxpage = ($maxpage[0] % $pagesize == 0) ? intval($maxpage[0] / $pagesize) : intval($maxpage[0] / $pagesize + 1);

$page = ($_GET["page"] > 0) ? $_GET["page"] : 1;

$page = ($page > $maxpage) ? $maxpage : $page;

$plink = multipage($page, $maxpage, $currconfig->phpself."?no=".$forumboard->board_no);

$i = 0;

if ($page == 1)
{
	$result = $currdb->query("SELECT t.*, u.name as poster_name FROM `".$currdb->prefix("forum_topic")."` t LEFT JOIN `".$currdb->prefix("user")."` u ON t.poster_no=u.uno WHERE ".$criteria->render()." and t.type & '".TOPIC_TYPE_TOP."' ORDER BY t.topic_no DESC");

	for (;$tmp = $currdb->fetch_array($result);$i++)
	{
		$forumtopic[$i] = new Object();
		$forumtopic[$i]->setvars($tmp);
	}
}

$result = $currdb->query("SELECT t.*, u.name as poster_name FROM `".$currdb->prefix("forum_topic")."` t LEFT JOIN `".$currdb->prefix("user")."` u ON t.poster_no=u.uno WHERE ".$criteria->render()." and t.type ^ '".TOPIC_TYPE_TOP."' ORDER BY t.topic_no DESC LIMIT ".(($page - 1) * $pagesize).", ".$pagesize);

for (;$tmp = $currdb->fetch_array($result);$i++)
{
	$forumtopic[$i] = new Object();

	$forumtopic[$i]->setvars($tmp);
}

for ($j = 0;$j < $i;$j++)
{
	$forumtopic[$j]->title = htmlencode(mb__substr($forumtopic[$j]->title, 0, 50));

	$forumtopic[$j]->title = title_type($forumtopic[$j]->title, $forumtopic[$j]->type);

	$forumtopic[$j]->content = mb__substr($forumtopic[$j]->content, 0, 50);

	$forumtopic[$j]->content = str_replace("\n", "<br />", htmlencode($forumtopic[$j]->content));

	$forumtopic[$j]->posttime = date("Y-m-d H:i:s", $forumtopic[$j]->posttime);

	$forumtopic[$j]->lasttime = date("Y-m-d H:i:s", $forumtopic[$j]->lasttime);
}

$currtpl->assign_by_ref("forumtopic", $forumtopic);

$currtpl->assign_by_ref("plink", $plink);

$currtpl->display("userlink.htm");

$currtpl->display("viewboard.htm");
?>
