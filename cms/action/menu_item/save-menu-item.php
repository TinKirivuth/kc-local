<?php
    session_start(); // used to get current user
    // date_default_timezone_set('Asia/Phnom_Penh');
    include('../../db/menu-item-class.php');
    $pk=new MenuItem;	
    
    $opt=$_POST['opt'];
    $id=$_POST['id'];
    $type=$_POST['type'];	
    $od=$_POST['od'];
    
    $title_kh=$_POST['title_kh'];
    $title_kh=trim($title_kh);
    $title_kh=str_replace("'","''",$title_kh);

    $title_en=$_POST['title_en'];
    $title_en=trim($title_en);
    $title_en=str_replace("'","''",$title_en);

    $photo1=$_POST['photo1'];
    $photo=$_POST['photo'];
    $user=$_SESSION['userID'];
    $created_at=date('Y-m-d');
    $is_disable=$_POST['is_disable'];
     
    $pk->save_menu_item(
                            $opt,
                            $id,
                            $type,
                            $od,
                            $title_kh,
                            $title_en,
                            $photo1,
                            $photo,
                            $user,
                            $created_at,
                            $is_disable
                            );
?>