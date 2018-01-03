<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="600" border="1" cellspacing="0" cellpadding="0">
    <tr>
      <td colspan="2" align="center">我每天消费情况统计</td>
    </tr>
    <tr>
      <td>伙食</td>
      <td><input type="text" name="array[]" />
        元</td>
    </tr>
    <tr>
      <td>零食</td>
      <td><input type="text" name="array[]" />
        元</td>
    </tr>
    <tr>
      <td>交友</td>
      <td><input type="text" name="array[]" />
        元</td>
    </tr>
    <tr>
      <td>话费</td>
      <td><input type="text" name="array[]" />
        元</td>
    </tr>
    <tr>
      <td>其他</td>
      <td><input type="text" name="array[]" />
        元</td>
    </tr>
    <tr>
      <td colspan="2" align="center">  
            <input type="submit" name="Submit" value="提交" />
       </td>
    </tr>
  </table>
</form>
</body>
</html>
<?php 
	$array=$_POST['array'];
	$options=array('伙食','零食','交友','话费','其他');
	$image=imagecreatetruecolor(400,400);
	imagefill($image,0,0,imagecolorallocate($image,255,255,255));
	$black=imagecolorallocate($image,0,0,0);
	$x=200;
	$y=200;
	$w=360;
	$h=360;
	$i=0;
	$sum=0;
	$temp=0;
	$font="宋体";
	foreach($array as $value){
		$sum=$sum+$value;
	}
	for($k=0;$k<count($array) ;$k++){
		$temp+=$array[$k];
		$points[$k]=($temp/$sum)*360;
		$percent[$k]=number_format(($array[$k]/$sum)*100,1);
		if($k==0){
			$startdegrees=$i;
			$endeddegrees=$points[$k];
			
		}else{
			$startdegrees=$points[$k-1];
			$endeddegrees=$points[$k];
			
		}
		$midpoints=$startdegrees+($endeddegrees-$startdegrees)/2;
		$radian=$midpoints*pi()/180;
		$color=imagecolorallocate($image,rand(0,255),rand(0,255),rand(0,255));
		imagefilledarc($image,$x,$y,$w,$h,$i,$points[$k].$percent[$k],$color,IMG_ARC_PIE);	
		$codetext=iconv("GB2312","UTF-8",$options[$k].$percent[$k]."%");
		if($midpoints>=90&&$midpoints<=270){
			$mid_x=(cos($radian)*$w/2)*3/4+$x;
			$mid_y=(sin($radian)*$h/2)*3/4+$y;
			$angle=180-$midpoints;
		}else{
			$mid_x=(cos($radian)*$w/2)/2+$x;
			$mid_y=(sin($radian)*$h/2)/2+$y;
			$angle=360-$midpoints;
		}
		imagettftext($image,12,$angle,$mid_x,$mid_y,$black,$font,$codetext);
		$i=$points[$k];
	}
	$file="../DongTaiWangYe";
	imagegif($image,$file);
	echo "<font face='黑体' size='5' color='blue'>正常消费比例图：</font><br/>";
	echo "<img src=$file>";
	imagedestroy($image);
?>
