<?php
//1.�������ݿ������
	include_once '../Tools/mysql_base.php';
	if(!empty($_POST['sub'])){
		 $title=$_POST['title'];
		 $text=$_POST['text'];
		  $author=$_POST['author'];
		 if(!empty($title)&&!empty($text)&&!empty($author)){
		 	$rows=$mysql_DB->insert2("ktlemon", array("title"=>$title,"author"=>$author,"text"=>$text,"date"=>date("Y-m-d H:i:s")));
		 	if($rows>0){
		 		echo "<script>
			alert('��ӳɹ���');
 	 		window.location.href='../zph2/files/ktlemon2.php';
 	 		</script>";
		 	}else {
		 			echo "<script>
			alert('���ʧ�ܣ�');
 	 		window.location.href='addktlemon.php';
 	 		</script>";
		 	}
		 }else{
		 	echo "<script>
			alert('�༭�����ݲ���Ϊ��!');
 	 		window.location.href='addktlemon.php';
 	 		</script>";
		 }
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>�������ҳ��</title>
<link rel="stylesheet" rev="stylesheet" href="../zph2/css/style.css" type="text/css" media="all" />



<style type="text/css">
<!--
.atten {font-size:12px;font-weight:normal;color:#F00;}
-->
</style>
</head>

<body class="ContentBody">
 
<div class="MainDiv">
   <form action="addktlemon.php" method="post" >
<table width="99%" border="0" cellpadding="0" cellspacing="0" class="CContent">

  <tr>
      <th class="tablestyle_title" >�������ҳ��</th>
  </tr>
  
  <tr>
    <td class="CPanel">
		
		<table border="0" cellpadding="0" cellspacing="0" style="width:100%">
	

		<tr>
			<td width="100%">
				<fieldset style="height:100%;">
				<legend>��ӿ���</legend>
				
				
					  <table border="0" cellpadding="2" cellspacing="1" style="width:100%">
					 
					  <tr>
					    <td  align="right" width="13%">���ñ���:</td>
					    <td width="41%"><input type="text" name="title" id="title"  style="width:250px" type="text" size="40" /></td>
					 </tr>
					<tr>
					    <td  align="right" width="13%">����:</td>
					    <td width="41%"><input  type="text" name="author" id="author"  style="width:250px" type="text" size="40" /></td>
					 </tr>
					  <tr>
					  <td  align="right">����:</td>
					  
					  <td>
					  <?php
	
							include_once '../Tools/editor/fck.php';
							$fck=new FCKeditor("text");   
							$fck->Width='600';
							$fck->Height='350';
							$fck->BasePath=$basePath;
							$fck->Create();
	
						?>
						</td>				   
						 <!--<td  align="right" height="120px">����:</td>
					    <td colspan="3"><textarea id="text" name="text" rows="5" cols="80"></textarea></td>
					    -->
					    </tr>
					  </table>
					  
			 <br />
				</fieldset>			</td>
		</tr>
		
		</table>
	
	
	 </td>
  </tr>

	<tr>
			<td colspan="2" align="center" height="50px">
			<input type="submit" name="sub" id="sub" value="�ύ" />��
			
			<input type="reset" name="res" id="res" value="ȡ��" /></td>
		</tr>
	
  
 
 
  </table>
 </form>
</div>

</body>
</html>
