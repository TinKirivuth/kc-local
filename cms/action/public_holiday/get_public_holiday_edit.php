<?php
include('../../db/public-holiday-class.php');
$pk=new Public_Hoday;
$id=$_POST['id'];
$opt=$_POST['opt'];
$pk->get_public_holiday_edit($id,$opt);
?>