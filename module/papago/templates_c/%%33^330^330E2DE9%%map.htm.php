<?php /* Smarty version 2.6.18, created on 2007-08-15 17:26:20
         compiled from map.htm */ ?>
<TABLE BORDER="0" CELLPADDING="0" CELLSPACING="0" id="mupic">
	<TR>
		<TD COLSPAN="10"><IMG SRC="templates/images/map_1.jpg" WIDTH="435" BORDER="0" HEIGHT="95"></TD>
		<TD COLSPAN="2" class="one">
		<a href="file/other_info.wmv" title="新研舍" onmouseover="javascript: Element.show('Layer1');" onmouseout="javascript: Element.hide('Layer1');"><div id="Layer2"><img src="templates/images/area_2.jpg"/></div>
		  </a></TD>
		<TD COLSPAN="2"><IMG SRC="templates/images/map_3.jpg" WIDTH="124" BORDER="0" HEIGHT="95"></TD>
	</TR>
	<TR>
		<TD COLSPAN="2"><IMG SRC="templates/images/map_4.jpg" WIDTH="115" BORDER="0" HEIGHT="250"></TD>
		<TD COLSPAN="3" class="five"><a href="file/sports_place.wmv" title="運動場"></a></TD>
		<TD COLSPAN="9" ROWSPAN="2"><IMG SRC="templates/images/map_6.jpg" WIDTH="364" BORDER="0" HEIGHT="300"></TD>
	</TR>
	<TR>
		<TD COLSPAN="5"><IMG SRC="templates/images/map_7.jpg" WIDTH="245" BORDER="0" HEIGHT="50"></TD>
	</TR>
	<TR>
		<TD><IMG SRC="templates/images/map_8.jpg" WIDTH="60" BORDER="0" HEIGHT="65"></TD>
		<TD COLSPAN="2" class="six"><a href="file/bus_routine.wmv" title="公車"></a></TD>
		<TD COLSPAN="2"><IMG SRC="templates/images/map_10.jpg" WIDTH="90" BORDER="0" HEIGHT="65"></TD>
		<TD COLSPAN="2" class="four"><a href="file/girl_dorm4.wmv" title="女1～四舍"></a></TD>
		<TD ROWSPAN="2" class="three"><a href="file/b3.wmv" title="男三/四舍"></a></TD>
		<TD COLSPAN="6"><IMG SRC="templates/images/map_13.jpg" WIDTH="209" BORDER="0" HEIGHT="65"></TD>
	</TR>
	<TR>
		<TD COLSPAN="4"><IMG SRC="templates/images/map_14.jpg" WIDTH="230" BORDER="0" HEIGHT="49"></TD>
		<TD COLSPAN="2" class="back"><a href="http://ncufresh.dnip.net/ncufresh/papago/back.php"></a></TD>
		<TD><IMG SRC="templates/images/map_16.jpg" WIDTH="90" BORDER="0" HEIGHT="49"></TD>
		<TD class="street"><a href="http://ncufresh.dnip.net/ncufresh/papago/street.php"></a></TD>
		<TD COLSPAN="2"><IMG SRC="templates/images/map_18.jpg" WIDTH="60" BORDER="0" HEIGHT="49"></TD>
		<TD COLSPAN="2" class="two">
		<a href="file/other_info.wmv" title="男11舍/好視康" onmouseover="javascript: Element.show('Layer2');" onmouseout="javascript: Element.hide('Layer2');"><div id="Layer1"><img src="templates/images/area_19.jpg" /></div></a></TD>
		<TD><IMG SRC="templates/images/map_20.jpg" WIDTH="94" BORDER="0" HEIGHT="49"></TD>
	</TR>
	<TR>
	<TD><IMG SRC="templates/images/space.gif" WIDTH="60" BORDER="0" HEIGHT="1"></TD>
	<TD><IMG SRC="templates/images/space.gif" WIDTH="55" BORDER="0" HEIGHT="1"></TD>
	<TD><IMG SRC="templates/images/space.gif" WIDTH="40" BORDER="0" HEIGHT="1"></TD>
	<TD><IMG SRC="templates/images/space.gif" WIDTH="75" BORDER="0" HEIGHT="1"></TD>
	<TD><IMG SRC="templates/images/space.gif" WIDTH="15" BORDER="0" HEIGHT="1"></TD>
	<TD><IMG SRC="templates/images/space.gif" WIDTH="10" BORDER="0" HEIGHT="1"></TD>
	<TD><IMG SRC="templates/images/space.gif" WIDTH="90" BORDER="0" HEIGHT="1"></TD>
	<TD><IMG SRC="templates/images/space.gif" WIDTH="55" BORDER="0" HEIGHT="1"></TD>
	<TD><IMG SRC="templates/images/space.gif" WIDTH="15" BORDER="0" HEIGHT="1"></TD>
	<TD><IMG SRC="templates/images/space.gif" WIDTH="20" BORDER="0" HEIGHT="1"></TD>
	<TD><IMG SRC="templates/images/space.gif" WIDTH="40" BORDER="0" HEIGHT="1"></TD>
	<TD><IMG SRC="templates/images/space.gif" WIDTH="10" BORDER="0" HEIGHT="1"></TD>
	<TD><IMG SRC="templates/images/space.gif" WIDTH="30" BORDER="0" HEIGHT="1"></TD>
	<TD><IMG SRC="templates/images/space.gif" WIDTH="94" BORDER="0" HEIGHT="1"></TD>
