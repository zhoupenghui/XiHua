
<?php 
session_start(); 
 include_once '../Tools/mysql_base.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<script type="text/javascript" src="../js/jquery-1.7.2.js"></script>
<script type="text/javascript" src="../js/jquery.ckFormValidate-1.0.js"></script>
<script type="text/javascript" src="../js/Login.js"></script>
<link rel="stylesheet" type="text/css" href="css/Login.css"/>
<title> 登陆页面</title>
</head>

<body>




	<div id="login">
		 <div id="top">
		 	<table id="top1">
				<tr>
					<td>
		 				登陆页面
					</td>
				</tr>
			</table>
		</div>
		 <div id="center">
		 	<div id="center1">
		 	<form action="../Action/Login.php" method="post"  id="log">
		 	<ul>
				<li>用户名：<input type="text" name="userName" id="userName" value="<?php echo $_GET['userName'];?>" /></li>
				<li>密&nbsp;&nbsp;码:<input type="password" name="userPwd" id="userPwd" /></li>
				<li>验证码：<input  type="text" id="void" name="void" /><br/><br/></li>
				
					<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="/Xihua3/Tools/vocide.php" /><br/><br/></li>
				
				<li><input type="submit" value="登录" name="sub" id="sub" style="color:#993333;" />&nbsp;&nbsp;&nbsp;
			
				<a href="Register.php"><input type="button" value="注册" name="reg" id="reg" style="color:#993333" /></a></li>
			</ul>
			</form>
			</div>
		 </div>
	</div>
</body>
</html>
