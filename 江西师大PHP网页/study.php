<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>
<div>
<h1 align="center">����ʦ����ѧѧϰ��Χ</h1>
</div>
<form method="post">
<div>
<input type="submit" name="shidafenwei" value="������ظ��ĵ�"/>
<?php   
	if(isset($_POST['shidafenwei'])){
		$textname="../DongTaiWangye/����ʦ��ѧϰ��Χ�ĵ�.txt";
		$newname="index.txt";
		header("Content-type:text/plain");
		header("Content-Length:".filesize($textname));
		header("Content-Disposition:attachment;filename=$newname");
		readfile($textname);
	}
?> 
<p style="color:#0000CC">&nbsp;&nbsp;���ȣ�����ʦ��ʦ������������������������ʦ����ǰ�кܶ�̵�ͦ�õ���ʦ��������궼�ܵ��㶫�Ǳ�ȥ�ˡ����ڽ���ʦ���кܶ��������ʦ��������ѧˮƽ����ƫ�ͣ�ʦ�����������½����ٴΣ�����ʦ����ȫ����˵���������Ĵ�ѧ���㲻�ϡ���ʡ����˵��ǰ�����ϲ���ѧ��������211�ص��ѧ�������н����ƾ���ѧ��������ͨ��ѧ��׷�ϡ�����ʦ��ľ����������½�����󣬽���ʦ������ͨ��ѧ������ʡ��˵���Ƕ���ԺУ��

���������꣬��������ѽ���ʦ��Ū��211�ģ��Ҿ���ô���һ�¡�Ҳ����Ҫ����ʡ�����ְѽ���ʦ�󽻳�����

�����������ʡ�����ֲ��ϡ���Ϊ�����Ļ�����ʦ���ڽ���ʡ���յ�ѧ��ָ����ٺܶࡣ

�������ң�һЩ�����ϵ��������ٺܶࡣ

������ ����ϧ����

�������� ʦ��Ҳ������211����

�������ڽ�����ֱ����ʦ����ԺУ��Ҳ�����������ʦ������ʦ����ԺУ������������</p>
</div>
<div>
<img src="image/xuexi1.jpg" title="ѧϰ��Χ"/><br/>
</div>
<div>
<img src="image/xuexi2.jpg" title="ѧϰ��Χ"/><br/>
</div>
</form>
</body>
</html>
