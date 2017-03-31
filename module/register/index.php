<?
	require_once("../../mainfile.php");

	if(($curruser->haveperm($curruser->p_handler->getpermvalid()) && !strcasecmp("96",substr($curruser->sid,0,2))) || $currmodule->isadmin($curruser))
	{
		$result=$currdb->query("select * from " .$currdb->prefix("mission_user"). " where uno='" .$curruser->uno. "'");
		if($currdb->num_rows($result)==0)
		{
			$currdb->query("insert into " .$currdb->prefix("mission_user"). " set uno='" .$curruser->uno. "' , completepriority='0' , completesecondary='0'");
		}
		$result2=$currdb->query("select * from " .$currdb->prefix("mission_user"). " where uno='" .$curruser->uno. "'");
		$a=$currdb->fetch_array($result2);
		$priority=explode(",",$a['completepriority']);
		$secondary=explode(",",$a['completesecondary']);
		$currdb->query("update " .$currdb->prefix("mission_schedule"). " set state='1' where datebegin<='" .date(m). "/" .date(d). "'");
		$currdb->query("update " .$currdb->prefix("mission_schedule"). " set state='2' where datelast<='" .date(m). "/" .date(d). "'");
		$schedule=array();
		$result3=$currdb->query("select * from " .$currdb->prefix("mission_schedule"). " where 1=1 order by datebegin asc");
		if($currdb->num_rows($result3)>0)
		{
			$flag=array();
			for($m=1;$m<=$currdb->num_rows($result3);$m++)
			{
				$b=$currdb->fetch_array($result3);
				if(!in_array($b['mno'],$priority) && !in_array($b['mno'],$secondary))
				{
					$flag[$m]=0;
				}
				else
				{
					$flag[$m]=1;
				}
				array_push($schedule,$b);
			}
		}
		$level=count($priority);
		$left=6-$level;
		$slevel=count($secondary)-1;
		$result4=$currdb->query("select * from " .$currdb->prefix("mission_level"). " where level='" .$level. "'");
		$b=$currdb->fetch_array($result4);
		$currtpl->assign_by_ref("flag",$flag);
		$currtpl->assign_by_ref("name",$curruser->name);
		$currtpl->assign_by_ref("level",$level);
		$currtpl->assign_by_ref("left",$left);
		$currtpl->assign_by_ref("secondary",$slevel);
		$currtpl->assign_by_ref("title",$b['title']);
		$currtpl->assign_by_ref("pic",$b['pic']);
		$currtpl->assign_by_ref("sex",$curruser->sex);
		$currtpl->assign_by_ref("schedule",$schedule);
		$currtpl->display("index.tpl");
	}
	else
		dies("此功能限大一新生使用");
?>
