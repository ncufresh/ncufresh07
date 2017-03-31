<?php
require_once("../../mainfile.php");
if($currmodule->isadmin($curruser))
{
	$question["qa1"] = array("1"=>0,"2"=>0,"3"=>0,"4"=>0,"5"=>0);
	$question["qa2"] = array("1"=>0,"2"=>0,"3"=>0,"4"=>0,"5"=>0);
	$question["qa3"] = array("1"=>0,"2"=>0,"3"=>0,"4"=>0,"5"=>0);
	$question["qa4"] = array("1"=>0,"2"=>0,"3"=>0,"4"=>0,"5"=>0);
	$question["qa5"] = array("1"=>0,"2"=>0,"3"=>0,"4"=>0,"5"=>0,"6"=>0,"7"=>0,"8"=>0,"9"=>0,"10"=>0);
	$question["qb1"] = array("1"=>0,"2"=>0,"3"=>0,"4"=>0,"5"=>0);
	$question["qb2"] = array("1"=>0,"2"=>0,"3"=>0,"4"=>0,"5"=>0);
	$question["qb3"] = array("1"=>0,"2"=>0,"3"=>0,"4"=>0,"5"=>0);
	$question["qb4"] = array("1"=>0,"2"=>0,"3"=>0,"4"=>0,"5"=>0);
	$question["qb5"] = array("1"=>0,"2"=>0,"3"=>0,"4"=>0,"5"=>0);
	$question["qb6"] = array("1"=>0,"2"=>0,"3"=>0);
	$question["qb7"] = array("1"=>0,"2"=>0,"3"=>0);
	$question["qc1"] = array("1"=>0,"2"=>0,"3"=>0);
	$question["qc2"] = array("1"=>0,"2"=>0,"3"=>0);
	$question["qc3"] = array("1"=>0,"2"=>0,"3"=>0);
	$question["qa4_other"] = "";
	$result = $currdb->query("SELECT * FROM `".$currdb->prefix("questionary")."`");
	while($tmp = $currdb->fetch_array($result))
	{
		if($tmp["qa1"] == 0)
		{
			$tmp["qa1_other"] = htmlencode($tmp["qa1_other"]);
			$question["qa1_other"] .= $tmp["qa1_other"]."<br />";
		}
		else
		{
			$question["qa1"][$tmp["qa1"]]++;
		}
		if($tmp["qa2"] == 0)
		{
			$tmp["qa2_other"] = htmlencode($tmp["qa2_other"]);
			$question["qa2_other"] .= $tmp["qa2_other"]."<br />";
		}
		else
		{
			$question["qa2"][$tmp["qa2"]]++;
		}
		if($tmp["qa3"] == 0)
		{
			$tmp["qa3_other"] = htmlencode($tmp["qa3_other"]);
			$question["qa3_other"] .= $tmp["qa3_other"]."<br />";
		}
		else
		{
			$question["qa3"][$tmp["qa3"]]++;
		}
		if($tmp["qa4"] == 0)
		{
			$tmp["qa4_other"] = htmlencode($tmp["qa4_other"]);
			$question["qa4_other"] .= $tmp["qa4_other"]."<br />";
		}
		else
		{
			$question["qa4"][$tmp["qa4"]]++;
		}
		$question["qa5"][$tmp["qa5"]]++;
		$question["qb1"][$tmp["qb1"]]++;
		$question["qb2"][$tmp["qb2"]]++;
		$question["qb3"][$tmp["qb3"]]++;
		$question["qb4"][$tmp["qb4"]]++;
		$question["qb5"][$tmp["qb5"]]++;
		$question["qb6"][$tmp["qb6"]]++;
		$question["qb7"][$tmp["qb7"]]++;
		$question["qc1"][$tmp["qc1"]]++;
		$question["qc2"][$tmp["qc2"]]++;
		$question["qc3"][$tmp["qc3"]]++;
		if($tmp["content"])
		{
			$tmp["content"] = htmlencode($tmp["content"]);
			$tmp["content"] = nl2br($tmp["content"]);
			$question["content"] .= $tmp["content"]."<br /><br />--------<br />";
		}
	}
	$currtpl->assign("question",$question);
	$currtpl->display("view.htm");

}
else
{
	_redirect();
}


?>