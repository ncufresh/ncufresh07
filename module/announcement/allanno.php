<?
$fuckok = 1;


require_once("../../mainfile.php");

$block_handler =& gethandler("block");
$c_block = $block_handler->getblockbyno(3)->fetch();
$c_block2 = $block_handler->getblockbyno(17)->fetch();


$pagesize = 30;
$page = (intval($_GET["page"] > 0)) ? intval($_GET["page"]) : 1;
$topics = array();
$result2 = $currdb->query("SELECT SQL_CALC_FOUND_ROWS * FROM`".$currdb->prefix("anno_topic")."` ORDER BY top DESC, times DESC LIMIT ".(($page - 1) * $pagesize).", ".$pagesize);
$result = $currdb->query("SELECT FOUND_ROWS()");
$maxpage = $currdb->fetch_array($result);
$maxpage = ($maxpage[0] % $pagesize == 0) ? intval($maxpage[0] / $pagesize) : intval($maxpage[0] / $pagesize + 1);
$page = ($page > $maxpage) ? $maxpage : $page;
$plink = multipage($page, $maxpage, $currconfig->url."/module/".$currmodule->name."/allanno.php", 3);

while ($tmp = $currdb->fetch_array($result2))
{
	$tmp[times] = date("m-d", $tmp[times]);
	$tmp["title"] = mb__substr($tmp["title"], 0, 24);
	$topics[] = $tmp;
}

$currtpl->assign("c_block", $c_block);
$currtpl->assign("c_block2", $c_block2);
$currtpl->assign("plink", $plink);
$currtpl->assign("topics", $topics);
$currtpl->display("allanno.htm");
?>
