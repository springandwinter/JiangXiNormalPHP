<?php
Header("Content-type: image/PNG");
	session_start();
    //׼������������������� 
    srand((double)microtime()*1000000);
    //׼��ͼƬ����ز���  
    $im = imagecreate(62,20);
    $black = ImageColorAllocate($im, 0,0,0);  //RGB��ɫ��ʶ��
    $white = ImageColorAllocate($im, 255,255,255); //RGB��ɫ��ʶ��
    $gray = ImageColorAllocate($im, 200,200,200); //RGB��ɫ��ʶ��
    //��ʼ��ͼ    
    imagefill($im,0,0,$gray);
    while(($randval=rand()%100000)<10000);
    {
        $_SESSION["check_num"] = $randval;
        //����λ������֤�����ͼƬ 
        imagestring($im, 5, 10, 3, $randval, $black);
    }
    //�����������   
    for($i=0;$i<200;$i++){
        $randcolor = ImageColorallocate($im,rand(0,255),rand(0,255),rand(0,255));
        imagesetpixel($im, rand()%70 , rand()%30 , $randcolor);
    }
    //�����֤ͼƬ
    ImagePNG($im);
    //����ͼ���ʶ��
    ImageDestroy($im);  
?>