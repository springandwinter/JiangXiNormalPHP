<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<div>
<h1 align="center">江西师范大学学习氛围</h1>
</div>
<form method="post">
<div>
<input type="submit" name="shidafenwei" value="点击下载该文档"/>
<?php   
	if(isset($_POST['shidafenwei'])){
		$textname="../DongTaiWangye/江西师大学习氛围文档.txt";
		$newname="index.txt";
		header("Content-type:text/plain");
		header("Content-Length:".filesize($textname));
		header("Content-Disposition:attachment;filename=$newname");
		readfile($textname);
	}
?> 
<p style="color:#0000CC">&nbsp;&nbsp;首先，江西师大师资力量被严重削弱啦。江西师大以前有很多教的挺好的老师，最近几年都跑到广东那边去了。现在江西师大有很多年轻的老师进来，教学水平整体偏低，师资力量明显下降。再次，江西师大在全国来说，连三流的大学都算不上。从省内来说，前面有南昌大学这所国家211重点大学，后面有江西财经大学、华东交通大学的追赶。江西师大的竞争力明显下降。最后，江西师大还是普通大学，在外省来说还是二本院校。

　　近几年，教育部想把江西师大弄成211的，我就这么表达一下、也就是要江西省教育局把江西师大交出来、

　　结果江西省教育局不肯。因为这样的话江西师大在江西省招收的学生指标会少很多。

　　而且，一些费用上的利益会减少很多。

　　哎 ，可惜啊、

　　本来 师大也可以是211啊。

　　现在教育部直属的师范类院校。也就是设有免费师范生的师范类院校。就是六个。</p>
</div>
<div>
<img src="image/xuexi1.jpg" title="学习氛围"/><br/>
</div>
<div>
<img src="image/xuexi2.jpg" title="学习氛围"/><br/>
</div>
</form>
</body>
</html>
