<?php 
session_start(); 
 include_once '../Tools/mysql_base.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />

<title>��̨��½</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
<script type="text/javascript" src="../js/jquery-1.7.2.js"></script>
<script type="text/javascript" src="../js/jquery.ckFormValidate-1.0.js"></script>
<script type="text/javascript" src="../js/Login2.js"></script>
<link href="css/css.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="147" background="images/top02.gif"></td>
  </tr>
</table>
<table width="562" border="0" align="center" cellpadding="0" cellspacing="0" class="right-table03">
  <tr>
    <td width="221"><table width="95%" border="0" cellpadding="0" cellspacing="0" class="login-text01">
      
      <tr>
        <td><table width="100%" border="0" cellpadding="0" cellspacing="0" class="login-text01">
          <tr>
            <td align="center"><img src="images/ico13.gif" width="107" height="97" /></td>
          </tr>
          <tr>
            <td height="40" align="center">&nbsp;</td>
          </tr>
          
        </table></td>
        <td><img src="images/line01.gif" width="5" height="292" /></td>
      </tr>
    </table></td>
    <td>
    
    <form action="../Action/Login2.php" method="post"  id="log2">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="31%" height="35" class="login-text02">�û�����</td>
        <td width="69%"><input name="user2Name" id="user2Name" type="text" style="width:200px"  size="30" /></td>
      </tr>
      <tr>
        <td height="35" class="login-text02">�ܡ��룺</td>
        <td><input name="user2Pwd" id="user2Pwd" type="password" size="30" style="width:200px" /></td>
      </tr>
    
     <tr>
        <td height="35">&nbsp;</td>
        <td><input name="sub2" id="sub2" type="submit" class="right-button01" value="��½" />
          <input name="res2" id="res2" type="reset" class="right-button02" value="�� ��" /></td>
      </tr>
    </table>
    </form>
    </td>
  </tr>
</table>
</body>
</html>