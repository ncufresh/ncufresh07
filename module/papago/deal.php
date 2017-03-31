<?php
require_once("../../mainfile.php");

if(!($curruser->haveperm($curruser->p_handler->getpermvalid()) && (!strcasecmp("96",substr($curruser->sid,0,2)))))
{
	_redirect();
}
else
{
	$time = mktime();
	if($_POST["q1"]==2 && $_POST["q2"]==1 && $_POST["q3"]==2)
	{
		$currdb->query("INSERT INTO `".$currdb->prefix("papago_question")."` (id, answer, favorite, time) VALUES ('".$curruser->uno."', true, '".$_POST["q4"]."', '".$time."')");
	}
	else
	{
		$currdb->query("INSERT INTO `".$currdb->prefix("papago_question")."` (id, answer, favorite, time) VALUES ('".$curruser->uno."', false, '".$_POST["q4"]."', '".$time."')");
	}
	_redirect();
}
?>
