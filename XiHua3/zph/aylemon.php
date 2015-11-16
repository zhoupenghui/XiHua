<?php 
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<link rel="stylesheet" type="text/css" href="css/Model.css" />
<link rel="stylesheet" type="text/css" href="css/aylemon.css" />
<title>安岳柠檬</title>
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
        <li style="width:60px;"><a href="Index.php">首页&nbsp;</a>|</li>
        <li><a href="aylemon.php">安岳柠檬&nbsp;</a>|</li>
        <li><a href="ktlemon.php">柠檬课堂&nbsp;</a>|</li>
        <li><a href="rdlemon.php">柠檬热点&nbsp;</a>|</li>
        <li><a href="cplemon.php">柠檬产品&nbsp;</a>|</li>
        <li><a href="schq.php">市场行情&nbsp;</a>|</li>
        <li><a href="dgrx.php">订购热线&nbsp;</a>|</li>
        <li><a href="rczp.php">人才招聘&nbsp;</a>|</li>
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
        <li style="width:62px;"><a href="aylemon.php">安岳柠檬</a></li>
      </ul>
    </div>
    <div class="middle-left">
      <div class="middle-left1">
        <ul>
          <li style="font-size:22px; text-align:center; background-image:url(images/318.png); background-repeat:repeat-y; color:#FFFFFF;"><a href="aylemon.php">安岳柠檬</a></li>
          <li style="background:url(images/4314.png) no-repeat 0 15px; margin-top:10px"><a href="aylemon.php">柠檬简介</a></li>
          <li style="background:url(images/4314.png) no-repeat 0 15px;"><a href="newsaylemon.php">新闻咨讯</a></li>
		      <li style="background:url(images/4314.png) no-repeat 0 15px;"><a href="dgrx.php">订购热线</a></li>
        </ul>
      </div>
    </div>
    <div class="middle-right">
		<div class="middle-right1"><div class="mr1">柠檬简介</div></div>
		<div id="middle-right2">
				<ul>
					<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/b2012122123171178.jpg" style="width:200px; height:200px; float:right;" />
					柠檬为芸香科常绿小乔木，原产中国喜马拉雅山麓，目前地中海沿岸、东南亚</li>
					<li>和美洲等地都有分布，我国四川、台湾、福建、云南、广西等地也有栽培。其中四川</li>
					<li>安岳种植面积较大，占全国种植柠檬80%以上。嫩叶和花，都带紫红色，果长圆形或</li>
					<li>卵圆形，大小如鸡蛋，淡黄色，表面粗糙，顶端呈乳头状，果皮较厚，芳香浓郁，果</li>
					<li>汁较酸，但可配制饮料，还可提炼成香料。美国和意大利是柠檬的著名产地，而法国</li>
					<li>则是世界上食用柠檬最多的国家。</li>
					<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;柠檬是世界上有药用价值的水果之一，它富含维生素C、柠檬酸、苹果酸、高量钾元素和低量钠元素等，对人体</li>
					<li>十分有益。维生素C能维持人体各种组织和细胞间质的生成，并保持它们正常　　的生理机能。人体内的母质、粘合和</li>
					<li>成胶质等，都需要维生素C来保护。当维生素C缺少了，细胞之间的间质——胶状物也就跟着变少。这样，细胞组织就</li>
					<li>会变脆，失去抵抗外力的能力，人体就容易出现坏血症；它还有更多用途，如预防感冒、刺激造血和抗癌等作用。</li>
					<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;柠檬果汁是一种鲜美爽口的饮料，其制作十分简单方便，直接用鲜果压榨出果汁，再配以糖、冰块、冰水，搅拌</li>
					<li>后即可饮用。那淡淡的酸甜，幽幽的清香直沁人心脾，令人心神清爽，唇齿留香。目前，柠檬果汁已被世界各地的人</li>
					<li>们所接受。</li>
					
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
