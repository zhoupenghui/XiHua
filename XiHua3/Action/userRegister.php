
<?php
//一、正则表达式
//7.开启Seeesion
session_start();
//判断用户是否点击了注册按钮
/*
if(!empty($_POST['sub'])){
	 $userName=$_POST['userName'];
	if(empty($_POST['void'])){
	}
}
*/
//二、1.加载数据库操作类
	include_once '../Tools/mysql_base.php';//加载一个页面

	if(!empty($_POST['submit'])){
		 $userName=$_POST['userName'];
		 
		 $userPwd=$_POST['userPwd'];
		 $userPwd2=$_POST['userPwd2'];
		  if ($userPwd2!=$userPwd){
		  	echo "<script>
		  	 alert('两次密码不一致！');
		      window.location.href='../zph2/files/userRegister.php?userName=$userName';
		  </script>";
		  }
		
		 else {
		 	if(!empty($userName)&&!empty($userPwd)){
		 
		 		
			$rows=$mysql_DB->insert2("user", array("userName"=>$userName,"userPwd"=>$userPwd));
		 	
		 if($rows>0){
		 		echo "<script>
			alert('注册成功！');
 	 		window.location.href='../zph2/files/user.php';
 	 		</script>";
		 	}else {
	 			echo "<script>
			alert('注册失败，请重新注册！');
	 		window.location.href='../zph2/files/userRegister.php';
 	 		</script>";
		 	}
		 }
		 else{
		 	echo "<script>
			alert('文本框内容不能为空!');
 	 		window.location.href='../zph2/files/userRegister.php';
 	 		</script>";//跳转到指定页面
		 }
		 }
	}

?>
