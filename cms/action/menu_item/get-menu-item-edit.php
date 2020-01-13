<?php
include('../../db/menu-item-class.php');
$pk=new MenuItem;
$id=$_POST['id'];
$opt=$_POST['opt'];
$pk->get_menu_item_edit($id,$opt);
?>