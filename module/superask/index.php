<?
require_once("../../mainfile.php");

if (!$_SESSION["ref"])
	_redirect(URL);

$title = explode("?", $_SERVER["REQUEST_URI"]);

if (!empty($title[1]))
{
	$_WikiTopic = new WikiTopic();

	$_WikiTopic->getbytitle($title[1]);

	if ($_WikiTopic->tno <= 0)
	{
		$title[1] = iconv("BIG-5", "UTF-8", $title[1]);

		$_WikiTopic->getbytitle($title[1]);
	}

	_redirect(URL."/module/".$currmodule->name."/view.php?title=".urlencode($title[1]));
}

$block_handler =& gethandler("block");
$c_block = $block_handler->getblockbyno(13)->fetch();
$c_block2 = $block_handler->getblockbyno(14)->fetch();
$c_block3 = $block_handler->getblockbyno(18)->fetch();
$c_block4 = $block_handler->getblockbyno(15)->fetch();

$currtpl->assign("c_block", $c_block);
$currtpl->assign("c_block2", $c_block2);
$currtpl->assign("c_block3", $c_block3);
$currtpl->assign("c_block4", $c_block4);
$currtpl->display("mainpage.htm");
?>
