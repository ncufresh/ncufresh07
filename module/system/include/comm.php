<?
if (!defined("MAINFILE_INCLUDED"))
	exit();

function do_valid($sid, $spwd)
{
	return 0;
/*
	if (!empty($sid) && !empty($spwd))
	{
		$sid = trim($sid);
		$spwd = trim($spwd);

		if (file_exists(ROOT_PATH."/etc/badsid"))
		{
			$badsid = file(ROOT_PATH."/etc/badsid");

			for ($i = 0;trim($badsid[$i]);$i++)
			{
				$badsid[$i] = trim($badsid[$i]);

				if ($badsid[0] == "#")
					continue;

				if (preg_match("/".$badsid[$i]."/i", $sid))
					return 0;
			}
		}

		require_once(ROOT_PATH."/module/".$GLOBALS["currmodule"]->name."/include/pop3.class.php");
		require_once(ROOT_PATH."/module/".$GLOBALS["currmodule"]->name."/include/WebService.class.php");

		$ws = new WebService();

		if (!strcasecmp("96", substr($sid, 0, 2)))
		{
			$criteria = new CriteriaCompo(new Criteria("sid", $sid));
			$criteria->add(new Criteria("spwd", md5($spwd)));

			$result = $GLOBALS["currdb"]->query("SELECT * FROM `".$GLOBALS["currdb"]->prefix("freshman")."` WHERE ".$criteria->render());

			return ($GLOBALS["currdb"]->num_rows($result) == 1) ? 1 : 0;
		}
		else
			return ($ws->isPasswordValid($sid, $spwd)) ? 1 : 0;
	}
*/
}
?>
