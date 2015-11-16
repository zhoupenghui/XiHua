<?php 
session_start();
    include_once '../../Tools/mysql_base.php';
    	$id=$_GET['id'];
		
    	
    	
    	//查询新闻
	$sql=$mysql_DB->selectWhere("user2", array("*"), array("id"=>"$id"));
	$query=$mysql_DB->query($sql);
    
	
  $rs=mysql_fetch_array($query);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>管理员列表</title>
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
<script type="text/JavaScript">

</script>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
 
  <tr>
    <td height="30"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="62" style="background:url(../images/nav04.gif);">
          
		   <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
		  <tr>
			<td width="679" align="left"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>	
		  </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>
    <table id="subtree1" style="DISPLAY: " width="100%" border="0" cellspacing="0" cellpadding="0">

        <tr>
          <td><table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
	         
              <tr>
                <td height="40" class="font42"><table width="100%" border="0" cellpadding="4" cellspacing="1" bgcolor="#464646" class="newfont03">

					                  <tr>
                    <td height="20" colspan="9" align="center" bgcolor="#EEEEEE" class="tablestyle_title"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					 管理员细列表 </td>
                    </tr>
                  <tr>
				    <td width="15%" height="20" align="right" bgcolor="#FFFFFF">管理员名:</td>
                    <td width="85%" align="left" bgcolor="#FFFFFF">
                    <?php 
		  				echo $rs['user2Name']; 
	  			 	?>
	  			 </td>
                    </tr>
					
                  <tr>
				    <td height="20" align="right" bgcolor="#FFFFFF">密码:</td>
                    <td bgcolor="#FFFFFF">
                    <?php 
		  				echo  $rs['user2Pwd']; 
	 		   		 ?>
	 		    </td>
                    </tr>
					
                 
				
					
                </table></td>
              </tr>
            </table></td>
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
                <td width="30%" align="left"></td>
               
                <td width="40%" align="center">
                [<a href="news-content-admin.php?id=<?php echo $id-1;?>" >上一篇</a> | <a href="news-content-admin.php?id=<?php echo $id+1;?>" >下一篇</a> | <a href="admin.php" >退出</a>] 
                </td>
                 <td width="30%" align="right"></td>
              </tr>
          </table></td>
        </tr>
      </table></td>
  </tr>
</table>

</body>
</html>
