<?php
//7.����Seeesion
session_start();

//5.�������ݿ������
include_once '../Tools/mysql_base.php';

	//�ж��Ƿ��˳�
	$log=$_GET['log'];
	if($log=='exit'){
			unset($_SESSION['user']);
			echo "<script>
				alert('�˳��ɹ�!');
				window.location.href='../zph/Login.php';
			</script>";
			//��ֹ��������
			exit();
	}
	
//1.�ж��û��Ƿ����ύ��ť
if(!empty($_POST['sub'])){
	//2.��ȡ�ı����ֵ
	 $userName=$_POST['userName'];
	 $userPwd=$_POST['userPwd'];
	/* $img=$_POST['img'];
		if(empty($_POST['void'])){
		
			echo "<script>
 	 			alert('��֤��Ϊ���������룡');
 	 			window.location.href='../zph/Login.php?userName=$userName';
 	 			</script>";
		}*/
	
	
//	$a= $_POST['fk'];
	
		
//3.�ж��ı����ֵ�Ƿ����Ҫ��
		
		//4.�Ƿ����ݿ���ڴ�����Ϣ�������������ݿ�����ࣩ
		$sql=$mysql_DB->selectWhere("user", array("*"), array("userName"=>$userName,"userPwd"=>$userPwd));
		$num=$mysql_DB->count($sql);
		//�ж��û��Ƿ����
		if($num>0){//�������
			$userInfo=mysql_fetch_array($mysql_DB->query($sql));//�ѽ����ת���������ʽ
			//6.���û���ŵ�session��
			$_SESSION['user']=$userInfo;
			/*echo "<script>
				alert('��½�ɹ�!');
			window.location.href='../zph/Index.php';
			</script>";*/
			
		}else{
		echo "<script>
				alert('��������˻�����!');
			window.location.href='../zph/Login.php';
			</script>";
			
		}
		
	$a=$_SESSION['vocide'];
	$b=$_POST['void'];
	if(!empty($b)){
		if($a==$b){
				echo "<script>
			alert('��¼�ɹ�');
 	 		window.location.href='../zph/Index.php';
 	 		</script>";
		}else{ echo "<script>
			alert('��֤�����');
			window.location.href='../zph/Login.php?userName=$userName';
 	 				</script>";
		}
	
		
		}
		else {
			echo "<script>
 	 		alert('��֤��Ϊ���������룡');
 	 		window.location.href='../zph/Login.php?userName=$userName';
 	 		</script>";
		}
	}

?>
