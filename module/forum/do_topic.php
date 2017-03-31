<?
require_once("../../mainfile.php");

if ($curruser->haveperm($curruser->p_handler->getpermvalid()))
{
	if (isset($_POST["dopost"]) || isset($_GET["dopost"]))			// post topic by post (not ajax)
	{
		$bno = (!empty($_POST["bno"])) ? $_POST["bno"] : $_GET["bno"];

		$forumboard = new ForumObject("board", $bno);

		$bm = explode("/", $forumboard->admin);

		if ($forumboard->board_no <= 0 || (!$curruser->haveperm($forumboard->perm) && !in_array($curruser->uid, $bm)))
			echo "找不到看板";
		else if (isset($_POST["dopost"]) && !empty($_POST["title"]) && !empty($_POST["content"]))
		{
			$posttime = mktime();

			$criteria = new CriteriaCompo(new Criteria("title", $_POST["title"]));
			$criteria->add(new Criteria("content", $_POST["content"]));
			$criteria->add(new Criteria("board_no", $forumboard->board_no));
			$criteria->add(new Criteria("poster_no", $curruser->uno));
			$criteria->add(new Criteria("type", $forumboard->topic_type));
			$criteria->add(new Criteria("numread", 0));
			$criteria->add(new Criteria("numreply", 0));
			$criteria->add(new Criteria("posttime", $posttime));
			$criteria->add(new Criteria("lasttime", $posttime));
			$criteria->add(new Criteria("ip_addr", $_SERVER["REMOTE_ADDR"]));

			$currdb->query("INSERT INTO `".$currdb->prefix("forum_topic")."` ".$criteria->insertsql());

			$tno = $currdb->insert_id();

			if ($tno > 0)
			{
				$criteria = new CriteriaCompo(new Criteria("lasttime", mktime()));
				$criteria->add(new Criteria("numtopic", $forumboard->numtopic + 1));

				$currdb->query("UPDATE `".$currdb->prefix("forum_board")."` ".$criteria->updatesql()." WHERE board_no='".$forumboard->board_no."'");

				_redirect(URL."/module/".$currmodule->name."/viewtopic.php?no=".$tno);
			}
			else
				_redirect(URL."/module/".$currmodule->name."/viewboard.php?no=".$forumboard->board_no);
		}
		else
		{
			$currtpl->assign_by_ref("forumboard", $forumboard);

			$currtpl->display("userlink.htm");

			$currtpl->display("post_form.htm");
		}
	}
	else if (isset($_POST["mdarticle"]) || isset($_GET["mdarticle"]))	//modify topic (not ajax)
	{
		$tno = (!empty($_POST["tno"])) ? $_POST["tno"] : $_GET["tno"];

		$forumtopic = new ForumObject("topic", $tno);

		$forumboard = new ForumObject("board", $forumtopic->board_no);

		$bm = explode("/", $forumboard->admin);

		if (($curruser->uno != $forumtopic->poster_no) && !in_array($curruser->uid, $bm) && !($currmodule->isadmin($curruser)))
			echo "找不到主題";
		else if (isset($_POST["mdarticle"]) && !empty($_POST["title"]) && !empty($_POST["content"]))
		{
			$_POST["content"] .= "\n\n\n\n\n\n由 ".$curruser->uid." 修改於 ".date("Y-m-d H:i:s");

			$criteria = new CriteriaCompo(new Criteria("title", $_POST["title"]));
			$criteria->add(new Criteria("content", $_POST["content"]));
			$criteria->add(new Criteria("lasttime", mktime()));

			$lasttime = mktime();

			$currdb->query("UPDATE `".$currdb->prefix("forum_topic")."` ".$criteria->updatesql()." WHERE topic_no='".$forumtopic->topic_no."'");

			_redirect(URL."/module/".$currmodule->name."/viewtopic.php?no=".$forumtopic->topic_no);
		}
		else
		{
			$currtpl->assign_by_ref("forumboard", $forumboard);

			$currtpl->assign_by_ref("forumtopic", $forumtopic);

			$currtpl->display("userlink.htm");

			$currtpl->display("mod_t_form.htm");
		}
	}
	else if (isset($_POST["rmtopic"]))					// remove topic by post (ajax)
	{
		$currtpl->setndisplay();

		$forumtopic = new ForumObject("topic", $_POST["tno"]);

		$forumboard = new ForumObject("board", $forumtopic->board_no);

		$bm = explode("/", $forumboard->admin);

		if ($forumtopic->topic_no <= 0)
			echo "找不到主題";
		else if (!in_array($curruser->uid, $bm) && !($currmodule->isadmin($curruser)))
			echo "找不到主題";
		else
		{
			$currdb->query("DELETE FROM `".$currdb->prefix("forum_topic")."` WHERE topic_no='".$forumtopic->topic_no."'");

			$criteria = new CriteriaCompo(new Criteria("numtopic", $forumboard->numtopic - 1));

			$currdb->query("UPDATE `".$currdb->prefix("forum_board")."` ".$criteria->updatesql()." WHERE board_no='".$forumboard->board_no."'");

			$result = $currdb->query("SELECT reply_no, poster_no FROM `".$currdb->prefix("forum_reply")."` WHERE topic_no='".$forumtopic->topic_no."'");

			while ($tmp = $currdb->fetch_array($result))
				$currdb->query("DELETE FROM `".$currdb->prefix("forum_push")."` WHERE reply_no='".$tmp["reply_no"]."'");

			$currdb->query("DELETE FROM `".$currdb->prefix("forum_reply")."` WHERE topic_no='".$forumtopic->topic_no."'");
		}
	}
}
else
	_redirect();
?>
