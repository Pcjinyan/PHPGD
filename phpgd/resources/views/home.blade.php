<?php 
    //创建一个400*300的基于256色的图形
    //$img = imagecreate(400, 300);


    //直接输出到浏览器

    //imagegif($img);



    //创建一个100*100的基于256色的图形
    $img =  imagecreatetruecolor(100,100);   
    
    //设置图像所需的颜色，相当于准备了一个颜料盒

    $white = imagecolorallocate($img, 0xff, 0xff, 0xff);//白色
    $gray = imagecolorallocate($img, 0xc0, 0xc0, 0xc0);//灰色
    $darkgray = imagecolorallocate($img, 0x90, 0x90, 0x90);//暗灰色
    $navy = imagecolorallocate($img, 0x00, 0x00, 0x80);//深蓝色
    $darknavy = imagecolorallocate($img, 0x00, 0x00, 0x50);//暗深蓝色
    $red = imagecolorallocate($img, 0xff, 0x00, 0x00);//红色
    $darkred = imagecolorallocate($img, 0x90, 0x00, 0x00);//暗红蓝色
  
    //为画布填充背景颜色
    imagefill($img, 0, 0, $white);
    
    //绘制3D效果
    //浏览器的原点是在屏幕左上角
    for($i = 60; $i > 50; $i--)
    {
       imagefilledarc($img, 50, $i, 100, 50, -160, 40, $darknavy, IMG_ARC_PIE);    
       imagefilledarc($img, 50, $i, 100, 50, 40, 75, $darkgray, IMG_ARC_PIE);    
       imagefilledarc($img, 50, $i, 100, 50, 75, 200, $darkred, IMG_ARC_PIE);    
    }
    //向图片中绘制圆弧图像 
    imagefilledarc($img, 50, 50, 100, 50, -160, 40, $navy, IMG_ARC_PIE);
    imagefilledarc($img, 50, 50, 100, 50, 40, 75, $gray, IMG_ARC_PIE);
    imagefilledarc($img, 50, 50, 100, 50, 75, 200, $red, IMG_ARC_PIE);


    //在图像上面输出字符串
    imagestring($img, 1, 15, 55, '34.7%', $white);
    imagestring($img, 1, 45, 35, '55.5%', $white);
    imagepng($img);      //向浏览器输出
    imagedestroy($img); //销毁资源
?>
