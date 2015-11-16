<?php
	/*//1.
	include_once 'editor/fckeditor.php';
	echo $basePath="/Xihua1/Tools/editor/";
	$fck=new FCKeditor("fk");
	//
	$fck->BasePath=$basePath;*/

	include_once 'fck.php';
	$fck=new FCKeditor("fk");   
	$fck->Width='800';
	$fck->Height='800';
	
	//
	$fck->BasePath=$basePath;
	$fck->Create();
	
?>