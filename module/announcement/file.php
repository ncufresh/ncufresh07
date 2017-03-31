<?
require_once("../../mainfile.php");

if (!$currmodule->isadmin($curruser))
	_redirect();
else
{
	$_GET["topic_no"] = intval($_GET["topic_no"]);
	$result = $currdb->query("SELECT * FROM `".$currdb->prefix("anno_topic")."` WHERE topic_no='".$_GET["topic_no"]."'");
	if ($topic = $currdb->fetch_array($result))
	{
		if( $_GET["action"] == "file")
		{
			$currtpl->assign("topic_no", $_GET["topic_no"]);
			$currtpl->display("add_file.htm");
		}
		else
		{
			$tmp["file_name"] = explode(",", $topic["file_name"]);
			$tmp["file"] = explode(",", $topic["file"]);

			if ($_GET["action"] == "add")
			{
				if(!$_POST["file_name"] || !$_FILES["res"]["name"])
					_redirect();
				else
				{
					$_FILES["res"]["name"] = str_replace(",", "_", $_FILES["res"]["name"]);

					$i = 0;

					if (in_array($_POST["file_name"], $tmp["file_name"]))
						dies("已經有相同的檔案名稱");

					$file_name = $topic["file_name"].htmlencode($_POST["file_name"]).",";

					$file = $topic[file].$_FILES["res"]["name"].",";

					if (!file_exists("./res/".$_GET["topic_no"]))
					{
						@mkdir(ROOT_PATH."/module/".$currmodule->name."/res/".$_GET["topic_no"], 0774);
						@chmod(ROOR_PATH."/module/".$currmodule->name."/res/".$_GET["topic_no"], 0774);
					}

					if (!file_exists("./res/".$_GET["topic_no"]."/".$_FILES["res"]["name"]))
					{
						if (!@copy($_FILES["res"]["tmp_name"], ROOT_PATH."/module/".$currmodule->name."/res/".$_GET["topic_no"]."/".$_FILES["res"]["name"]))
						{
							dies("上傳檔案失敗");
						}
					}
					else
						dies("檔案已經存在");

					@chmod("./res/".$_GET["topic_no"]."./".$_FILES["res"]["name"], 0777);

					$currdb->query("UPDATE `".$currdb->prefix("anno_topic")."` SET file_name='".$file_name."', file='".$file."' WHERE topic_no='".$_GET["topic_no"]."'");

					_redirect(URL."/module/".$currmodule->name."/form.php?topic_no=".$_GET["topic_no"]."&action=edit");
				}
			}
			else if ($_GET["action"] == "delete")
			{
				$_GET["fno"] = intval($_GET["fno"]);

				$i = 0;

				while ($tmp["file_name"][$i])
				{
					if ($i == $_GET["fno"])
					{
						$i++;
						continue;
					}

					$file_name = $file_name.$tmp["file_name"][$i].",";
					$file = $file.$tmp["file"][$i].",";
					$i++;
				}

				if (file_exists("./res/".$_GET["topic_no"]."/".$tmp["file"][$_GET["fno"]]))
					@unlink("./res/".$_GET["topic_no"]."/".$tmp["file"][$_GET["fno"]]);

				$currdb->query("UPDATE `".$currdb->prefix("anno_topic")."` SET file_name='".$file_name."', file='".$file."' WHERE topic_no='".$_GET["topic_no"]."'");

				_redirect();
			}
		}
	}
	else
		dies("沒有這篇公告");
}
?>
