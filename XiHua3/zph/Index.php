<?php
session_start(); 
 include_once '../Tools/mysql_base.php';//连接到mysql_base.php
 	$pageNo=$_GET['pageNo'];
 	
	$sql=$mysql_DB->selectAll("schq", array("*"));//调用$mysql_DB->selectAll()语句，查询全部。
	$query=$mysql_DB->query($sql);
	
	$sql2=$mysql_DB->selectAll("rdlemon", array("*"));//调用$mysql_DB->selectAll()语句，查询全部。
	$query2=$mysql_DB->query($sql2);
	
		$sql3=$mysql_DB->selectAll("ktlemon", array("*"));//调用$mysql_DB->selectAll()语句，查询全部。
	$query3=$mysql_DB->query($sql3);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<link rel="stylesheet" type="text/css" href="css/Index.css" />
<title>首页</title>
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

<a href="#">设为首页</a>&nbsp;| <a href="#">加入收藏</a>&nbsp;| <a href="#">点击加盟&nbsp;</a> </div>
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
    <!--flash开始-->
    <div id="flash"> 
	<object codebase="swflash.cab#version=9,0,28,0"  width="1000" height="271" classid=clsid:D27CDB6E-AE6D-11cf-96B8-444553540000>
	<param name="movie" value="top.swf" />
	<param name="quality" value="high" />
	<param name="wmode" value="opaque" />
                <embed src="flash/top.swf" quality="high" wmode="opaque"  type="application/x-shockwave-flash" width="1000" height="271"></embed>  
</object>
 </div>
    <!--Flash结束-->
    <!--middle-left开始-->
    <div id="middle-left">
      <!--middle-left-login开始-->
      <div id="middle-left-login"> 欢&nbsp;迎&nbsp;光&nbsp;临 </div>
      <!--middle-left-login结束-->
      
      <!--middle-left-login2开始-->
      <div id="middle-left-login2"  style="background:url(images/847.jpg); width:249px; height:180px;">
       
          <div class="startl2-1"  > 
          <img src="../zph2/images/ico02.gif"  width="200" height="130" />
        </div>
          <div class="startl2-2">  
 <?php
	
	$a=$_SESSION['user'];
	echo $a['userName'];
	
?>
          </div>
          <div class="startl2-3">
            
									   <?php
	
	echo "<a href='Login.php?log=exit'>退出</a>"." ";
