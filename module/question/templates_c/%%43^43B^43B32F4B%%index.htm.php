<?php /* Smarty version 2.6.18, created on 2007-08-26 17:07:46
         compiled from index.htm */ ?>
<form method="post" action="deal.php" name="qform" onSubmit="
	ans = confirm('是否送出問卷'); if(!ans) return false;
">
<table id="qbox">
<tr>
	<td align="center" style="font-weight:bold">2007大一生活知訊網使用者問卷</td>
</tr>
<tr>
	<td>
		親愛的使用者您好，感謝您使用「2007大一生活知訊網」。本問卷希望調查您使用「大一生活知訊網」的心得，
		以及對於各專題的意見回饋，謝謝您抽空填寫。您的意見將是我們進步的動力，非常感謝！
	</td>
</tr>
<tr>
	<th bgcolor="#FF9966">一、網站架構：</th>
</tr>
<tr>
	<th>1.您對知訊網的美工設計感到？</th>
</tr>
<tr>
	<td>
		<input type="radio" name="qa1" value="5">非常喜歡
		<input type="radio" name="qa1" value="4">還不錯
		<input type="radio" name="qa1" value="3">沒意見
		<input type="radio" name="qa1" value="2">怪怪的
		<input type="radio" name="qa1" value="1">缺乏美感
		<input type="radio" name="qa1" value="0">其他&nbsp;<input type="text" size="15" name="qa1_other" style="border: 1pt">
	</td>
</tr>
<tr>
	<th>2.您對知訊網整體的網頁配置感到？</th>
</tr>
<tr>
	<td>
		<input type="radio" name="qa2" value="5">非常喜歡
		<input type="radio" name="qa2" value="4">還不錯
		<input type="radio" name="qa2" value="3">沒意見
		<input type="radio" name="qa2" value="2">怪怪的
		<input type="radio" name="qa2" value="1">不太好用
		<input type="radio" name="qa2" value="0">其他&nbsp;<input type="text" size="15" name="qa2_other" style="border: 1pt">
	</td>
</tr>
<tr>
	<th>3.您對知訊網網頁瀏覽速度感到？</th>
</tr>
<tr>
	<td>
		<input type="radio" name="qa3" value="5">非常順暢
		<input type="radio" name="qa3" value="4">還不錯
		<input type="radio" name="qa3" value="3">沒意見
		<input type="radio" name="qa3" value="2">有點慢
		<input type="radio" name="qa3" value="1">慢得很誇張
		<input type="radio" name="qa3" value="0">其他&nbsp;<input type="text" size="15" name="qa3_other" style="border: 1pt">
	</td>
</tr>
<tr>
	<th>4.整體來說您認為知訊網？</th>
</tr>
<tr>
	<td>
		<input type="radio" name="qa4" value="5">非常喜歡
		<input type="radio" name="qa4" value="4">還不錯
		<input type="radio" name="qa4" value="3">沒意見
		<input type="radio" name="qa4" value="2">可有可無
		<input type="radio" name="qa4" value="1">很多餘
		<input type="radio" name="qa4" value="0">其他&nbsp;<input type="text" size="15" name="qa4_other" style="border: 1pt">
	</td>
</tr>
<tr>
	<th>5.請您給2007大一生活知訊網一個分數（10分最高，1分最低）</th>
</tr>
<tr>
	<td>
		<input type="radio" name="qa5" value="10">10
		<input type="radio" name="qa5" value="9">9
		<input type="radio" name="qa5" value="8">8
		<input type="radio" name="qa5" value="7">7
		<input type="radio" name="qa5" value="6">6
		<input type="radio" name="qa5" value="5">5
		<input type="radio" name="qa5" value="4">4
		<input type="radio" name="qa5" value="3">3
		<input type="radio" name="qa5" value="2">2
		<input type="radio" name="qa5" value="1">1
	</td>
</tr>
<tr>
	<td>&nbsp;</td>
</tr>
<tr>
	<th bgcolor="#FF9966">二、網站內容：</th>
</tr>
<tr>
	<th>1.「大一必讀」對您有幫助嗎？（非大一新生可不作答）</th>
</tr>
<tr>
	<td>
		<input type="radio" name="qb1" value="5">非常有幫助
		<input type="radio" name="qb1" value="4">幫助很多
		<input type="radio" name="qb1" value="3">還可以
		<input type="radio" name="qb1" value="2">沒幫助
		<input type="radio" name="qb1" value="1">完全沒幫助
	</td>
