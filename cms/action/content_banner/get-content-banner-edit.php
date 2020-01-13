<?php
include('../../db/content-banner-class.php');
$pk=new Content_Banner;
$id=$_POST['id'];
$opt=$_POST['opt'];
$pk->get_content_banner_edit($id,$opt);
?>