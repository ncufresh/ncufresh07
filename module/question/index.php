<?php
require_once("../../mainfile.php");

if(!$curruser->isguest())
{
	$result = $currdb -> query("SELECT * FROM `".$currdb -> prefix("questionary")."` where uno='".$curruser -> uno."'");
	if($currdb -> num_rows($result) > 0 && $currmodule->isadmin($curruser))
	{
		_redirect("view.php");
	}
	elseif($currdb -> num_rows($result) > 0)
	{
		dies("您已填寫過問卷，謝謝！");
	}
	else
	{
		$currtpl->display("index.htm");
	}
}
else
{
	dies("請先登入再填寫問卷，謝謝！");
}



?>