
<?php
//һ��������ʽ
//7.����Seeesion
session_start();
//�ж��û��Ƿ�����ע�ᰴť
/*
if(!empty($_POST['sub'])){
	 $userName=$_POST['userName'];
	if(empty($_POST['void'])){
	}
}
*/
//����1.�������ݿ������
	include_once '../Tools/mysql_base.php';//����һ��ҳ��

	if(!empty($_POST['submit'])){
		 $user2Name=$_POST['user2Name'];
		 
		 $user2Pwd=$_POST['user2Pwd'];
		 $user2Pwd2=$_POST['user2Pwd2'];
		  if ($user2Pwd2!=$user2Pwd){
		  	echo "<script>
		  	 alert('�������벻һ�£�');
		      window.location.href='addadmin.php?user2Name=$user2Name';
		  </script>";
		  }
		
		 else {
		 	if(!empty($user2Name)&&!empty($user2Pwd)){
		 
		 		
			$rows=$mysql_DB->insert2("user2", array("user2Name"=>$user2Name,"user2Pwd"=>$user2Pwd));
		 	
		 if($rows>0){
		 		echo "<script>
			alert('��ӳɹ���');
 	 		window.location.href='../zph2/files/admin.php';
 	 		</script>";
		 	}else {
	 			echo "<script>
			alert('���ʧ�ܣ�������ע�ᣡ');
	 		window.location.href='addadmin.php';
 	 		</script>";
		 	}
		 }
		 else{
		 	echo "<script>
			alert('�ı������ݲ���Ϊ��!');
 	 		window.location.href='addadmin.php';
 	 		</script>";//��ת��ָ��ҳ��
		 }
		 }
	}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<script type="text/javascript" src="../js/jquery-1.7.2.js"></script>
<script type="text/javascript" src="../js/jquery.ckFormValidate-1.0.js"></script>
<script type="text/javascript" src="../js/addadmin.js"></script>
<title>����Ա���ҳ��</title>
<link rel="stylesheet" rev="stylesheet" href="../zph2/css/style.css" type="text/css" media="all" />



<style type="text/css">
<!--
.atten {font-size:12px;font-weight:normal;color:#F00;}
-->
</style>
</head>

<body class="ContentBody">
 
<div class="MainDiv">
   <form action="addadmin.php" method="post" id="addadmin">
<table width="99%" border="0" cellpadding="0" cellspacing="0" class="CContent">

  <tr>
      <th class="tablestyle_title" >����Ա���ҳ��</th>
  </tr>
  
  <tr>
    <td class="CPanel">
		
		<table border="0" cellpadding="0" cellspacing="0" style="width:100%">
	

		<tr>
			<td width="100%">
				<fieldset style="height:100%;">
				<legend>��ӹ���Ա</legend>
				
				
					  <table border="0" cellpadding="2" cellspacing="1" style="width:100%">
					 
					  <tr>
					    <td  align="right" width="13%">����Ա��:</td>
					    <td width="41%"><input type="text" name="user2Name" id="user2Name"  style="width:250px" type="text" size="40" value="<?php echo $_GET['user2Name'];?>"/></td>
					 </tr>
					<tr>
					    <td  align="right" width="13%">����:</td>
					    <td width="41%"><input  type="text" name="user2Pwd" id="user2Pwd"  style="width:250px" type="text" size="40" value="<?php echo $_GET['user2Pwd'];?>"/></td>
					 </tr>
					  <tr>
					    <td  align="right" width="13%">�ٴ���������:</td>
					    <td width="41%"><input type="password" name="user2Pwd2" id="user2Pwd2"  style="width:250px" type="text" size="40" /></td>
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
			<input type="submit" name="submit" id="submit" value="�ύ" />��
			
			<input type="reset" name="res" id="res" value="ȡ��" /></td>
		</tr>
	
  
 
 
  </table>
 </form>
</div>

</body>
</html>
