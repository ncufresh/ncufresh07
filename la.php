<?
echo mktime(date("H"), date("i"), date("s"), date("m"), date("d"), date("Y"))."<br />";
echo mktime(date("H"), date("i"), date("s") + 2, date("m"), date("d"), date("Y"))."<br />";
echo microtime()."<br />";
?>
