<?php
include('../../db/photo-gallery-class.php');
$pk=new Photo_Gallery;
$id=$_POST['id'];
$opt=$_POST['opt'];
$pk->get_photo_gallery_edit($id,$opt);
?>