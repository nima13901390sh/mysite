session_start();
$captcha_num = rand(1000, 9999);
$_SESSION['code'] = $captcha_num;
    
session_start();
$captcha_num = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz';
$captcha_num = substr(str_shuffle($captcha_num), 0, 6);
$_SESSION["code"] = $captcha_num;
1
2
3
4
session_start();
$captcha_num = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz';
$captcha_num = substr(str_shuffle($captcha_num), 0, 6);
$_SESSION["code"] = $captcha_num;
$font_size = 30;
$img_width = 70;
$img_height = 40;
header('Content-type: image/jpeg');
$image = imagecreate($img_width, $img_height); // create background image with dimensions
imagecolorallocate($image, 255, 255, 255); // set background color

imagettftext($image, $font_size, 0, 15, 30, $text_color, 'font.ttf', $captcha_num);
imagejpeg($image);
1
2
imagettftext($image, $font_size, 0, 15, 30, $text_color, 'font.ttf', $captcha_num);
imagejpeg($image)
<html>
<head>
    <title>Simple CAPTCHA Script in PHP</title>
</head>
  <body>
    <form action="" method="post">
    	<input type="text" name="name" />
    	<input type="email" name="email" />
    	<img src="captcha.php" /><input type="text" name="captcha" />
        <input type="submit" value="submit" />
    </form>
  </body>
</html>

<?php
session_start();
	print_r($_POST);
	if(isset($_POST) & !empty($_POST)){
		if($_POST['captcha'] == $_SESSION['code']){
			echo "correct captcha";
		}else{
			echo "Invalid captcha";
		}
	}
?>
1
2
3
4
5
6
7
8
9
10
11
<?php
session_start();
	print_r($_POST);
	if(isset($_POST) & !empty($_POST)){
		if($_POST['captcha'] == $_SESSION['code']){
			echo "correct captcha";
		}else{
			echo "Invalid captcha";
		}
	}
?>