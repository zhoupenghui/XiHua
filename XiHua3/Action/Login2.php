<?php
//7.����Seeesion
session_start();

//5.�������ݿ������
include_once '../Tools/mysql_base.php';

	//�ж��Ƿ��˳�
	$log2=$_GET['log2'];
	if($log2=='exit'){
			unset($_SESSION['user2']);
			echo "<script>
				alert('�˳��ɹ�!');
				window.location.href='../zph2/Login2.php';
			</script>";
			//��ֹ��������
			exit();
	}
	
//1.�ж��û��Ƿ����ύ��ť
if(!empty($_POST['sub2'])){
	//2.��ȡ�ı����ֵ
	 $user2Name=$_POST['user2Name'];
	 $user2Pwd=$_POST['user2Pwd'];
		
	
		
//3.�ж��ı����ֵ�Ƿ����Ҫ��
		
		//4.�Ƿ����ݿ���ڴ�����Ϣ�������������ݿ�����ࣩ
		$sql=$mysql_DB->selectWhere("user2", array("*"), array("user2Name"=>$user2Name,"user2Pwd"=>$user2Pwd));
		$num=$mysql_DB->count($sql);
		//�ж��û��Ƿ����
		if($num>0){//�������
			$userInfo=mysql_fetch_array($mysql_DB->query($sql));//�ѽ����ת���������ʽ
			//6.���û���ŵ�session��
			$_SESSION['user2']=$userInfo;
			echo "<script>
				alert('��½�ɹ�!');
			window.location.href='../zph2/Index2.php';
			</script>";
			
		}else{
		echo "<script>
				alert('�˻������������!');
			window.location.href='../zph2/Login2.php';
			</script>";
			
		}
		
		
	}

?>