</TR>
</TABLE>
<script type="text/javascript">
	Element.hide('Layer2');
	Element.hide('Layer1');
</script>
<?php if (! ( $this->_tpl_vars['user']['done'] )): ?>
<form method="post" action="deal.php" name="qform" onSubmit="
	ans = confirm('是否送出問卷'); if(!ans) return false;
">
<table border="0" id="box2">

	<tr>
		<td><a href="javascript: openXD()">請填寫以下問卷</a></td>
	</tr>
</table>
<table id="box">
	<tr>
		<td>1. 往返中央大學和火車站最常搭的是幾號公車？</td>
	</tr>
	<tr>
		<td>
			<input type="radio" name="q1" value="1" checked>a. 1號<br />
			<input type="radio" name="q1" value="2">b. 2號<br />
			<input type="radio" name="q1" value="3">c. 112號
		</td>
	</tr>
	<tr>
		<td>2. 中央的籃球排球桌球的室內場是位於哪裡呢？</td>
	</tr>
	<tr>
		<td>
			<input type="radio" name="q2" value="1" checked>a. 依仁堂<br />
			<input type="radio" name="q2" value="2">b. 棒棒堂<br />
			<input type="radio" name="q2" value="3">c. 龍發堂
		</td>
	</tr>
	<tr>
		<td>3. 下列哪一項是新生宿舍咧？</td>
	</tr>
	<tr>
		<td>
			<input type="radio" name="q3" value="1" checked>a. 男九、十三舍，女十四舍<br />
			<input type="radio" name="q3" value="2">b. 男三、四、六、七舍，女二、四舍<br />
			<input type="radio" name="q3" value="3">c. 新研舍，女一、三舍
		</td>
	</tr>
	<tr>
		<td>4. 你最喜歡幾號主播</td>
	</tr>
	<tr>
		<td>
			<input type="radio" name="q4" value="1" checked>a. 1號 -- 顏朋愉<br>
			<input type="radio" name="q4" value="2">b. 2號 -- 朋兒<br>
			<input type="radio" name="q4" value="3">c. 3號 -- 朋老大<br>
			<input type="radio" name="q4" value="4">d. 4號 -- 徐志朋
		</td>
	</tr>
	<tr>
		<td align="center"><input type="submit" value="送出問卷">&nbsp;&nbsp;<input type="button" value="縮小問卷" onClick="backXD()"/></td>
	</tr>
</table>
</form>
<div id="qintro">
	中大  PAPAGO  抽獎囉<br />
	活動對象：大一新生<br />
	活動日期：即日起至 96/9/10<br />
	活動辦法：以下的地圖有五個地方提供下載影片，在看完了所有的影片後，
    	      請在地圖上的問卷作答。問卷可以縮小和展開，縮小時可以看到
    	      地圖全貌。填完問卷送出後，答對的人可以參加抽獎，屆時將會
    	      有精美的小禮物當作獎勵喔。看完了以上的敘述後，趕快去下載
    	      來看吧^^。
</div>
<script type="text/javascript">
	function backXD()
	{
		Element.hide('box');
	}
	function openXD()
	{
		Element.show('box');
	}
</script>
<?php endif; ?>
<?php if (( $this->_tpl_vars['user']['done'] && $this->_tpl_vars['finish'] )): ?>
<div id="qintro" style="margin-top:0pt;">
	您已完成了問卷
</div>
<?php endif; ?>
<?php if (( $this->_tpl_vars['currmodule']->isadmin($this->_tpl_vars['curruser']) )): ?>
<p><a href="index.php?action=view">查看問卷結果</a></p>
<?php endif; ?>