<?php
//7.开启Seeesion
session_start();

//5.引入数据库操作类
include_once '../Tools/mysql_base.php';

	//判断是否退出
	$log=$_GET['log'];
	if($log=='exit'){
			unset($_SESSION['user']);
			echo "<script>
				alert('退出成功!');
				window.location.href='../zph/Login.php';
			</script>";
			//终止程序运行
			exit();
	}
	
//1.判断用户是否点击提交按钮
if(!empty($_POST['sub'])){
	//2.获取文本框的值
	 $userName=$_POST['userName'];
	 $userPwd=$_POST['userPwd'];
	/* $img=$_POST['img'];
		if(empty($_POST['void'])){
		
			echo "<script>
 	 			alert('验证码为空重新输入！');
 	 			window.location.href='../zph/Login.php?userName=$userName';
 	 			</script>";
		}*/
	
	
//	$a= $_POST['fk'];
	
		
//3.判断文本框的值是否符合要求
		
		//4.是否数据库存在此条信息（必须引入数据库操作类）
		$sql=$mysql_DB->selectWhere("user", array("*"), array("userName"=>$userName,"userPwd"=>$userPwd));
		$num=$mysql_DB->count($sql);
		//判断用户是否存在
		if($num>0){//如果存在
			$userInfo=mysql_fetch_array($mysql_DB->query($sql));//把结果集转换成数组格式
			//6.把用户存放到session中
			$_SESSION['user']=$userInfo;
			/*echo "<script>
				alert('登陆成功!');
			window.location.href='../zph/Index.php';
			</script>";*/
			
		}else{
		echo "<script>
				alert('密码或者账户错误!');
			window.location.href='../zph/Login.php';
			</script>";
			
		}
		
	$a=$_SESSION['vocide'];
	$b=$_POST['void'];
	if(!empty($b)){
		if($a==$b){
				echo "<script>
			alert('登录成功');
 	 		window.location.href='../zph/Index.php';
 	 		</script>";
		}else{ echo "<script>
			alert('验证码错误');
			window.location.href='../zph/Login.php?userName=$userName';
 	 				</script>";
		}
	
		
		}
		else {
			echo "<script>
 	 		alert('验证码为空重新输入！');
 	 		window.location.href='../zph/Login.php?userName=$userName';
 	 		</script>";
		}
	}

?>