</tr>
<tr>
	<th>2.「註冊精靈」對您有幫助嗎？（非大一新生可不作答）</th>
</tr>
<tr>
	<td>
		<input type="radio" name="qb2" value="5">非常有幫助
		<input type="radio" name="qb2" value="4">幫助很多
		<input type="radio" name="qb2" value="3">還可以
		<input type="radio" name="qb2" value="2">沒幫助
		<input type="radio" name="qb2" value="1">完全沒幫助
	</td>
</tr>
<tr>
	<th>3.「BBS教學」及「選課教學」對您有幫助嗎？（非大一新生可不作答）</th>
</tr>
<tr>
	<td>
		<input type="radio" name="qb3" value="5">非常有幫助
		<input type="radio" name="qb3" value="4">幫助很多
		<input type="radio" name="qb3" value="3">還可以
		<input type="radio" name="qb3" value="2">沒幫助
		<input type="radio" name="qb3" value="1">完全沒幫助
	</td>
</tr>
<tr>
	<th>4.「新生史卡舅」對您有幫助嗎？（非大一新生可不作答）</th>
</tr>
<tr>
	<td>
		<input type="radio" name="qb4" value="5">非常有幫助
		<input type="radio" name="qb4" value="4">幫助很多
		<input type="radio" name="qb4" value="3">還可以
		<input type="radio" name="qb4" value="2">沒幫助
		<input type="radio" name="qb4" value="1">完全沒幫助
	</td>
</tr>
<tr>
	<th>5.「天下第一問」中的資訊對您有幫助嗎？</th>
</tr>
<tr>
	<td>
		<input type="radio" name="qb5" value="5">非常有幫助
		<input type="radio" name="qb5" value="4">幫助很多
		<input type="radio" name="qb5" value="3">還可以
		<input type="radio" name="qb5" value="2">沒幫助
		<input type="radio" name="qb5" value="1">完全沒幫助
	</td>
</tr>
<tr>
	<th>6.您對「天下第一問」系統的評價？</th>
</tr>
<tr>
	<td>
		<input type="radio" name="qb6" value="3">創新而且好用
		<input type="radio" name="qb6" value="2">沒意見
		<input type="radio" name="qb6" value="1">麻煩而且不容易上手
	</td>
</tr>
<tr>
	<th>7.您對「中大PA PA GO」的評價？</th>
</tr>
<tr>
	<td>
		<input type="radio" name="qb7" value="3">藉由影片方式呈現非常好
		<input type="radio" name="qb7" value="2">沒意見
		<input type="radio" name="qb7" value="1">沒興趣或不喜歡
	</td>
</tr>
<tr>
	<td>&nbsp;</td>
</tr>
<tr>
	<th bgcolor="#FF9966">三、網站功能使用調查：</th>
</tr>
<tr>
	<th>1.您曾經使用過「我的訂閱」嗎？</th>
</tr>
<tr>
	<td>
		<input type="radio" name="qc1" value="3">有
		<input type="radio" name="qc1" value="2">沒有
		<input type="radio" name="qc1" value="1">不清楚這是什麼
	</td>
</tr>
<tr>
	<th>2.您曾經使用過「好友名單」嗎？</th>
</tr>
<tr>
	<td>
		<input type="radio" name="qc2" value="3">有
		<input type="radio" name="qc2" value="2">沒有
		<input type="radio" name="qc2" value="1">不清楚這是什麼
	</td>
</tr>
<tr>
	<th>3.您曾經使用過知訊網內建的「傳送訊息」功能給其他使用者嗎？</th>
</tr>
<tr>
	<td>
		<input type="radio" name="qc3" value="3">有
		<input type="radio" name="qc3" value="2">沒有
		<input type="radio" name="qc3" value="1">不清楚這是什麼
	</td>
</tr>
<tr>
	<td>&nbsp;</td>
</tr>
<tr>
	<th bgcolor="#FF9966">
		四、相關意見：<br />
		請在此填寫您對知訊網的相關意見或建議，歡迎您給我們鼓勵，也歡迎您對各項服務提出指教。
	</th>
</tr>
<tr>
	<td><textarea name="content" cols="70" rows="15"></textarea></td>
</tr>
<tr>
	<td align="center"><input type="submit" value="送出問卷"></td>
</tr>
</table>
</form>
<?php if (( $this->_tpl_vars['currmodule']->isadmin($this->_tpl_vars['curruser']) )): ?>
	<p><a href="view.php">查看問卷結果</a></p>
<?php endif; ?>