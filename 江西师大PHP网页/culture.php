<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>
<form method="post">
<div>
<h1 align="center">����ʦ�������Ļ������ݽ�Ļ</h1><p style="color:#993300">
����ʦ�������Ļ������ݽ�Ļ��ʽ�ڸ�У����У�����X¥������С���������������쵼����У��Ҫ�쵼���Լ�����ʦ�����μ������ָڵĴ����쵼�ɲ���Ժ����ί(����֧)�ͼ�ίԱ����ί(����)ȫ�幤����Ա������ѧԺ����չ����ƵĽ�ʦ��ѧ���뵳�������Ӵ���μӽ�Ļ��ʽ��</p>
<div align="center">
<a href='image/wenhua.jpg' title='�鿴ԭͼ'target='_blank'><img src='image/wenhua.jpg'></a>
</div>
<p style="color:#99CC00">
��У��ί������ӹ����ѧУ��ί�´ǡ���ָ����ѧУ�߶����������Ļ����裬��������ȫУ����������ȫԱ�ǻۣ�ȫ���ƽ������Ļ���У԰����ѧԺ�������õȻ���γ��������Ļ���������÷�Χ��ȡ�������ó�Ч����ǿ��������ʦ�������Ļ������ݵĽ�Ļ��ѧУ����᳹������м�ί����ȫ����ʵʡ��ί��ʡ������ί�Ĺ������������ƽ������Ļ���У԰�����һ���¾ٴ룬Ҳ�Ǽ̽���ʡ�����Ļ��о������ڸ�У����֮�󣬸�У�����������蹤���е���һ�����¡�ϲ�£�</p>
<div align="center">
<a href='image/wenhua2.jpg' title='�鿴ԭͼ'target='_blank'><img src='image/wenhua2.jpg'></a>
</div>
<p style="color:#666600">ͬʱҲ�ؽ��ڴ��������ֵ����ٽ���Ա�ɲ��Ľ����硢�����������ƶ�ѧУ�γɷ��������ķ�Χ�з��Ӹ����Ϊ��Ҫ�����á�����ʾ��ѧУ��ʡ��ί��ʡ������ί��ָ���£�������ǿ�����ݵ��ں����裬��������Ʒζ���Ż��������ƹ��ܣ����󿪷ţ������ѽ����ݽ��ɼ������Ļ�������չʾ���������о���һ�壬���и�У�ص㡢ʦ����ɫ�Ļ��أ������Ŭ���������ʡ�����Ļ������ľ���֮����</p><br/><br/>

<div align="left">
<input type="submit" name="xiazai" value="������ظ��ĵ�"/>
<?php 
	if(isset($_POST['xiazai'])){
		$textname="../DongTaiWangye/�Ļ��ĵ�.txt";
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
 <input type="submit" name="Submit" value="����õ��͹�����" />  
<?php 
	if(isset($_POST['Submit'])){
		error_reporting(E_ALL ^ E_DEPRECATED);//���ñ�������
		$conn=mysql_connect('localhost','root','')or die('����ʧ��');
		mysql_select_db('userinfo',$conn)or die('ѡ�����ݿ�ʧ��');
		mysql_query("SET NAMES gb2312");
		$sql="select * from culture ";
		$result=mysql_query($sql);
		echo "<table border=0>";
		echo '<tr style="color:#00FF00"><td style="color:#00FFCC">�Ļ�����</td><td style="color:#CC0000">�Ļ���־</td><td style="color:#9933CC">�����Ļ�</td><td style="color:#FFFF00">�����Ļ�</td></tr>';
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