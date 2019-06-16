<?php
if(isset($_POST['auth_t']))
{
 
  $auth_t = $_POST['auth_t'];
 $auth_f = $_POST['auth_f'];
 $sidefont = $_POST['sidefont'];
 $sideY = $_POST['sideY'];
 $sideX = $_POST['sideX'];
 $hFont = $_POST['head_f'];
 $tFont = $_POST['text_f'];
 $hY = $_POST['header_Y'];
 $tY = $_POST['text_Y'];
 $setA = $_POST['set_auth'];
 $setQ = $_POST['set_quote'];
 $setH = $_POST['set_header'];
 $setS = $_POST['set_sidetext'];
 $setImg = $_POST['image'];
  
 setcookie("author_top", $auth_t, time() + (86400 * 30), "/"); // 86400 = 1day;
 setcookie("author_font", $auth_f, time() + (86400 * 30), "/"); // 86400 = 1day;
 setcookie("righttext_font", $sidefont, time() + (86400 * 30), "/"); // 86400 = 1day;
 setcookie("righttext_Y", $sideY, time() + (86400 * 30), "/"); // 86400 = 1day;
 setcookie("righttext_X", $sideX, time() + (86400 * 30), "/"); // 86400 = 1day;
 setcookie("header_font", $hFont, time() + (86400 * 30), "/"); // 86400 = 1day;
 setcookie("text_font", $tFont, time() + (86400 * 30), "/"); // 86400 = 1day;
 setcookie("header_Y", $hY, time() + (86400 * 30), "/"); // 86400 = 1day;
 setcookie("text_Y", $tY, time() + (86400 * 30), "/"); // 86400 = 1day;
 setcookie("set_author", $setA, time() + (86400 * 30), "/"); // 86400 = 1day;
 setcookie("set_quote", $setQ, time() + (86400 * 30), "/"); // 86400 = 1day;
 setcookie("set_header", $setH, time() + (86400 * 30), "/"); // 86400 = 1day;
 setcookie("set_righttext", $setS, time() + (86400 * 30), "/"); // 86400 = 1day;
 setcookie("set_image", $setImg, time() + (86400 * 30), "/"); // 86400 = 1day;
 
}
if(isset($_POST['load']))
{
 $author_top = $_COOKIE['author_top'];
 $author_font = $_COOKIE['author_font'];
 $righttext_font = $_COOKIE['righttext_font'];
 $righttext_Y = $_COOKIE['righttext_Y'];
 $righttext_X = $_COOKIE['righttext_X'];
 $header_font = $_COOKIE['header_font'];
 $text_font = $_COOKIE['text_font'];
 $header_Y = $_COOKIE['header_Y'];
 $text_Y = $_COOKIE['text_Y'];
 $set_author = $_COOKIE['set_author'];
 $set_quote = $_COOKIE['set_quote'];
 $set_header = $_COOKIE['set_header'];
 $set_righttext = $_COOKIE['set_righttext'];
 $set_image = $_COOKIE['set_image'];
	
	
	
	
	echo $author_top . "|" . $author_font . "|" . $righttext_font . "|". $righttext_Y. "|".$righttext_X. "|".$header_font."|".$text_font."|".$header_Y."|".$text_Y."|".$set_author."|".$set_quote."|".$set_header."|".$set_righttext."|".$set_image;
	
	
	
}
?>