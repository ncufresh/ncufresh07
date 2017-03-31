<?
if (!defined("MAINFILE_INCLUDED"))
	exit();

function user_status($dirname = null)
{
	if (!$GLOBALS["curruser"]->isguest())
	{
		$block["uid"] = $GLOBALS["curruser"]->uid;
		$block["name"] = $GLOBALS["curruser"]->name;
		$block["picture"] = $GLOBALS["curruser"]->picture;
		return $block;
	}
}

function user_login($dirname = null)
{
	if ($GLOBALS["curruser"]->isguest())
	{
		return array();
	}
}
?>
