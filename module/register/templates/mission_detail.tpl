<body>
	<form action="mission_complete.php" method="POST">
		<div class="detail_top"></div>
		<div class="detail_middle">
			<center>
				<table width="600px" id="detail_table">
					<tr><th colspan="2"><{$title}></th></tr>
					<tr><td width="10%">起迄時間</td><td><{$datebegin}>-<{$datelast}></td></tr>
					<tr><td width="10%">官方連結</td><td><a href="<{$link}>" target="_blank"><{$link}></a></td></tr>
					<tr><td width="10%">內容簡介</td><td align="left"><{$detail}></td></tr>
<{if $mno==2}>
					<tr><td width="10%">附件下載</td><td align="left"><a href="templates/data/96_freshman_dorm.doc" target="_blank">96大一新生住宿證明</a>&nbsp;&nbsp;<a href="templates/data/96_freshman_dorm_note.xls" target="_blank">96新生住宿注意事項968修正版</a></td></tr>
<{elseif $mno==3}>					
					<tr><td width="10%">附件下載</td><td align="left"><a href="templates/data/06_loan_apply.doc" target="_blank">9606本校申請就學貸款須知(註冊組附件)</a>&nbsp;&nbsp;<a href="templates/data/tuition_reduce.doc" target="_blank">國立中央大學學雜費減免標準</a>&nbsp;&nbsp;<a href="templates/data/military.doc" target="_blank">軍公教遺族子女就學優待申請書</a></td></tr>
<{elseif $mno==5}>					
					<tr><td width="10%">附件下載</td><td align="left"><a href="templates/data/credit_reduction.doc" target="_blank">中央大學學生學分抵免申請表</a>&nbsp;&nbsp;<a href="templates/data/choose_course.pdf" target="_blank">新生電子選課說明</a></td></tr>
<{elseif $mno==6}>					
					<tr><td width="10%">附件下載</td><td align="left"><a href="templates/data/traffic_restriction.doc" target="_blank">96學年度新生報到交通管制圖暨報到流程圖</a>&nbsp;&nbsp;<a href="templates/data/ncu_map.pdf" target="_blank">中大平面圖＿96.7.31最新版</a>&nbsp;&nbsp;<a href="templates/data/routing.jpg" target="_blank">路線示意圖</a></td></tr>
<{elseif $mno==7}>					
					<tr><td width="10%">附件下載</td><td align="left"><a href="templates/data/freshman_eng_reduce.doc" target="_blank">大一英文抵免申請表</a>&nbsp;&nbsp;<a href="templates/data/freshman_eng_reduce_form.doc" target="_blank">大一英文能力分級測驗免試申請表</a>&nbsp;&nbsp;<a href="templates/data/freshman_eng_reduce_rule.doc" target="_blank">大一英文能力分級測驗免試規定</a>&nbsp;&nbsp;<a href="templates/data/freshman_eng_reduce_rule2.doc" target="_blank">國立中央大學大一英文抵免相關規定</a></td></tr>
<{elseif $mno==9}>					
					<tr><td width="10%">附件下載</td><td align="left"><a href="templates/data/health.doc" target="_blank">學士班新生健康檢查項目說明</a></td></tr>
<{elseif $mno==12}>					
					<tr><td width="10%">附件下載</td><td align="left"><a href="templates/data/arms.doc" target="_blank">役男兵役資料表</a></td></tr>
<{/if}>
				</table>
					<br />
				<input type="hidden" name="mno" value="<{$mno}>" />
				<input type="hidden" name="priority" value="<{$priority}>" />
				<{if $complete==0 && $state==1}>
					<input type="submit" value="完成" />
				<{/if}>
				<{if $admin==1}>
					<input type="button" onclick="location.href='mission_alter.php?mno=<{$mno}>'" value="修改" />
				<{/if}>
				<input type="button" onclick="location.href='index.php'" value="回上頁" />
			</center>
		</div>
		<div class="detail_bottom"></div>
	</form>
</body>
