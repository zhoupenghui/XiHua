<?php
session_start(); 
 include_once '../../Tools/mysql_base.php';//连接到mysql_base.php
 	$pageNo=$_GET['pageNo'];
	$sql=$mysql_DB->selectAll("rdlemon", array("*"));//调用$mysql_DB->selectAll()语句，查询全部。
	
	$query=$mysql_DB->query($sql);
	$where=$_GET['fn'];//调用“fn”
	$id=$_GET['id'];//调用id
	if ($where=='del') {
		$rows=$mysql_DB->delete("rdlemon", array("id"=>$id));
		if($rows>0){
			echo "<script>
			alert('删除成功！');
 	 		window.location.href='rdlemon2.php';
 	 		</script>";
		}
	}
	
/*	if(empty($_SESSION['like'])){
 	echo "不是模糊查询";
 }else {
 	echo $_SESSION['like'];
 }*/
	if(!empty($_POST['sb'])){
		 $like=$_POST['like'];
		$_SESSION['like']=$like;
		  $sql=$mysql_DB->likeSelect("rdlemon", array("*"), array("title"=>$like,"author"=>$like),"or");
		 $query=$mysql_DB->query($sql);
	}

	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>柠檬热点</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.tabfont01 {	
	font-family: "宋体";
	font-size: 9px;
	color: #555555;
	text-decoration: none;
	text-align: center;
}
.font051 {font-family: "宋体";
	font-size: 12px;
	color: #333333;
	text-decoration: none;
	line-height: 20px;
}
.font201 {font-family: "宋体";
	font-size: 12px;
	color: #FF0000;
	text-decoration: none;
}
.button {
	font-family: "宋体";
	font-size: 14px;
	height: 37px;
}
html { overflow-x: auto; overflow-y: auto; border:0;} 
-->
</style>

<link href="../css/css.css" rel="stylesheet" type="text/css" />

<link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>


<body>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  
  <tr>
    <td height="30">
     <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="62" background="../images/nav04.gif">
          
            <form action="rdlemon2.php?fn=like" method="post">
		   <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
		    <tr>
			  <td width="21"><img src="../images/ico07.gif" width="20" height="18" /></td>
			  <td width="538">查看内容：按标题或作者：
					<input  type="text" name="like" id="like" size="12" />
					<input  type="submit" name="sb" id="sb" class="right-button02" value="查 询" />
				</td>
			  </tr>
          </table>
          </form>
          </td>
        </tr>
    </table>
    </td>
    </tr>
    
  <tr>
    <td>
    <table  style="DISPLAY: " width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td>
          <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
          	 <tr>
               <td height="20">
	            <a href="../../Action/addrdlemon.php"><input type="button" class="right-button08" value="添加热点" /></a>
	            </td>
          	 </tr>
          	 
              <tr>
                <td height="40" class="font42">
                
				<table width="100%" border="0" cellpadding="4" cellspacing="1" bgcolor="#464646" class="newfont03">
				 <tr class="CTitle" >
                    	<td height="22" colspan="7" align="center" style="font-size:16px">热点详细列表</td>
                  </tr>
                  <tr bgcolor="#EEEEEE">
				   
                    <td width="10%" align="center" height="30">编号</td>
					<td width="15%">热点标题</td>
                    <td width="5%">作者</td>
					<td width="10%">创建时间</td>
					<td width="12%">操作</td>
             		</tr>
              <?php 
              $pageNum=$mysql_DB->pageNum(6, $sql);//获取最大页码数
              	//当前页码数
              	if(empty($pageNo)){
              		$pageNo=1;
              	}
              	//分页显示
              	$pageNo=$mysql_DB->pageNo(6, $sql, $pageNo);
              		$sql=$mysql_DB->page(6, $sql, $pageNo);
              	$query=$mysql_DB->query($sql);
              	while ($rs=mysql_fetch_array($query)){
             	
              ?>
              	<tr bgcolor="#EEEEEE">
                	<td ><?php echo $rs['id']?></td>
                    <td ><?php echo $rs['title']?></td>  
                     <td ><?php echo $rs['author']?></td>      
                    <td ><?php echo $rs['date']?></td>
                    <td >
                    <a href="news-content-rd.php?id=<?php echo $rs['id']?>">查看</a> | 
                 		<a href="rdlemon2.php?id=<?php echo $rs['id']?>&&fn=del">删除</a></td>
                </tr>
                <?php }?>
                
              
            </table>
            </td>
        </tr>
        
        
      </table>
      
      
      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="6"><img src="../images/spacer.gif" width="1" height="1" /></td>
        </tr>
        <tr>
          <td height="33">
          <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="right-font08">
              <tr>
                <td width="50%">共 <?php echo $pageNum;?> 页 | 当前第 <?php echo $pageNo;?> 页</td>
                <td width="49%" align="right">[<a href="rdlemon2.php?pageNo=1">首页</a> | 
                <a href="rdlemon2.php?pageNo=<?php echo $pageNo-1;?>">上一页</a> | 
                <a href="rdlemon2.php?pageNo=<?php echo $pageNo+1;?>">下一页</a> | 
                <a href="rdlemon2.php?pageNo=<?php echo $pageNum;?>">末页</a>] </td>
               
              </tr>
          </table>
          </td>
        </tr>
      </table>
      
      
      
      </td>
  </tr>
  
</table>

</body>
</html>
