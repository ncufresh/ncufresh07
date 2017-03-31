<?
require_once("../../mainfile.php");

if (!$currmodule->isadmin($curruser))
	_redirect();
else
{
	$_GET["topic_no"] = intval($_GET["topic_no"]);

	if (file_exists(ROOT_PATH."/module/".$currmodule->name."/res/".$_GET["topic_no"]))
		rm_dir(ROOT_PATH."/module/".$currmodule->name."/res/".$_GET["topic_no"]);

	$currdb->query("DELETE FROM `".$currdb->prefix("anno_topic")."` WHERE topic_no='".$_GET["topic_no"]."'");

	_redirect(URL."/module/".$currmodule->name."/index.php");
}
?>
