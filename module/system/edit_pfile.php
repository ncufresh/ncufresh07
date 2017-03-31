<?
require_once("../../mainfile.php");

if (!$curruser->isguest())
{
	$user = $curruser->u_handler->getuserbyno((!empty($_POST["uno"])) ? $_POST["uno"] : $_GET["uno"]);

	if ($user->uno <= 0)
		$user = $curruser;

	if ($user->uno > 0 && ($curruser->uno == $user->uno || $curruser->haveperm($curruser->p_handler->getpermadmin())))
	{
		if (isset($_POST["edit_pfile"]))
		{
			$criteria = new CriteriaCompo(new Criteria("name", htmlencode($_POST["name"])));
			$criteria->add(new Criteria("website", str_replace("http://", "", htmlencode($_POST["website"]))));
			$criteria->add(new Criteria("email", (!empty($_POST["email"]) && strpos($_POST["email"], "@") > 0) ? htmlencode($_POST["email"]) : ""));
			$criteria->add(new Criteria("intro", htmlencode($_POST["intro"])));

			if ($curruser->haveperm($curruser->p_handler->getpermadmin()))
			{
				$permid = 0;

				for ($i = 0;$_POST["perm"][$i];$i++)
					$permid = ($permid | intval($_POST["perm"][$i]));

				$criteria->add(new Criteria("realname", htmlencode($_POST["realname"])));
				$criteria->add(new Criteria("sex", ($_POST["sex"] == "boy") ? "男" : "女"));
				$criteria->add(new Criteria("sid", intval($_POST["sid"])));
				$criteria->add(new Criteria("perm", $permid));
			}

			$curruser->u_handler->modifyuser($user->uno, $criteria);

			echo "資料修改成功";
		}
		else
		{
			$currtpl->assign("user", $user);

			$currtpl->display("edit_pfile.htm");
		}
	}
	else
		_redirect();
}
else
	_redirect();
?>
