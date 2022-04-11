<?php
if(isset($_POST['generate_text']))
{
 include('phpqrcode/qrlib.php');
 $text = $_POST['ip_text'];
 $text2 = $_POST['qr_text'];
 $genUrl  = 'http://'.$text.'/search_material.php?search='.$text2;
 // $genUrl = 'User IP Address - '.$_SERVER['SERVER_ADDR'];
 $folder = "img/";
 $file_name = "qr.png";
 $file_name = $folder.$file_name;
 QRcode::png($genUrl,$file_name);

 echo "<script>window.open('qrcode_display.html','_self')</script>";

}
?>
