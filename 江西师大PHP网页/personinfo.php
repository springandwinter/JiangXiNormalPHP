<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body background="image/xinxi.jpg" style="width:670px">
<div align="center">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p> 
  <h1 align="center" style="color:#CC3333">������Ϣ</h1>
  	<?php
 	 	error_reporting(E_ALL ^ E_DEPRECATED);//���ñ�������
		session_start(); 
		$username=@$_SESSION['username']; 
		$conn=mysql_connect('localhost','root','')or die('����ʧ��');
		mysql_select_db('userinfo',$conn)or die('ѡ�����ݿ�ʧ��'); 
		mysql_query("SET NAMES gb2312");
		$sql="select * from userinfomation where id='$username'";
		$result=mysql_query($sql,$conn); 
		echo "<table border=0>";
		echo "<tr><td style='color:#CC0066'><b>�û���</b></td><td  style='color:#663399'>&nbsp;&nbsp;<b>�Ա�</b></td><td style='color:#FF6666'>&nbsp;&nbsp;<b>�ֻ���</b></td><td style='color:#0033FF'>&nbsp;&nbsp;<b>����</b></td></tr>"; 
		while($row=mysql_fetch_row($result)){  
			list($id,$pwd,$sex,$phone,$email)=$row; 
			echo "<tr><td style='color:#CC0066'><b>$id</b></td><td style='color:#663399'>&nbsp;&nbsp;<b>$sex</b></td><td style='color:#FF6666'>&nbsp;&nbsp;<b>$phone</b></td><td style='color:#0033FF'>&nbsp;&nbsp;<b>$email</b></td></tr>";
		}
		echo "</table>"."<br/>"."<br/>";
?>
</div>  
  
<form id="form1" name="form1" method="post" action="">
  <div align="center">
    <input type="submit" name="Submit" value="����޸���Ϣ" />
  </div>
</form>
<?php 
	if(isset($_POST['Submit'])){
		header("location:legist.php");
	}
?>
</body>
</html>
