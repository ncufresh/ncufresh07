<?
require_once("../../mainfile.php");

if ($currconfig->openreg && $curruser->isguest())
{
	if (isset($_POST["register_user"]))
	{
		$_POST["uid"] = trim($_POST["uid"]);

		$user = new User();

		$chk = true;

		if (!$_POST["uid"])
		{
			$chk = false;
			echo "請確認帳號名稱";
		}
		else if (file_exists(ROOT_PATH."/etc/badid"))
		{
			$badid = file(ROOT_PATH."/etc/badid");

			for ($i = 0;trim($badid[$i]);$i++)
			{
				$badid[$i] = trim($badid[$i]);

				if ($badid[0] == "#")
					continue;

				if (preg_match("/".$badid[$i]."/i", $_POST["uid"]))
				{
					$chk = false;
					echo "此帳號禁止使用&nbsp;&nbsp;";
					break;
				}
			}
		}
		else if (!preg_match("/^[a-zA-Z0-9_]*$/", $_POST["uid"]))
		{
			$chk = false;
			echo "帳號請使用英文字母及數字&nbsp;&nbsp;";
		}
		else
		{
			$user = $user->u_handler->getuserbyid($_POST["uid"]);

			if ($user->uno > 0)
			{
				$chk = false;
				echo "此帳號已有人使用&nbsp;&nbsp;";
			}
		}

		if (strlen($_POST["pwd"]) < 6)
		{
			$chk = false;
			echo "密碼長度需大於 6 個字元&nbsp;&nbsp;";
		}

		if ($_POST["pwd"] != $_POST["pwd_i"])
		{
			$chk = false;
			echo "密碼錯誤&nbsp;&nbsp;";
		}

		if (empty($_POST["realname"]) || empty($_POST["name"]) || empty($_POST["sex"]) || empty($_POST["department"]))
		{
			$chk = false;
			echo "請檢查必填欄位&nbsp;&nbsp;";
		}

		if ($chk)
		{
			$user->u_handler->registeruser($_POST["uid"], md5($_POST["pwd"]));
			$user = $user->u_handler->getuserbyid($_POST["uid"]);

			$criteria = new CriteriaCompo(new Criteria("name", htmlencode($_POST["name"])));
			$criteria->add(new Criteria("realname", htmlencode($_POST["realname"])));
			$criteria->add(new Criteria("name", htmlencode($_POST["name"])));
			$criteria->add(new Criteria("sex", ($_POST["sex"] == "boy") ? "男" : "女"));
			$criteria->add(new Criteria("department",  htmlencode($_POST["department"])));
			$criteria->add(new Criteria("website", str_replace("http://", "", htmlencode($_POST["website"]))));
			$criteria->add(new Criteria("email", (!empty($_POST["email"]) && strpos($_POST["email"], "@") > 0) ? htmlencode($_POST["email"]) : ""));
			$criteria->add(new Criteria("intro", htmlencode($_POST["intro"])));

			$user->u_handler->modifyuser($user->uno, $criteria);

			$_SESSION["user_uno"] = $user->uno;
			$_SESSION["user_name"] = $user->name;
			$_SESSION["user_uid"] = $user->uid;
			$_SESSION["user_pwd"] = $user->pwd;

			echo "註冊成功&nbsp;&nbsp;";

			if (!empty($_POST["sid"]) && !empty($_POST["spwd"]))
			{
				if (do_valid($_POST["sid"], $_POST["spwd"]))
				{
					$criteria = new CriteriaCompo(new Criteria("sid", $_POST["sid"]));
					$user->u_handler->modifyuser($user->uno, $criteria);

					$user->u_handler->activeuser($user->uno);
					echo "sparc 確認成功&nbsp;&nbsp;";
				}
				else
					echo "sparc 確認失敗&nbsp;&nbsp;";
			}
			else
				echo "sparc 未確認";
		}
		else
			echo "<br /><a href=\"javascript: history.go(-1);\" title=\"回上一頁\">回上一頁</a>";
	}
	else if (isset($_POST["agreerule"]))
	{
		require_once(ROOT_PATH."/dep.php");

		$currtpl->assign("dep", $dep);

		$currtpl->display("register.htm");
	}
	else
		$currtpl->display("userule.htm");
}
else
	_redirect();
?>
