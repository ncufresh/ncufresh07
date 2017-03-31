  <div class="top"></div>
  <div class="middle">
    <div class="title"></div>
	<div class="left">
	  <div class="user">
<{if $sex=='男'}>
	<{if $level==1}>
		<div id="man_pic0"></div>
	<{elseif $level==2}>
		<div id="man_pic1"></div>
	<{elseif $level==3}>
		<div id="man_pic2"></div>
	<{elseif $level==4}>
		<div id="man_pic3"></div>
	<{elseif $level==5}>
		<div id="man_pic4"></div>
	<{elseif $level==6}>
		<div id="man_pic5"></div>		
	<{/if}>
	<{if $secondary>=1}>
		  <div id="man_pic_1"></div>
	<{/if}>
	<{if $secondary>=2}>
		  <div id="man_pic_2"></div>
	<{/if}>
	<{if $secondary>=3}>
		  <div id="man_pic_3"></div>
	<{/if}>
	<{if $secondary>=4}>
		  <div id="man_pic_4"></div>
	<{/if}>
	<{if $secondary>=5}>
		  <div id="man_pic_5"></div>
	<{/if}>
	<{if $secondary>=6}>
		  <div id="man_pic_6"></div>
	<{/if}>
<{else}>
	<{if $level==1}>
		<div id="woman_pic0"></div>
	<{elseif $level==2}>
		<div id="woman_pic1"></div>
	<{elseif $level==3}>
		<div id="woman_pic2"></div>
	<{elseif $level==4}>
		<div id="woman_pic3"></div>
	<{elseif $level==5}>
		<div id="woman_pic4"></div>
	<{elseif $level==6}>
		<div id="woman_pic5"></div>		
	<{/if}>
	<{if $secondary>=1}>
		  <div id="woman_pic_1"></div>
	<{/if}>
	<{if $secondary>=2}>
		  <div id="woman_pic_2"></div>
	<{/if}>
	<{if $secondary>=3}>
		  <div id="woman_pic_3"></div>
	<{/if}>
	<{if $secondary>=4}>
		  <div id="woman_pic_4"></div>
	<{/if}>
	<{if $secondary>=5}>
		  <div id="woman_pic_5"></div>
	<{/if}>
	<{if $secondary>=6}>
		  <div id="woman_pic_6"></div>
	<{/if}>
<{/if}>
		<table id="user_table">
		  <tr><td width="50%">冒險者</td><td><{$name}></td></tr>
		  <tr><td width="50%">等級</td><td>中大的<{$title}></td></tr>
		  <tr><td width="50%">已完成主要任務</td><td><{$level-1}></td></tr>
		  <tr><td width="50%">待完成主要任務</td><td><{$left}></td></tr>
		  <tr><td width="50%">已完成次要任務</td><td><{$secondary}></td></tr>
	    </table>
		</div>
	</div>
	<div class="right">
	  <table id="schedule">
<{section name="schedule" loop=$schedule}>
        <tr>
		  <td width="10%">
<{if $schedule[schedule].state!=0}>
	<{if $flag[$smarty.section.schedule.iteration]==0}>
		    <img src="templates/images/wait.gif" />
	<{else}>
			<img src="templates/images/done.gif" />
	<{/if}>
<{/if}>
          </td>
		  <td width="30%">
		    <img src="<{$schedule[schedule].date}>" />
		  </td>
		  <td id="schedule_title" width="60%" onclick="location.href='mission_detail.php?mno=<{$schedule[schedule].mno}>&com=<{$flag[$smarty.section.schedule.iteration]}>'">
<{if $schedule[schedule].priority==1 && $schedule[schedule].state==1 && $flag[$smarty.section.schedule.iteration]==0}>
		    <font color="#009900">
<{elseif $flag[$smarty.section.schedule.iteration]==1}>
		    <font color="#CC6699">
<{elseif $schedule[schedule].state==0 || $schedule[schedule].state==2}>
		    <font color="#999999">
<{elseif $schedule[schedule].priority==2 && $schedule[schedule].state==1 && $flag[$smarty.section.schedule.iteration]==0}>
		    <font color="#33CC66">
<{/if}>
		    <{$schedule[schedule].title}></font>
		  </td>
		</tr>
<{/section}>
	  </table>
	</div>
	<div class="ps">
	<table align="center">
      <tr>
        <td>
		  <img src="templates/images/done.gif" />表任務已完成，<img src="templates/images/wait.gif" />表任務已開始但未完成，
          <font color="#999999">灰色表任務未開始或已結束</font>，<br /><font color="#CC6699">暗紅色表任務已完成</font>，<font color="#009900">深綠色表已開始的主要任務</font>，<font color="#33CC66">淺綠色表已開始的次要任務</font>
        </td>
      </tr>
    </table>
	</div>
  </div>
  <div class="bottom"></div>
