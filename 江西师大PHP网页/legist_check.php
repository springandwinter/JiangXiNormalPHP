<?php 
	include'legist.php';
	error_reporting(E_ALL ^ E_DEPRECATED);//���ñ�������
	$id=$_POST['ID'];
	$pwd=$_POST['PWD'];
	$phone=$_POST['PHONE'];
	$email=$_POST['EMAIL']; 
	$sex=$_POST['SEX'];
	$checkphone=preg_match('/^1\d{10}$/',$phone);
	$checkEmail=preg_match('/^[a-zA-Z0-9_\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-.]+$/',$email);  
	if(isset($_POST['GO'])){
	if($id && $pwd && $checkphone && $checkEmail){
	session_start(); 
	$conn=mysql_connect('localhost','root');
	mysql_select_db('userinfo',$conn);
	mysql_query("SET NAMES gb2312");
	$sql="insert into userinfomation values('$id','$pwd','$sex','$phone','$email')";
	$result=mysql_query($sql,$conn) or die('���ݿ����ʧ�ܣ�'.mysql_error());
	echo "<script>alert('ע��ɹ�,����룡');location.href='enter.php'</script>";
	}
	else
		echo "<script>alert('ע��ʧ�ܣ���ʽ���ԣ�');location.href='legist.php'</script>";
	}
?>