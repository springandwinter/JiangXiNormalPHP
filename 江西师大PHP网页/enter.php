<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body background="image/登入.jpg" >  
 <div align="center">
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
 <form id="form1" name="form1" method="post" action="check.php">
<table width="600" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#F0F0F0">
  <tr>
    <td style="color:#000066 ;font-size:24px"><div align="right"><b>用户名：</b></div></td>
    <td colspan="2">  
         <input type="text" name="username" /><br/>    </td>
  </tr>
  <tr>
     <td style="color:#0033FF ;font-size:24px" align="center"><div align="right"><b>密　码：</b></div></td>
    <td colspan="2"> 
          <input type="password" name="password"/><br/>  </td> 
  </tr>
  <tr>
    <td style="color:#660033 ;font-size:24px" align="center"><div align="right"><b>验证码：</b></div></td>
    <td colspan="2"> 
          <input type="text" name="textfield3" /><br/>    </td>
    <td> <dd><img style="cursor: pointer" mce_style="cursor: pointer" src="yanzhengma.php" mce_src="yanzhengma.php" id="yanzhengma" align="middle" onclick="this.src='yanzhengma.php?'" title="刷新验证码"/></dd> </td>
  </tr>
  <tr>
 <td style="color:#FF0099 ;font-size:24px" align="center"><div align="right"><b>保存时间：</b></div></td>
  	    <td>
		<select name="time">
  	      <option value="0">不保存</option>
  	      <option value="1">保存1分钟</option>
  	      <option value="2">保存1小时</option>
  	      <option value="3">保存一天</option>
          </select>	  </td>
    </td>
  </tr>
  <tr>
    <td colspan="2">
        <div align="center"><br/>
              <input type="submit" name="Submit" value="登入" />&nbsp;  
             <input type="reset" name="NO" value="取消"> &nbsp;
        <input type="submit" name="Submit3" value="注册" />&nbsp;        </div></td>
  </tr>
</table>
</form>
</div>

</body>
</html>

 