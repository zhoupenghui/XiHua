<?php
	session_start();
	
	//�����ַ���
	/*
	 s$str="�����ķ��ܷ���������˵�ľͷ�����";
	//�����ʽת��iconv(ԭ���ı����ʽ����Ҫ�ı����ʽ����Ҫת�����ַ���);
	$b=iconv("GBK", "UTF-8", $str);//GBK��һ������ռ2���ֽڣ�UTF-8:һ������3���ֽڣ�
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
	
	for($i=0;$i<4;$i++){//���֣���ĸ��ʾ
		//�������ת��
		$string=rand(0, 15);
		//dechex������ת����ʮ����--->ʮ�����ƣ�
		$string=dechex($string);
		//���֣���ĸ��ʾ����
		$text=$text.$string;
		
	}
	$_SESSION['vocide']=$text;


	//1.����һ������
	//$img=imagecreate(150, 30);//�½�һ�����ڵ�ɫ���ͼ��:imagecreate(�����ȣ�����߶�);
	$img=imagecreatetruecolor(150,25);//����һ������: һ�����ɫͼ�� ��֧�ֵ�ɫ����ӱ�����ɫ,imagecreatetruecolor(�����ȣ�����߶�);
	
	
	//2.��������(������ɫ)
	$bgColor=imagecolorallocate($img,255,255,255);//���ñ�����ɫ  ��һ�δ�������ɫ;imagecolorallocate(��������������ɫ$red,������ɫ$green,������ɫ$blue);
	$c1=imagecolorallocate($img, 255, 0, 0);//��������ֻ������ɫ�����Ḳ�Ǳ���  ����������ɫ,ͬ�ϣ�
	imagefill($img, 0, 0, $bgColor);//������ɫimagefill����������x�����꣬y������,��
	
	//�����ص�  ���ŵ�
	for($i=0;$i<=300;$i++){
		$px=imagecolorallocate($img, rand(0, 255), rand(0, 255), rand(0, 255));//������ŵ����ɫ
		imagesetpixel($img,rand(0, 255),rand(0, 255),$px);//���㺯��imagesetpixel(������,���ŵ�λ��x,���ŵ�λ��y,���ŵ���ɫ);
	}
	//��������
	for($i=0;$i<=10;$i++){
		$line=imagecolorallocate($img, rand(0, 255), rand(0, 255), rand(0, 255));//��������ߵ���ɫ
		imageline($img, rand(0, 150), rand(0,25), rand(0, 150), rand(0,25),$line);//���ߺ���imageline����������x����ʼλ�ã� y����ʼλ�ã�x�����λ�ã�y�����λ�ã���
	}
	
	
	//3.�ڻ������������;rand���������rand($min��$max);
	//imagestring($img,14, rand(50, 100), rand(10, 20), "ajks", $c1);//imagestring�������������������С�����ݵ���ʼλ��x�ᣬ���ݵ���ʼλ��y��,��ӵ����ݣ����ݵ���ɫ)��
	imagettftext($img, 18, 5, rand(10, 100), rand(20,25), $c1, "../Font/SIMHEI.TTF", $text);
	
	//4.��ʾ��ҳ��
	header("Content-type:image/jpeg");//ͼƬ�����ʽ
	imagejpeg($img);
	
?>  