<?
if (!defined("MAINFILE_INCLUDED"))
	exit();

function replace($str)
{
	$str = ereg_replace("[a-zA-Z0-9_]*@[a-zA-Z0-9_.-]*", "<a href=\"mailto:\\0\">\\0</a>", $str);
	$str = ereg_replace("http://[a-zA-Z0-9~_/?&%.-=]*", "<a href=\"\\0\" target=\"_blank\">\\0</a>", $str);
	return $str;
}

function rm_dir($path)
{ 
	if(is_dir($path) && !strcasecmp(ROOT_PATH."/module/".$GLOBALS["currmodule"]->name, substr($path, 0, strlen(ROOT_PATH."/module/".$GLOBALS["currmodule"]->name))))
	{ 
		$handle = opendir($path);
		while($file = readdir($handle))
		{
			if( $file != '.' && $file != '..' )
			{
				$file = "$path/$file";
				unlink($file);
			}
		}
		closedir($handle);
		rmdir($path);
	}
}
?>
