 <?php  
 	setcookie("username");
  	error_reporting(E_ALL ^ E_DEPRECATED);//���ñ�������
	session_start(); 
	$conn=mysql_connect('localhost','root','')or die('����ʧ��');
	mysql_select_db('userinfo',$conn)or die('ѡ�����ݿ�ʧ��');
	$username=$_POST['username'];
	$pwd=$_POST['password'];
	$sql="select * from userinfomation where id='$username' and pwd='$pwd'";
	$result=mysql_query($sql,$conn);
	if(isset($_POST['Submit'])){
	 if($result){ 
		$check_yanzhengma=$_SESSION['check_num'];
		$str=$_POST['textfield3'];
		$time=$_POST['time'];
		if(strcasecmp($str,$check_yanzhengma)==0){
		$_SESSION['username']=$username;
			switch($time){
				case 0:
					setcookie("username",$username);
					break;
				case 1:
					setcookie("username",$username,time()*60);
					break;
				case 2:
					setcookie("username",$username,time()*60*60);
					break;
				case 3:
					setcookie("username",$username,time()*24*60*60);
					break;
			}
			header("location:index.php");
		}else {
		echo "<script>alert('�ף�����ʧ�ܣ������µ��룡');location.href='enter.php';</script>";
	} 
	} 
 }else if(isset($_POST['Submit3'])){
 	header("location:legist.php");
 }
?>  