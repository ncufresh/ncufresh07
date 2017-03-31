<?
require_once("../../mainfile.php");

if (!$curruser->isguest())
{
	$currtpl->setndisplay();		// by ajax

	$friend_handler =& gethandler("friend");

	if (isset($_POST["add_friend"]))
	{
		if (isset($_POST["fno"]))
			$fno = $_POST["fno"];
		else
		{
			$user = $curruser->u_handler->getuserbyid($_POST["fid"]);

			$fno = $user->uno;
		}

		$friend_handler->addfriend($fno, $friend_handler->goodfriend);
	}
	else if (isset($_POST["del_friend"]))
		$friend_handler->delfriend($_POST["fno"]);
	else if (isset($_POST["turn_friendship"]))
		$friend_handler->turnfriendship($_POST["fno"]);
}
else
	_redirect();
?>
