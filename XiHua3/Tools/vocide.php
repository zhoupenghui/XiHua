<?php
	session_start();
	
	//定义字符集
	/*
	 s$str="发生的佛都能发生纠纷你说的就发生了";
	//编码格式转换iconv(原本的编码格式，需要的编码格式，需要转换的字符集);
	$b=iconv("GBK", "UTF-8", $str);//GBK：一个汉字占2个字节；UTF-8:一个汉字3个字节；
	$num=strlen($b);
	
	for($i=0;$i<4;$i++){
		do{
			$a=rand(0, $num-3);
		}
		while($a%3!=0);
		$str=substr($b, $a,3);
		$text=$text.$str;
		 
		
	}
	
	*/
	
	for($i=0;$i<4;$i++){//数字，字母显示
		//随机函数转换
		$string=rand(0, 15);
		//dechex：进制转换（十进制--->十六进制）
		$string=dechex($string);
		//数字，字母显示连接
		$text=$text.$string;
		
	}
	$_SESSION['vocide']=$text;


	//1.创建一个画板
	//$img=imagecreate(150, 30);//新建一个基于调色板的图像:imagecreate(画板宽度，画板高度);
	$img=imagecreatetruecolor(150,25);//创建一个画板: 一个真彩色图像 不支持调色板添加背景颜色,imagecreatetruecolor(画板宽度，画板高度);
	
	
	//2.创建画笔(设置颜色)
	$bgColor=imagecolorallocate($img,255,255,255);//设置背景颜色  第一次代表背景颜色;imagecolorallocate(画板名，画板颜色$red,画板颜色$green,画板颜色$blue);
	$c1=imagecolorallocate($img, 255, 0, 0);//下面设置只代表颜色，不会覆盖背景  代表字体颜色,同上；
	imagefill($img, 0, 0, $bgColor);//添加填充色imagefill（画板名，x轴坐标，y轴坐标,）
	
	//画像素点  干扰点
	for($i=0;$i<=300;$i++){
		$px=imagecolorallocate($img, rand(0, 255), rand(0, 255), rand(0, 255));//代表干扰点的颜色
		imagesetpixel($img,rand(0, 255),rand(0, 255),$px);//画点函数imagesetpixel(画板名,干扰点位置x,干扰点位置y,干扰点颜色);
	}
	//画干扰线
	for($i=0;$i<=10;$i++){
		$line=imagecolorallocate($img, rand(0, 255), rand(0, 255), rand(0, 255));//代表干扰线的颜色
		imageline($img, rand(0, 150), rand(0,25), rand(0, 150), rand(0,25),$line);//划线函数imageline（画板名，x轴起始位置， y轴起始位置，x轴结束位置，y轴结束位置）；
	}
	
	
	//3.在画布上添加内容;rand随机函数：rand($min，$max);
	//imagestring($img,14, rand(50, 100), rand(10, 20), "ajks", $c1);//imagestring（画板名，内容字体大小，内容的起始位置x轴，内容的起始位置y轴,添加的内容，内容的颜色)；
	imagettftext($img, 18, 5, rand(10, 100), rand(20,25), $c1, "../Font/SIMHEI.TTF", $text);
	
	//4.显示在页面
	header("Content-type:image/jpeg");//图片输入格式
	imagejpeg($img);
	
?>  