?>
          
            
          </div>
       
      </div>
      <!--middle-left-login2结束-->
      
      <div id="middle-left6">
        <div id="middle-left6-top">
          <div id="middle-left6-l">市场行情</div>
          <div id="middle-left6-r"><a href="schq.php">更多&gt;&gt;</a></div>
        </div>
        <div id="middle-left6-content">
          <ul>
          <?php 
              $pageNum=$mysql_DB->pageNum(5, $sql);//获取最大页码数
              	//当前页码数
              	if(empty($pageNo)){
              		$pageNo=1;
              	}
              	//分页显示
              	$pageNo=$mysql_DB->pageNo(5, $sql, $pageNo);
              		$sql=$mysql_DB->page(5, $sql, $pageNo);
              	$query=$mysql_DB->query($sql);
              	while ($rs=mysql_fetch_array($query)){
             	
              ?>
          <li><a href="news-content-schq.php?id=<?php echo $rs['id']?>"><?php echo $rs['title']?></a></li>
           
          
          <?php }?>
         
          </ul>
        </div>
      </div>
      <!--middle-left3开始-->
      <div id="middle-left3">
        <div class="middle-left3-l"> 订购热线 </div>
        <div class="middle-left3-r"><a href="dgrx.php">更多&gt;&gt;</a></div>
      </div>
      <!--middle-left3结束-->
      <!--middle-left4开始-->
      <div id="middle-left4">
        <div id="middle-left4-top">
          <div id="middle-left4-l"> 人才招聘 </div>
        </div>
        <div id="middle-left5"> <a href="rczp.php"><img src="images/2.png" /></a></div>
      </div>
      <!--middle-left4结束-->
    </div>
    <!--middle-left结束-->
    <!--middle-right开始-->
    <div id="middle-right">
      <div id="middle-right1">
        <div class="middle-right1-top">
          <div class="middle-left3-l"> 柠檬课堂 </div>
          <div class="middle-left3-r"><a href="ktlemon.php">更多&gt;&gt;</a></div>
        </div>
        <div class="middle-right1-content">
          <ul>
             <?php 
              $pageNum=$mysql_DB->pageNum(6, $sql3);//获取最大页码数
              	//当前页码数
              	if(empty($pageNo)){
              		$pageNo=1;
              	}
              	//分页显示
              	$pageNo=$mysql_DB->pageNo(6, $sql3, $pageNo);
              		$sql3=$mysql_DB->page(6, $sql3, $pageNo);
              	$query3=$mysql_DB->query($sql3);
              	while ($rs3=mysql_fetch_array($query3)){
             	
              ?>
          <li><a href="news-content-kt.php?id=<?php echo $rs3['id']?>"><?php echo $rs3['title']?></a>
           <div style="width:70px; float:right;"><?php echo $rs3['date']?></div>
          </li>
           
          
          <?php }?>
          </ul>
        </div>
      </div>
      <div id="middle-right2">
        <div class="middle-right1-top">
          <div class="middle-left3-l"> 柠檬热点 </div>
          <div class="middle-left3-r"><a href="rdlemon.php">更多&gt;&gt;</a></div>
        </div>
        <div class="middle-right1-content" style="height:165px;">
          <ul>
            <?php 
              $pageNum=$mysql_DB->pageNum(5, $sql2);//获取最大页码数
              	//当前页码数
              	if(empty($pageNo)){
              		$pageNo=1;
              	}
              	//分页显示
              	$pageNo=$mysql_DB->pageNo(5, $sql2, $pageNo);
              		$sql2=$mysql_DB->page(5, $sql2, $pageNo);
              	$query2=$mysql_DB->query($sql2);
              	while ($rs2=mysql_fetch_array($query2)){
             	
              ?>
          <li><a href="news-content-rd.php?id=<?php echo $rs2['id']?>"><?php echo $rs2['title']?></a>
           <div style="width:70px; float:right;"><?php echo $rs2['date']?></div>
          </li>
           
          
          <?php }?>
          </ul>
        </div>
      </div>
      <div id="middle-right3">
        <div id="middle-right3-left">
          <ul>
            <li>柠</li>
            <li>檬</li>
            <li>产</li>
            <li>品</li>
          </ul>
        </div>
        <div id="middle-right3-right">
          <td width="707" align="left" valign="middle">
          <style type="text/css">
			<!--
				#demo {
						MARGIN: auto; OVERFLOW: hidden; WIDTH: 709px; height:166 ; TEXT-ALIGN: center
						}
			-->
			</style>
            <div id=demo>
              <table height=160 cellSpacing=0 cellPadding=0 align=left border=0  cellspace="0">
                <tbody>
                  <tr>
                    <td id=demo1 vAlign=top><!--滚动区的高度和宽度-->
                      <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
                        <tr align="center">
                          <td><table width="168" height="160"  border="0" cellpadding="0" cellspacing="0">
                              <tr>
                                <td align="center"><a href="cplemon.php"><img src="images/b2012122123220887.jpg" width="137" height="140" border=0 /></a></td>
                              </tr>
                              <tr>
                                <td height="19" align="center" valign="middle"><a href="cplemon.php">柠檬果酒</a></td>
                              </tr>
                            </table></td>
                          <td><table width="168" height="160"  border="0" cellpadding="0" cellspacing="0">
                              <tr>
                                <td align="center"><a href="cplemon.php"><img src="images/b2012122123234425.jpg" " width="137" height="140" border=0 /></a></td>
                              </tr>
                              <tr>
                                <td height="19" align="center" valign="middle"><a href="cplemon.php">柠檬果酒</a></td>
                              </tr>
                            </table></td>
                          <td><table width="168" height="160"  border="0" cellpadding="0" cellspacing="0">
                              <tr>
                                <td align="center"><a href="cplemon.php"><img src="images/20147823336_160_120.jpg" width="137" height="140" border=0 /></a></td>
                              </tr>
                              <tr>
                                <td height="19" align="center" valign="middle"><a href="cplemon.php">柠檬油</a></td>
                              </tr>
                            </table></td>
                          <td>
                          <table width="168" height="160"  border="0" cellpadding="0" cellspacing="0">
                              <tr>
                                <td align="center"><a href="cplemon.php"><img src="images/1376532654318-22378.png" width="137" height="140" border=0 /></a></td>
                              </tr>
                              <tr>
                                <td height="19" align="center" valign="middle"><a href="cplemon.php">柠檬干片</a></td>
                              </tr>
                            </table>
                            </td>
                          <td><table width="168" height="160"  border="0" cellpadding="0" cellspacing="0">
                              <tr>
                                <td align="center"><a href="cplemon.php"><img src="images/b2012122123371349.jpg" width="137" height="140" border=0 /></a></td>
                              </tr>
                              <tr>
                                <td height="19" align="center" valign="middle"><a href="cplemon.php">柠檬汁</a></td>
                              </tr>
                            </table></td>
                          <td><table width="168" height="160"  border="0" cellpadding="0" cellspacing="0">
                              <tr>
                                <td align="center"><a href="cplemon.php"><img src="images/20121115164556324.jpg" width="137" height="140" border=0 /></a></td>
                              </tr>
                              <tr>
                                <td height="19" align="center" valign="middle"><a href="cplemon.php">柠檬茶</a></td>
                              </tr>
                            </table></td>
                          <td>
                          <table width="168" height="160"  border="0" cellpadding="0" cellspacing="0">
                              <tr>
                                <td align="center"><a href="cplemon.php"><img src="images/b2012122123334712.jpg" width="137" height="140" border=0 /></a></td>
                              </tr>
                              <tr>
                                <td height="19" align="center" valign="middle"><a href="cplemon.php">柠檬茶</a></td>
                              </tr>
                            </table></td>
                        </tr>
                      </table>
                      <!--最新图文代码结束-->
                    </td>
                    <td id="demo2" valign="top"></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <script language="JavaScript" type="text/javascript">
// JavaScript Document

var speed=20;
document.getElementById("demo2").innerHTML=document.getElementById("demo1").innerHTML
function Marquee(){
if(document.getElementById("demo2").offsetWidth-document.getElementById("demo").scrollLeft<=0)
document.getElementById("demo").scrollLeft-=document.getElementById("demo1").offsetWidth
else{
document.getElementById("demo").scrollLeft++;
}
}
var MyMar=setInterval(Marquee,speed)
document.getElementById("demo").onmouseover=function() {clearInterval(MyMar)}
document.getElementById("demo").onmouseout=function() {MyMar=setInterval(Marquee,speed)}
</script>
          </td>
        </div>
      </div>
    </div>
  </div>
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
  <!--middle-right结束-->
</div>
<!--middle结束-->
<!--bootom开始-->
<!--bottom结束-->
</div>
<!--center结束-->
</body>
</html>
