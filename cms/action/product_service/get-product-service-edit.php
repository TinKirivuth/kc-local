<?php
include('../../db/product-service-class.php');
$pk=new Product;
$id=$_POST['id'];
$opt=$_POST['opt'];
$pk->get_product_service_edit($id,$opt);
?>