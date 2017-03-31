<?php
require_once("../../mainfile.php");
if(!$curruser->isguest())
{
	$time = mktime();
	$currdb->query("INSERT INTO `".$currdb->prefix("questionary")."` (uno, qa1, qa1_other, qa2, qa2_other, qa3, qa3_other, qa4, qa4_other, qa5, qb1, qb2, qb3, qb4, qb5, qb6, qb7, qc1, qc2, qc3, content, time) VALUES ('".$curruser->uno."', '".$_POST["qa1"]."', '".$_POST["qa1_other"]."', '".$_POST["qa2"]."', '".$_POST["qa2_other"]."', '".$_POST["qa3"]."', '".$_POST["qa3_other"]."', '".$_POST["qa4"]."', '".$_POST["qa4_other"]."', '".$_POST["qa5"]."', '".$_POST["qb1"]."', '".$_POST["qb2"]."', '".$_POST["qb3"]."', '".$_POST["qb4"]."', '".$_POST["qb5"]."', '".$_POST["qb6"]."', '".$_POST["qb7"]."', '".$_POST["qc1"]."', '".$_POST["qc2"]."', '".$_POST["qc3"]."', '".$_POST["content"]."', '".$time."')");
}
_redirect();
?>