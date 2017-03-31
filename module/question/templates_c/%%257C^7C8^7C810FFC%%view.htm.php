<?php /* Smarty version 2.6.18, created on 2007-08-26 08:02:36
         compiled from view.htm */ ?>
<table id="qbox">
	<tr>
		<td align="center" style="font-weight:bold">大一生活知訊網問卷調查結果</td>
	</tr>
	<tr>
		<th bgcolor="#FF9966">一、網站架構：</th>
	</tr>
	<tr>
		<th>1.您對知訊網的美工設計感到？</th>
	</tr>
	<tr>
		<td>
			非常喜歡：<?php echo $this->_tpl_vars['question']['qa1']['5']; ?>
票&nbsp;
			還不錯：<?php echo $this->_tpl_vars['question']['qa1']['4']; ?>
票&nbsp;
			沒意見：<?php echo $this->_tpl_vars['question']['qa1']['3']; ?>
票&nbsp;
			怪怪的：<?php echo $this->_tpl_vars['question']['qa1']['2']; ?>
票&nbsp;
			缺乏美感：<?php echo $this->_tpl_vars['question']['qa1']['1']; ?>
票
		</td>
	</tr>
	<tr>
		<td>其他</td>
	</tr>
	<tr>
		<td><div id="q_other"><?php echo $this->_tpl_vars['question']['qa1_other']; ?>
</div></td>
	</tr>
	<tr>
		<th>2.您對知訊網整體的網頁配置感到？</th>
	</tr>
	<tr>
		<td>
			非常喜歡：<?php echo $this->_tpl_vars['question']['qa2']['5']; ?>
票&nbsp;
			還不錯：<?php echo $this->_tpl_vars['question']['qa2']['4']; ?>
票&nbsp;
			沒意見：<?php echo $this->_tpl_vars['question']['qa2']['3']; ?>
票&nbsp;
			怪怪的：<?php echo $this->_tpl_vars['question']['qa2']['2']; ?>
票&nbsp;
			缺乏美感：<?php echo $this->_tpl_vars['question']['qa2']['1']; ?>
票
		</td>
	</tr>
	<tr>
		<td>其他</td>
	</tr>
	<tr>
		<td><div id="q_other"><?php echo $this->_tpl_vars['question']['qa2_other']; ?>
</div></td>
	</tr>
	<tr>
		<th>3.您對知訊網網頁瀏覽速度感到？</th>
	</tr>
	<tr>
		<td>
			非常順暢：<?php echo $this->_tpl_vars['question']['qa3']['5']; ?>
票&nbsp;
			還不錯：<?php echo $this->_tpl_vars['question']['qa3']['4']; ?>
票&nbsp;
			沒意見：<?php echo $this->_tpl_vars['question']['qa3']['3']; ?>
票&nbsp;
			有點慢：<?php echo $this->_tpl_vars['question']['qa3']['2']; ?>
票&nbsp;
			慢得很誇張：<?php echo $this->_tpl_vars['question']['qa3']['1']; ?>
票
		</td>
	</tr>
	<tr>
		<td>其他</td>
	</tr>
	<tr>
		<td><div id="q_other"><?php echo $this->_tpl_vars['question']['qa3_other']; ?>
</div></td>
	</tr>
	<tr>
		<th>4.整體來說您認為知訊網？</th>
	</tr>
	<tr>
		<td>
			非常喜歡：<?php echo $this->_tpl_vars['question']['qa4']['5']; ?>
票&nbsp;
			還不錯：<?php echo $this->_tpl_vars['question']['qa4']['4']; ?>
票&nbsp;
			沒意見：<?php echo $this->_tpl_vars['question']['qa4']['3']; ?>
票&nbsp;
			可有可無：<?php echo $this->_tpl_vars['question']['qa4']['2']; ?>
票&nbsp;
			很多餘：<?php echo $this->_tpl_vars['question']['qa4']['1']; ?>
票
		</td>
	</tr>
	<tr>
		<td>其他</td>
	</tr>
	<tr>
		<td><div id="q_other"><?php echo $this->_tpl_vars['question']['qa4_other']; ?>
</div></td>
	</tr>
	<tr>
		<th>5.請您給2007大一生活知訊網一個分數（10分最高，1分最低）</th>
	</tr>
	<tr>
		<td>
			<?php $_from = $this->_tpl_vars['question']['qa5']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
			<?php echo $this->_tpl_vars['key']; ?>
分<?php echo $this->_tpl_vars['item']; ?>
票&nbsp;
			<?php endforeach; endif; unset($_from); ?>
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
			非常有幫助：<?php echo $this->_tpl_vars['question']['qb1']['5']; ?>
票&nbsp;
			幫助很多：<?php echo $this->_tpl_vars['question']['qb1']['4']; ?>
票&nbsp;
			還可以：<?php echo $this->_tpl_vars['question']['qb1']['3']; ?>
票&nbsp;
			沒幫助：<?php echo $this->_tpl_vars['question']['qb1']['2']; ?>
票&nbsp;
			完全沒幫助：<?php echo $this->_tpl_vars['question']['qb1']['1']; ?>
票
		</td>
	</tr>
	<tr>
		<th>2.「註冊精靈」對您有幫助嗎？（非大一新生可不作答）</th>
	</tr>
	<tr>
		<td>
			非常有幫助：<?php echo $this->_tpl_vars['question']['qb2']['5']; ?>
