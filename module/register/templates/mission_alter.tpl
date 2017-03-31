<body>
	<form action="mission_altersure.php" method="POST">
		<center>
			<table border="2" bordercolor="f0f0f0">
				<tr><td>標題</td><td><input type="text" size="20" name="title" value="<{$title}>" /></td></tr>
				<tr><td>開始時間</td><td><input type="text" size="10" name="datebegin" value="<{$datebegin}>" /></td></tr>
				<tr><td>結束時間</td><td><input type="text" size="10" name="datelast" value="<{$datelast}>" /></td></tr>
				<tr><td>官方連結</td><td><input type="text" size="20" name="link" value="<{$link}>" /></td></tr>
				<tr><td>內容簡介</td><td><textarea cols="48" rows="15" name="detail"><{$detail}></textarea></td></tr>
			</table>
				<br />
			<input type="hidden" name="mno" value="<{$mno}>" />
			<input type="submit" value="送出" />
			<input type="button" onclick="location.href='index.php'" value="回上頁" />
		</center>
	</form>
</body>