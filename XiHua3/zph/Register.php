<!--
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<script type="text/javascript" src="../js/jquery-1.7.2.js"></script>
<script type="text/javascript" src="../js/jquery.ckFormValidate-1.0.js"></script>
<script type="text/javascript" src="../js/Register.js"></script>
<link rel="stylesheet" type="text/css" href="css/Register.css"/>
<title>注册</title>
</head>

<body>
<div class="center">
<div class="top">
<h1>欢迎进入注册页面！</h1>
</div>
<div class="menu"></div>




<div class="middle">
    
    <div>
    
        <form  action="../Action/Register.php"  method="post" id="Register">
         <ul>
         <li><h1 style=" color:#3399FF;">注册</h1></li>
       		<li>姓名:
          
            <input  type="text" name="userName" id="userName" value="<?php echo $_GET['userName'];?>"/>
           </li>
        
       
       
         
          <li> 密码:
          
            <input name="userPwd" id="userPwd" type="password"   value="<?php echo $_GET['userPwd'];?>"/> <br />
          <br /></li>
         
          <li>再次输入密码:
           
            <input name="userPwd2" id="userPwd2" type="password"  /><br />
            </li>
          
          
		   <li>  <input name="submit" id="submit" type="submit" value="注册"/>
		   <input type="reset" id="res" name="res" value="取消" /></li>
		     </ul>
		  </form> 
		  </div>
</div>


<div class="bottom"></div>
<div class="bottom2"></div>
</div>
</body>
</html>

-->


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<script type="text/javascript" src="../js/jquery-1.7.2.js"></script>
<script type="text/javascript" src="../js/jquery.ckFormValidate-1.0.js"></script>
<script type="text/javascript" src="../js/Register.js"></script>
<link rel="stylesheet" type="text/css" href="../zph2/css/style.css"/>
<title>用户注册页面</title>




<style type="text/css">

.atten {font-size:12px;font-weight:normal;color:#F00;}

</style>
</head>

<body class="ContentBody">
 
<div class="MainDiv">

   <form action="../Action/Register.php" method="post" id="Register" >
<table width="99%" border="0" cellpadding="0" cellspacing="0" class="CContent">

  <tr>
      <th class="tablestyle_title" >用户注册页面
      	
      </th>
     
  </tr>
  
  <tr>
    <td class="CPanel">
		
		<table border="0" cellpadding="0" cellspacing="0" style="width:100%">
	

		<tr>
			<td width="100%">
				<fieldset style="height:100%;">
				<legend>用户注册</legend>
				
				
					  <table border="0" cellpadding="2" cellspacing="1" style="width:100%">
					 
					  <tr>
					    <td  align="right" width="13%">用户名:</td>
					    <td width="41%"><input type="text" name="userName" id="userName"  style="width:250px" type="text" size="40" value="<?php echo $_GET['userName'];?>"/></td>
					 </tr>
					<tr>
					    <td  align="right" width="13%">密码:</td>
					    <td width="41%"><input type="password" name="userPwd" id="userPwd"  style="width:250px" type="text" size="40" value="<?php echo $_GET['userPwd'];?>"/></td>
					 </tr>
					 
					 <tr>
					    <td  align="right" width="13%">再次输入密码:</td>
					    <td width="41%"><input type="password" name="userPwd2" id="userPwd2"  style="width:250px" type="text" size="40" /></td>
					 </tr>
					 
					  </table>
					  
			 <br />
				</fieldset>			</td>
		</tr>
		
		</table>
	
	
	 </td>
  </tr>

	<tr>
			<td colspan="2" align="center" height="50px">
			<input type="submit" name="submit" id="submit" value="注册" />　
			
			<input type="reset" name="res" id="res" value="取消" />
			<a href="Login.php"><input type="button" value="返回" /></a>
			</td>
		</tr>
	
  
 
 
  </table>
 </form>
</div>

</body>
</html>
