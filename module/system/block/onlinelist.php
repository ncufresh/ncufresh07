<?
if (!defined("MAINFILE_INCLUDED"))
	exit();

function onlinelist($dirname = null)
{
	if (!$GLOBALS["curruser"]->isguest())
	{
		$block = array();

		$result = $GLOBALS["currdb"]->query("SELECT listtype FROM `".$GLOBALS["currdb"]->prefix("online")."` WHERE online_id='".$GLOBALS["curruser"]->uid."'");

		if ($GLOBALS["currdb"]->num_rows($result) == 1)
			$block = $GLOBALS["currdb"]->fetch_array($result);

		$block["listtype"] = ($block["listtype"] == 1) ? 1 : 2;

		return $block;
	}
}
?>
