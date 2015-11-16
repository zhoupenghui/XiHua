<?php
session_start(); 
 include_once '../Tools/mysql_base.php';//连接到mysql_base.php
 	$pageNo=$_GET['pageNo'];
	$sql4=$mysql_DB->selectAll("cplemon", array("*"));//调用$mysql_DB->selectAll()语句，查询全部。
	
	$query4=$mysql_DB->query($sql4);

	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<link rel="stylesheet" type="text/css" href="css/Model.css" />
<link rel="stylesheet" type="text/css" href="css/cplemon.css" />
<link rel="stylesheet" type="text/css" href="css/aylemon.css" />
<title>柠檬产品</title>
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
        <li style="width:62px;"><a href="cplemon.php">柠檬产品</a></li>
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
        <div class="mr1">产品展示</div>
      </div>
      <div id="middle-righ2">
        <ul>
          <?php 
              $pageNum=$mysql_DB->pageNum(9, $sql4);//获取最大页码数
              	//当前页码数
              	if(empty($pageNo)){
              		$pageNo=1;
              	}
              	//分页显示
              	$pageNo=$mysql_DB->pageNo(9, $sql4, $pageNo);
              		$sql4=$mysql_DB->page(9, $sql4, $pageNo);
              	$query4=$mysql_DB->query($sql4);
              	while ($rs4=mysql_fetch_array($query4)){
             	
               ?>
          <li><a href="cplemon2.php?id=<?php echo $rs4['id']?>""><?php echo "<img src='../".$rs4['text']."'/>".$rs4['title']?></a>
          
          </li>
          <?php }?>
        </ul>
      </div>
      <div id="middle-righ3">
        <ul>
          <li style="width:45px;">共<?php echo $pageNum;?>页</li>
          <li style="width:40px;"><a href="cplemon.php?pageNo=1">首页</a></li>
          <li style="width:50px;"><a href="cplemon.php?pageNo=<?php echo $pageNo-1;?>">上一页</a></li>
          <li><a href="cplemon.php?pageNo=1">1</a></li>
          <li><a href="cplemon.php?pageNo=2">2</a></li>
          <li><a href="cplemon.php?pageNo=3">3</a></li>
         
          
		  <li style="width:50px;"><a href="cplemon.php?pageNo=<?php echo $pageNo+1;?>">下一页</a></li>
          <li style="width:40px;"><a href="cplemon.php?pageNo=<?php echo $pageNum;?>">尾页</a></li>
          <li style="width:60px;">当前第<?php echo $pageNo;?>页</li>
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
