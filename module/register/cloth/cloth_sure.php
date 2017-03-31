<?
	require_once ("../../../mainfile.php");
	
	$currdb->query("DELETE FROM `".$currdb->prefix("cloth_person")."` WHERE uno='".$curruser->uno."'");
	$currdb->query("INSERT INTO `".$currdb->prefix("cloth_person")."` (uno,sid,department,size) VALUES ('".$curruser->uno."','".$curruser->sid."','".$curruser->department."','".addslashes(stripslashes($_POST['size']))."')");
	
	header("location:../");
?>
