<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body style="color:#FF6633"> 
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="670" height="150">
  <param name="movie" value="xuexiao.swf" />
  <param name="quality" value="high" />
  <embed src="xuexiao.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="670" height="150"></embed>
</object>  
	<div style="width:430px">
	<h1 style="color:#0033FF">�ҵ�ĸУ</h1> 
	<p style="color:#990033">&nbsp;&nbsp;<a href="http://www.jxnu.edu.cn">����ʦ����ѧ</a>�ǽ�����������ʡ������������������������У�����������蹤�̡��͡�׿Խ��ʦ�����ƻ�����У��ѧУ����ѧ����ʷѧ����ѧ������ѧ������ѧ����ѧ����ѧ����ѧ������ѧ������ѧ��ʮ��ѧ��������һ�壬������ʡ��������ȷ��Ϊ���ȷ�չ��ʡ���ص㣨ʦ������ѧ��
</p>	
</div> 

<div align="right" style="margin-top:-180px">
 <?php
	$year=@$_GET['year'];
	$month=@$_GET['month'];
	if(empty($year))
		$year=date('Y');
	if(empty($month))
		$month=date('n');
	$day=date("j");
	$wd_ar=array("��","һ","��","��","��","��",'��');
	$wd=date("w",mktime(0,0,0,$month,1,$year));
	$y_lnk1=$year<=1970?$year=1970:$year-1;
	$y_lnk2=$year>=2037?$year=2037:$year+1;
	
	$m_lnk1=$month<=1?$month=1:$month-1;
	$m_lnk2=$month>=12?$month=12:$month+1;
	echo "<table cellpadding=6 cellspacing=0 width=200 bgcolor=#eeeeee><tr align=center bgcolor=#cccccc>";
	echo "<td colspan=4><a href='right.php?year=$y_lnk1&month=$month'>
			<</a>".$year."��<a href='right.php?year=$y_lnk2&month=$month'>></a></td>";
	echo "<td colspan=3><a href='right.php?year=$year&month=$m_lnk1'>
			<</a>".$month."��<a href='right.php?year=$year&month=$m_lnk2'>></a></td>";
	echo "<tr align=center>";
	for($i=0;$i<7;$i++){
		echo "<td>$wd_ar[$i]</td>";
	}
	echo "</tr>";
	$tnum=$wd+date("t",mktime(0,0,0,$month,1,$year));
	for($i=0;$i<$tnum;$i++){
	$date=$i+1-$wd;
	if($i%7==0) echo "<tr align=center>";
	echo "<td>";
	if($i>=$wd){
		if($date==$day&&$month==date("n"))
			echo "<b>".$day."</br>";
		else 
			echo $date;
	
	}
	echo "</td>";
	if($i%7==6)
		echo "</tr>";
	}
	
	echo "</table>" 
?> 
</div>  
<div>
	<embed src="beijing.mp3" width="670" height="70" loop=1></embed>
</div>
</body>
</html>

