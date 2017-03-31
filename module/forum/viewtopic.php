<?
require_once("./module.php");
require_once("../../mainfile.php");

$criteria = new CriteriaCompo(new Criteria("topic_no", $_GET["no"]));

$result = $currdb->query("SELECT t.*, u.name as poster_name FROM `".$currdb->prefix("forum_topic")."` t LEFT JOIN `".$currdb->prefix("user")."` u ON t.poster_no=u.uno WHERE ".$criteria->render());

if ($currdb->num_rows($result) == 1)
{
	$forumtopic = new Object();
	$forumtopic->setvars($currdb->fetch_array($result));
}
else
        dies("No such topic.");

$forumboard = new ForumObject("board", $forumtopic->board_no);

$currtpl->addhdr("<link rel=\"alternate\" type=\"application/xml\" title=\"RSS\" href=\"".$currconfig->url."/module/".$currmodule->name."/topicfeed.php?no=".$forumtopic->topic_no."\" />");

$forumtopic->title = htmlencode(mb__substr($forumtopic->title, 0, 50));

$forumtopic->content = str_replace("\n", "<br />", htmlencode($forumtopic->content));

$forumtopic->posttime = date("Y-m-d H:i:s", $forumtopic->posttime);

$manager = explode("/", $forumboard->admin);

$bm = (in_array($curruser->uid, $manager) || ($currmodule->isadmin($curruser))) ? true : false;

$currtpl->assign_by_ref("bm", $bm);

$criteria = new CriteriaCompo(new Criteria("topic_no", $forumtopic->topic_no));

$currdb->query("UPDATE `".$currdb->prefix("forum_topic")."` SET numread='".($forumtopic->numread + 1)."' WHERE ".$criteria->render());

$result = $currdb->query("SELECT COUNT(reply_no) FROM `".$currdb->prefix("forum_reply")."` WHERE ".$criteria->render());

$pagesize = 10;

$maxpage = $currdb->fetch_array($result);

$maxpage = ($maxpage[0] % $pagesize == 0) ? intval($maxpage[0] / $pagesize) : intval($maxpage[0] / $pagesize + 1);

$page = ($_GET["page"] > 0) ? $_GET["page"] : 1;

$page = ($page > $maxpage) ? $maxpage : $page;

$plink = multipage($page, $maxpage, $currconfig->phpself."?no=".$forumtopic->topic_no);

$result = $currdb->query("SELECT r.*, u.name as poster_name FROM `".$currdb->prefix("forum_reply")."` r LEFT JOIN `".$currdb->prefix("user")."` u ON r.poster_no=u.uno WHERE ".$criteria->render()." ORDER BY reply_no ASC LIMIT ".(($page - 1) * $pagesize).", ".$pagesize);

for ($i = 0;$tmp = $currdb->fetch_array($result);$i++)
{
	$forumreply[$i] = new Object();
	$forumreply[$i]->setvars($tmp);
}

for ($i = 0;$i < count($forumreply);$i++)			// modify data from each topic
{
	$criteria = new CriteriaCompo(new Criteria("reply_no", $forumreply[$i]->reply_no));

	$result = $currdb->query("SELECT p.*, u.name as poster_name FROM `".$currdb->prefix("forum_push")."` p LEFT JOIN `".$currdb->prefix("user")."` u ON p.poster_no=u.uno WHERE ".$criteria->render()." ORDER BY push_no ASC");

	$push = array();

	for ($j = 0;$tmp = $currdb->fetch_array($result);$j++)
	{
		$push[$j] = new Object();

		$push[$j]->setvars($tmp);

		$push[$j]->content = htmlencode(mb__substr($push[$j]->content, 0, 64));
	}

	$tmp = $currdb->num_rows($result);

	$forumreply[$i]->content = str_replace("\n", "<br />", htmlencode($forumreply[$i]->content));

	$forumreply[$i]->posttime = date("Y-m-d H:i:s", $forumreply[$i]->posttime);

	$forumreply[$i]->push = $push;
}

$currtpl->assign_by_ref("forumboard", $forumboard);

$currtpl->assign_by_ref("forumtopic", $forumtopic);

$currtpl->assign_by_ref("forumreply", $forumreply);

$currtpl->assign_by_ref("forumpush", $forumpush);

$currtpl->assign_by_ref("plink", $plink);

$currtpl->display("userlink.htm");

$currtpl->display("viewtopic.htm");
?>

