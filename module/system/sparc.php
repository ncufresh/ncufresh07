<?
require_once("../../mainfile.php");

if (!$curruser->haveperm($curruser->p_handler->getpermvalid()) && !$curruser->haveperm($curruser->p_handler->getpermdeny()))
{
	if (!empty($_POST["sid"]) && !empty($_POST["spwd"]))
	{
		if (do_valid($_POST["sid"], $_POST["spwd"]))
		{
			$criteria = new CriteriaCompo(new Criteria("sid", $_POST["sid"]));
			$curruser->u_handler->modifyuser($curruser->uno, $criteria);

			$curruser->u_handler->activeuser($curruser->uno);

			echo "sparc 確認成功";
		}
		else
			echo "sparc 確認失敗";
	}
	else
		$currtpl->display("sparc.htm");
}
else
	_redirect();
?>
