<?php 
session_start();
    include_once '../Tools/mysql_base.php';
    	$id=$_GET['id'];
		
    	
    	
    	//��ѯ����
	$sql3=$mysql_DB->selectWhere("ktlemon", array("*"), array("id"=>"$id"));
	$query3=$mysql_DB->query($sql3);
    
	
  $rs3=mysql_fetch_array($query3);
?>
  
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<link rel="stylesheet" type="text/css" href="css/Model.css" />
<link rel="stylesheet" type="text/css" href="css/aylemon.css" />
<title>���ʿ���</title>
</head>
<body>
<!--center��ʼ-->
<div class="center">
  <!--top��ʼ-->
  <div class="top">
     <div class="top_right">
      <?php
	
	$a=$_SESSION['user'];
	echo "��ӭ����".$a['userName']." ";
	echo "<a href='Login.php?log=exit'>�˳�</a>"." ";
?>

     <a href="#">��Ϊ��ҳ&nbsp;</a>| <a href="#">�����ղ�&nbsp;</a>| <a href="#">�������&nbsp;</a> </div>
    <div class="top_left"><img src="images/top_left.png" /> </div>
  </div>
  <!--top����-->
  <!--menu��ʼ-->
  <div class="menu">
    <div  class="menuleft">
      <ul>
      <li style="width:60px;"><a href="Index.php">��ҳ</a>&nbsp;|</li>
        <li><a href="aylemon.php">��������</a>&nbsp;|</li>
        <li><a href="ktlemon.php">���ʿ���</a>&nbsp;|</li>
        <li><a href="rdlemon.php">�����ȵ�</a>&nbsp;|</li>
        <li><a href="cplemon.php">���ʲ�Ʒ</a>&nbsp;|</li>
        <li><a href="schq.php">�г�����</a>&nbsp;|</li>
        <li><a href="dgrx.php">��������</a>&nbsp;|</li>
        <li><a href="rczp.php">�˲���Ƹ</a>&nbsp;|</li>
      </ul>
    </div>
  </div>
  <!--menu����-->
  <!--middle��ʼ-->
  <div class="middle">
    <div class="middle-top">
      <ul>
        <li><b>���λ�ã�</b></li>
        <li style="width:60px;"><a href="Index.php">��ҳ</a>&nbsp;&gt;&gt;</li>
        <li style="width:62px;"><a href="ktlemon.php">���ʿ���</a></li>
      </ul>
    </div>
    <div class="middle-left">
      <div class="middle-left1">
        <ul>
          <li style="font-size:22px; text-align:center; background-image:url(images/318.png); background-repeat:repeat-y; color:#FFFFFF;"><a href="ktlemon.php">���ʿ���</a></li>
          <li style="background:url(images/4314.png) no-repeat 0 15px; margin-top:10px"><a href="rdlemon.php">�����ȵ�</a></li>
          <li style="background:url(images/4314.png) no-repeat 0 15px;"><a href="cplemon.php">���ʲ�Ʒ</a></li>
          <li style="background:url(images/4314.png) no-repeat 0 15px;"><a href="schq.php">�г�����</a></li>
        </ul>
      </div>
    </div>
    <div class="middle-right">
      <div class="middle-right1">
        <div class="mr1">���ʿ���</div>
        
        
      </div>
      <div id="middle-right2">
        <ul>
         <li><h2 style="text-align:center;"><?php 
		  				echo $rs3['title']; 
	  			 ?>
	  		</h2>
	   </li>
	   <li style="text-align:center;">
        	
	      		<?php 
		  				echo  "����: ".$rs3['author']; 
	 		    ?>
        	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        		 <?php 
		 				 echo "����ʱ�䣺".$rs3['date']; 
	   			?>
        </li>
         
         <li>
        		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rs3['text']?>
         </li>
        </ul>
      </div>
      <div id="middle-right3">
        <ul>
       <li  style="width:60px;"><a href="news-content-kt.php?id=<?php echo $id-1;?>" >��һƪ	</a></li>
	 <li  style="width:60px;"><a href="news-content-kt.php?id=<?php echo $id+1;?>" >��һƪ</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!--bootom��ʼ-->
  <div class="bottom">
    <ul>
       <li style="width:60px;"><a href="Index.php">��ҳ&nbsp;</a>|</li>
      <li><a href="aylemon.php">��������&nbsp;</a>|</li>
      <li><a href="ktlemon.php">���ʿ���&nbsp;</a>|</li>
      <li><a href="rdlemon.php">�����ȵ�&nbsp;</a>|</li>
      <li><a href="cplemon.php">���ʲ�Ʒ&nbsp;</a>| </li>
      <li><a href="schq.php">�г�����&nbsp;</a>|</li>
      <li><a href="dgrx.php">��������&nbsp;</a>|</li>
      <li><a href="rczp.php">�˲���Ƹ&nbsp;</a>|</li>
    </ul>
  </div>
  <!--bottom����-->
  <!--bottom2��ʼ-->
  <div class="bottom2"> CopyRight 2009-2017 lemon.com.cn All Rights Reserved. ��ICP��09035346�� </div>
  <!--bottom����-->
</div>
<!--center����-->
</body>
</html>

