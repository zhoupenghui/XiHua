<?php 
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<link rel="stylesheet" type="text/css" href="css/Model.css" />
<link rel="stylesheet" type="text/css" href="css/aylemon.css" />
<title>��������</title>
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
        <li style="width:60px;"><a href="Index.php">��ҳ&nbsp;</a>|</li>
        <li><a href="aylemon.php">��������&nbsp;</a>|</li>
        <li><a href="ktlemon.php">���ʿ���&nbsp;</a>|</li>
        <li><a href="rdlemon.php">�����ȵ�&nbsp;</a>|</li>
        <li><a href="cplemon.php">���ʲ�Ʒ&nbsp;</a>|</li>
        <li><a href="schq.php">�г�����&nbsp;</a>|</li>
        <li><a href="dgrx.php">��������&nbsp;</a>|</li>
        <li><a href="rczp.php">�˲���Ƹ&nbsp;</a>|</li>
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
        <li style="width:62px;"><a href="aylemon.php">��������</a></li>
      </ul>
    </div>
    <div class="middle-left">
      <div class="middle-left1">
        <ul>
          <li style="font-size:22px; text-align:center; background-image:url(images/318.png); background-repeat:repeat-y; color:#FFFFFF;"><a href="aylemon.php">��������</a></li>
          <li style="background:url(images/4314.png) no-repeat 0 15px; margin-top:10px"><a href="aylemon.php">���ʼ��</a></li>
          <li style="background:url(images/4314.png) no-repeat 0 15px;"><a href="newsaylemon.php">������Ѷ</a></li>
		      <li style="background:url(images/4314.png) no-repeat 0 15px;"><a href="dgrx.php">��������</a></li>
        </ul>
      </div>
    </div>
    <div class="middle-right">
		<div class="middle-right1"><div class="mr1">���ʼ��</div></div>
		<div id="middle-right2">
				<ul>
					<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/b2012122123171178.jpg" style="width:200px; height:200px; float:right;" />
					����Ϊܿ��Ƴ���С��ľ��ԭ���й�ϲ������ɽ´��Ŀǰ���к��ذ���������</li>
					<li>�����޵ȵض��зֲ����ҹ��Ĵ���̨�塢���������ϡ������ȵ�Ҳ�����ࡣ�����Ĵ�</li>
					<li>������ֲ����ϴ�ռȫ����ֲ����80%���ϡ���Ҷ�ͻ��������Ϻ�ɫ������Բ�λ�</li>
					<li>��Բ�Σ���С�缦��������ɫ������ֲڣ����˳���ͷ״����Ƥ�Ϻ񣬷���Ũ������</li>
					<li>֭���ᣬ�����������ϣ��������������ϡ�����������������ʵ��������أ�������</li>
					<li>����������ʳ���������Ĺ��ҡ�</li>
					<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;��������������ҩ�ü�ֵ��ˮ��֮һ��������ά����C�������ᡢƻ���ᡢ������Ԫ�غ͵�����Ԫ�صȣ�������</li>
					<li>ʮ�����档ά����C��ά�����������֯��ϸ�����ʵ����ɣ���������������������������ܡ������ڵ�ĸ�ʡ�ճ�Ϻ�</li>
					<li>�ɽ��ʵȣ�����Ҫά����C����������ά����Cȱ���ˣ�ϸ��֮��ļ��ʡ�����״��Ҳ�͸��ű��١�������ϸ����֯��</li>
					<li>���࣬ʧȥ�ֿ���������������������׳��ֻ�Ѫ֢�������и�����;����Ԥ����ð���̼���Ѫ�Ϳ��������á�</li>
					<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;���ʹ�֭��һ������ˬ�ڵ����ϣ�������ʮ�ּ򵥷��㣬ֱ�����ʹ�ѹե����֭���������ǡ����顢��ˮ������</li>
					<li>�󼴿����á��ǵ������������ĵ�����ֱ������Ƣ������������ˬ���������㡣Ŀǰ�����ʹ�֭�ѱ�������ص���</li>
					<li>�������ܡ�</li>
					
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