票&nbsp;
			幫助很多：<?php echo $this->_tpl_vars['question']['qb2']['4']; ?>
票&nbsp;
			還可以：<?php echo $this->_tpl_vars['question']['qb2']['3']; ?>
票&nbsp;
			沒幫助：<?php echo $this->_tpl_vars['question']['qb2']['2']; ?>
票&nbsp;
			完全沒幫助：<?php echo $this->_tpl_vars['question']['qb2']['1']; ?>
票
		</td>
	</tr>
	<tr>
		<th>3.「BBS教學」及「選課教學」對您有幫助嗎？（非大一新生可不作答）</th>
	</tr>
	<tr>
		<td>
			非常有幫助：<?php echo $this->_tpl_vars['question']['qb3']['5']; ?>
票&nbsp;
			幫助很多：<?php echo $this->_tpl_vars['question']['qb3']['4']; ?>
票&nbsp;
			還可以：<?php echo $this->_tpl_vars['question']['qb3']['3']; ?>
票&nbsp;
			沒幫助：<?php echo $this->_tpl_vars['question']['qb3']['2']; ?>
票&nbsp;
			完全沒幫助：<?php echo $this->_tpl_vars['question']['qb3']['1']; ?>
票
		</td>
	</tr>
	<tr>
		<th>4.「新生史卡舅」對您有幫助嗎？（非大一新生可不作答）</th>
	</tr>
	<tr>
		<td>
			非常有幫助：<?php echo $this->_tpl_vars['question']['qb4']['5']; ?>
票&nbsp;
			幫助很多：<?php echo $this->_tpl_vars['question']['qb4']['4']; ?>
票&nbsp;
			還可以：<?php echo $this->_tpl_vars['question']['qb4']['3']; ?>
票&nbsp;
			沒幫助：<?php echo $this->_tpl_vars['question']['qb4']['2']; ?>
票&nbsp;
			完全沒幫助：<?php echo $this->_tpl_vars['question']['qb4']['1']; ?>
票
		</td>
	</tr>
	<tr>
		<th>5.「天下第一問」中的資訊對您有幫助嗎？</th>
	</tr>
	<tr>
		<td>
			非常有幫助：<?php echo $this->_tpl_vars['question']['qb5']['5']; ?>
票&nbsp;
			幫助很多：<?php echo $this->_tpl_vars['question']['qb5']['4']; ?>
票&nbsp;
			還可以：<?php echo $this->_tpl_vars['question']['qb5']['3']; ?>
票&nbsp;
			沒幫助：<?php echo $this->_tpl_vars['question']['qb5']['2']; ?>
票&nbsp;
			完全沒幫助：<?php echo $this->_tpl_vars['question']['qb5']['1']; ?>
票
		</td>
	</tr>
	<tr>
		<th>6.您對「天下第一問」系統的評價？</th>
	</tr>
	<tr>
		<td>
			創新而且好用：<?php echo $this->_tpl_vars['question']['qb6']['3']; ?>
票&nbsp;
			沒意見：<?php echo $this->_tpl_vars['question']['qb6']['2']; ?>
票&nbsp;
			麻煩而且不容易上手：<?php echo $this->_tpl_vars['question']['qb6']['1']; ?>
票
		</td>
	</tr>
	<tr>
		<th>7.您對「中大PA PA GO」的評價？</th>
	</tr>
	<tr>
		<td>
			藉由影片方式呈現非常好：<?php echo $this->_tpl_vars['question']['qb7']['3']; ?>
票&nbsp;
			沒意見：<?php echo $this->_tpl_vars['question']['qb7']['2']; ?>
票&nbsp;
			沒興趣或不喜歡：<?php echo $this->_tpl_vars['question']['qb7']['1']; ?>
票
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
			有：<?php echo $this->_tpl_vars['question']['qc1']['3']; ?>
票&nbsp;
			沒有：<?php echo $this->_tpl_vars['question']['qc1']['2']; ?>
票&nbsp;
			不清楚這是什麼：<?php echo $this->_tpl_vars['question']['qc1']['1']; ?>
票
		</td>
	</tr>
	<tr>
		<th>2.您曾經使用過「好友名單」嗎</th>
	</tr>
	<tr>
		<td>
			有：<?php echo $this->_tpl_vars['question']['qc2']['3']; ?>
票&nbsp;
			沒有：<?php echo $this->_tpl_vars['question']['qc2']['2']; ?>
票&nbsp;
			不清楚這是什麼：<?php echo $this->_tpl_vars['question']['qc2']['1']; ?>
票
		</td>
	</tr>
		<tr>
		<th>3.您曾經使用過知訊網內建的「傳送訊息」功能給其他使用者嗎？</th>
	</tr>
	<tr>
		<td>
			有：<?php echo $this->_tpl_vars['question']['qc3']['3']; ?>
票&nbsp;
			沒有：<?php echo $this->_tpl_vars['question']['qc3']['2']; ?>
票&nbsp;
			不清楚這是什麼：<?php echo $this->_tpl_vars['question']['qc3']['1']; ?>
票
		</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<th bgcolor="#FF9966">四、相關意見：</th>
	</tr>
	<tr>
		<td><div id="q_content"><?php echo $this->_tpl_vars['question']['content']; ?>
</div></td>
	</tr>
</table>