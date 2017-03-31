<?
	require_once ("../../../mainfile.php");
	
	dies("新生營服登記已截止");


	if(($curruser->haveperm($curruser->p_handler->getpermvalid()) && (!strcasecmp("96",substr($curruser->sid,0,2)))) || $currmodule->isadmin($curruser))
	{

		$result = $currdb->query("SELECT * FROM `".$currdb->prefix("cloth_person")."` WHERE uno='".$curruser->uno."'");

		if ($currdb->num_rows($result) == 1)
			$data = $currdb->fetch_array($result);
?>

<form action="cloth_sure.php" method="post">
  <center>
    <table border="1" bordercolor="#bbccdd" width="300px">
	  <tr>
	    <th bgcolor="#66cc66">請選擇衣服大小</th>
	  </tr>
<?
if ($data)
{
?>
	  <tr>
	    <td>您之前選擇了 <?=$data["size"];?></td>
	  </tr>
<?
}
?>
	  <tr>
	    <td>
	      <select name="size">
	        <option value="S" selected>S</option>
		    <option value="M">M</option>
		    <option value="L">L</option>
		    <option value="XL">XL</option>
		    <option value="2XL">2XL</option>
		    <option value="3XL">3XL</option>
	      </select>
	      &nbsp;&nbsp;&nbsp;
  	      <input type="submit" value="送出" />	
	    </td>
	  </tr>
	  <tr>
	    <td>
以一般的尺寸來說，將五種size適合的身高做個對照^^"<br />
S:160公分以下<br />
M:160~170<br />
L:170~175<br />
XL:175~180<br />
2L:180公分以上<br />
如果覺得要寬鬆一點，或者覺得自己size不需要太大的話，再依個人狀況選擇大一點或小一點的size囉
            </td>
	  </tr>
	</table>
  </center>
</form>

<?
	}
	else
	{
		_redirect();
	}
?>
