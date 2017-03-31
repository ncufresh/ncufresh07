<?
if (!defined("MAINFILE_INCLUDED"))
	exit();

define("TOPIC_TYPE_ANN", 0x01);
define("TOPIC_TYPE_TOP", 0x02);
define("TOPIC_TYPE_REC", 0x04);

class ForumObject Extends Object
{
	function ForumObject($table, $no)
	{
		$criteria = new CriteriaCompo(new Criteria($table."_no", $no));

		$result = $GLOBALS["currdb"]->query("SELECT * FROM `".$GLOBALS["currdb"]->prefix("forum_".$table)."` WHERE ".$criteria->render());

		if ($GLOBALS["currdb"]->num_rows($result) == 1)
		{
			$this->setvars($GLOBALS["currdb"]->fetch_array($result));
			$this->order = "asc";
		}
	}
}

function title_type($title, $type)
{
	$tc = " ";

	if (intval($type) & intval(TOPIC_TYPE_ANN))
		$tc .= "[公告]";
	if (intval($type) & intval(TOPIC_TYPE_TOP))
		$tc .= "[置頂]";
	if (intval($type) & intval(TOPIC_TYPE_REC))
		$tc .= "[推薦]";

	return $tc." ".$title;
}
?>
