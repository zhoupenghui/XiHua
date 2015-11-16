<?php 
session_start();
    include_once '../Tools/mysql_base.php';
    	$id=$_GET['id'];
		
    	
    	
    	//查询新闻
	$sql4=$mysql_DB->selectWhere("cpwinelemon", array("*"), array("id"=>"$id"));
	$query4=$mysql_DB->query($sql4);
    
	
  $rs4=mysql_fetch_array($query4);
?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<link rel="stylesheet" type="text/css" href="css/Model.css" />
<link rel="stylesheet" type="text/css" href="css/cplemon.css" />
<link rel="stylesheet" type="text/css" href="css/aylemon.css" />
<title>柠檬酒</title>
</head>
<body>
<!--center开始-->
<div class="center">
  <!--top开始-->
  <div class="top">
    <div class="top_right"> 
    <?php
	
	$a=$_SESSION['user'];
	echo "欢迎您：".$a['userName']." ";
	echo "<a href='Login.php?log=exit'>退出</a>"." ";
?>
    <a href="#">设为首页&nbsp;</a>| <a href="#">加入收藏&nbsp;</a>| <a href="#">点击加盟&nbsp;</a> </div>
    <div class="top_left"><img src="images/top_left.png" /> </div>
  </div>
  <!--top结束-->
  <!--menu开始-->
  <div class="menu">
    <div  class="menuleft">
      <ul>
        <li style="width:60px;"><a href="Index.php">首页</a>&nbsp;|</li>
        <li><a href="aylemon.php">安岳柠檬</a>&nbsp;|</li>
        <li><a href="ktlemon.php">柠檬课堂</a>&nbsp;|</li>
        <li><a href="rdlemon.php">柠檬热点</a>&nbsp;|</li>
        <li><a href="cplemon.php">柠檬产品</a>&nbsp;|</li>
        <li><a href="schq.php">市场行情</a>&nbsp;|</li>
        <li><a href="dgrx.php">订购热线</a>&nbsp;|</li>
        <li><a href="rczp.php">人才招聘</a>&nbsp;|</li>
      </ul>
    </div>
  </div>
  <!--menu结束-->
  <!--middle开始-->
  <div class="middle">
    <div class="middle-top">
      <ul>
        <li><b>你的位置：</b></li>
        <li style="width:60px;"><a href="Index.php">首页</a>&nbsp;&gt;&gt;</li>
        <li style="width:78px;"><a href="cplemon.php">柠檬产品</a>&nbsp;&gt;&gt;</li>
            <li style="width:62px;"><a href="cpwinelemon.php">柠檬酒</a></li>
      </ul>
    </div>
    <div class="middle-left">
      <div class="middle-left1">
        <ul>
          <li style="font-size:22px; text-align:center; background-image:url(images/318.png); background-repeat:repeat-y; color:#FFFFFF;"><a href="cplemon.php">柠檬产品</a></li>
          <li style="background:url(images/4314.png) no-repeat 0 15px; margin-top:10px"><a href="cplemon.php">产品展示</a></li>
          <li style="background:url(images/4314.png) no-repeat 0 15px;"><a href="cpfreshlemon.php">新鲜柠檬</a></li>
          <li style="background:url(images/4314.png) no-repeat 0 15px;"><a href="cptealemon.php">柠檬茶</a></li>
          <li style="background:url(images/4314.png) no-repeat 0 15px;"><a href="cpwinelemon.php">柠檬酒</a></li>
        </ul>
      </div>
    </div>
    <div class="middle-right">
      <div class="middle-right1">
        <div class="mr1">柠檬酒</div>
      </div>
      <div id="middle-righ4">
        <ul>
        
	   <li style="text-align:center;">
        	
	      		<?php 
		  				echo "<img src='../".$rs4['text']."' />"."<br />".$rs4['title']; 
	 		    ?>
        	
        </li>
        
        </ul>
      </div>
      <div id="middle-righ3">
         <ul>
       <li  style="width:60px;"><a href="cpwinelemon2.php?id=<?php echo $id-1;?>" >上一篇</a></li>
	 <li  style="width:60px;"><a href="cpwinelemon2.php?id=<?php echo $id+1;?>" >下一篇</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!--bootom开始-->
  <div class="bottom">
    <ul>
     <li style="width:60px;"><a href="Index.php">首页&nbsp;</a>|</li>
      <li><a href="aylemon.php">安岳柠檬&nbsp;</a>|</li>
      <li><a href="ktlemon.php">柠檬课堂&nbsp;</a>|</li>
      <li><a href="rdlemon.php">柠檬热点&nbsp;</a>|</li>
      <li><a href="cplemon.php">柠檬产品&nbsp;</a>| </li>
      <li><a href="schq.php">市场行情&nbsp;</a>|</li>
      <li><a href="dgrx.php">订购热线&nbsp;</a>|</li>
      <li><a href="rczp.php">人才招聘&nbsp;</a>|</li>
    </ul>
  </div>
  <!--bottom结束-->
  <!--bottom2开始-->
  <div class="bottom2"> CopyRight 2009-2017 lemon.com.cn All Rights Reserved. 蜀ICP备09035346号 </div>
  <!--bottom结束-->
</div>
<!--center结束-->
</body>
</html>
