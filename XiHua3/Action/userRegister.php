
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
		 $userName=$_POST['userName'];
		 
		 $userPwd=$_POST['userPwd'];
		 $userPwd2=$_POST['userPwd2'];
		  if ($userPwd2!=$userPwd){
		  	echo "<script>
		  	 alert('�������벻һ�£�');
		      window.location.href='../zph2/files/userRegister.php?userName=$userName';
		  </script>";
		  }
		
		 else {
		 	if(!empty($userName)&&!empty($userPwd)){
		 
		 		
			$rows=$mysql_DB->insert2("user", array("userName"=>$userName,"userPwd"=>$userPwd));
		 	
		 if($rows>0){
		 		echo "<script>
			alert('ע��ɹ���');
 	 		window.location.href='../zph2/files/user.php';
 	 		</script>";
		 	}else {
	 			echo "<script>
			alert('ע��ʧ�ܣ�������ע�ᣡ');
	 		window.location.href='../zph2/files/userRegister.php';
 	 		</script>";
		 	}
		 }
		 else{
		 	echo "<script>
			alert('�ı������ݲ���Ϊ��!');
 	 		window.location.href='../zph2/files/userRegister.php';
 	 		</script>";//��ת��ָ��ҳ��
		 }
		 }
	}

?>
