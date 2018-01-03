<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<form method="post">
<div>
<h1 align="center">江西师大廉洁文化教育馆揭幕</h1><p style="color:#993300">
江西师大廉洁文化教育馆揭幕仪式在该校瑶湖校区先骕楼东面举行。江西教育厅相关领导、该校主要领导，以及江西师大新任及交流轮岗的处级领导干部、院级党委(党总支)纪检委员、纪委(监审处)全体工作人员、美术学院参与展馆设计的教师、学生入党积极分子代表参加揭幕仪式。</p>
<div align="center">
<a href='image/wenhua.jpg' title='查看原图'target='_blank'><img src='image/wenhua.jpg'></a>
</div>
<p style="color:#99CC00">
该校党委书记田延光代表学校党委致辞。他指出，学校高度重视廉政文化建设，积极调动全校力量，发动全员智慧，全力推进廉政文化进校园、进学院、进课堂等活动，形成了廉政文化建设的良好氛围，取得了良好成效。他强调，江西师大廉洁文化教育馆的揭幕是学校深入贯彻中央和中纪委精神，全面落实省纪委、省教育工委的工作部署，深入推进廉政文化进校园活动的又一创新举措，也是继江西省廉政文化研究中心在该校成立之后，该校党风廉政建设工作中的又一件大事、喜事，</p>
<div align="center">
<a href='image/wenhua2.jpg' title='查看原图'target='_blank'><img src='image/wenhua2.jpg'></a>
</div>
<p style="color:#666600">同时也必将在传播廉洁价值理念，促进党员干部改进作风、提升修养，推动学校形成风清气正的氛围中发挥更大更为重要的作用。他表示，学校在省纪委、省教育工委的指导下，继续加强教育馆的内涵建设，不断提升品味，优化管理，完善功能，扩大开放，着力把教育馆建成集廉政文化宣传、展示、教育、研究于一体，具有高校特点、师大特色的活动阵地，尽最大努力打造成我省廉政文化教育的经典之作。</p><br/><br/>

<div align="left">
<input type="submit" name="xiazai" value="点击下载该文档"/>
<?php 
	if(isset($_POST['xiazai'])){
		$textname="../DongTaiWangye/文化文档.txt";
		$newname="index.txt";
		header("Content-type:text/plain");
		header("Content-Length:".filesize($textname));
		header("Content-Disposition:attachment;filename=$newname");
		readfile($textname);
	}
?>
</div>
</div>
<div align="right" style="margin-top:-6px"> 
 <input type="submit" name="Submit" value="点击得到客观评价" />  
<?php 
	if(isset($_POST['Submit'])){
		error_reporting(E_ALL ^ E_DEPRECATED);//设置报警级别；
		$conn=mysql_connect('localhost','root','')or die('连接失败');
		mysql_select_db('userinfo',$conn)or die('选择数据库失败');
		mysql_query("SET NAMES gb2312");
		$sql="select * from culture ";
		$result=mysql_query($sql);
		echo "<table border=0>";
		echo '<tr style="color:#00FF00"><td style="color:#00FFCC">文化体现</td><td style="color:#CC0000">文化标志</td><td style="color:#9933CC">物质文化</td><td style="color:#FFFF00">精神文化</td></tr>';
		while($row=mysql_fetch_row($result)){
			list($tixian,$biaozhi,$wuzhi,$jingshen)=$row;
			echo "<tr style='color:#00FFCC'><td style='color:#CC0000'>$tixian</td><td style='color:#9933CC'>$biaozhi</td><td>$wuzhi</td><td style='color:#9966FF'>$jingshen</td></tr>";
		}
		echo "</table>"; 
	}
?>
</div>
</form>
</body>
</html>