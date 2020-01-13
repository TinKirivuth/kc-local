<?php
    include('../cms/db/home-class.php');
    $pk=new Home;
    $main_menu=$_POST['main_menu'];
    $base_url=$_POST['base_url'];
    $lang=$_POST['lang'];
    
    if ($main_menu==1){
        $pk->get_about($base_url,$lang);
    }else if ($main_menu==2){
        $pk->get_product_service($base_url,$lang);
    }else if ($main_menu==3){
        $pk->get_media($base_url,$lang);
    }else if ($main_menu==4){
        $pk->get_career($base_url,$lang);
    }
?>