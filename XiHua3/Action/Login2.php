<?php
//7.开启Seeesion
session_start();

//5.引入数据库操作类
include_once '../Tools/mysql_base.php';

	//判断是否退出
	$log2=$_GET['log2'];
	if($log2=='exit'){
			unset($_SESSION['user2']);
			echo "<script>
				alert('退出成功!');
				window.location.href='../zph2/Login2.php';
			</script>";
			//终止程序运行
			exit();
	}
	
//1.判断用户是否点击提交按钮
if(!empty($_POST['sub2'])){
	//2.获取文本框的值
	 $user2Name=$_POST['user2Name'];
	 $user2Pwd=$_POST['user2Pwd'];
		
	
		
//3.判断文本框的值是否符合要求
		
		//4.是否数据库存在此条信息（必须引入数据库操作类）
		$sql=$mysql_DB->selectWhere("user2", array("*"), array("user2Name"=>$user2Name,"user2Pwd"=>$user2Pwd));
		$num=$mysql_DB->count($sql);
		//判断用户是否存在
		if($num>0){//如果存在
			$userInfo=mysql_fetch_array($mysql_DB->query($sql));//把结果集转换成数组格式
			//6.把用户存放到session中
			$_SESSION['user2']=$userInfo;
			echo "<script>
				alert('登陆成功!');
			window.location.href='../zph2/Index2.php';
			</script>";
			
		}else{
		echo "<script>
				alert('账户或者密码错误!');
			window.location.href='../zph2/Login2.php';
			</script>";
			
		}
		
		
	}

?>
