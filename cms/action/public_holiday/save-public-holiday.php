<?php
    session_start(); // used to get current user
    // date_default_timezone_set('Asia/Phnom_Penh');
    include('../../db/public-holiday-class.php');
    $pk=new Public_Hoday;	
    
    $opt=$_POST['opt'];
    $id=$_POST['id'];	
    $od=$_POST['od'];

    $date_kh=$_POST['date_kh'];
    $date_kh=trim($date_kh);
    $date_kh=str_replace("'","''",$date_kh);

    $date_en=$_POST['date_en'];
    $date_en=trim($date_en);
    $date_en=str_replace("'","''",$date_en);
    
    $title_kh=$_POST['title_kh'];
    $title_kh=trim($title_kh);
    $title_kh=str_replace("'","''",$title_kh);

    $title_en=$_POST['title_en'];
    $title_en=trim($title_en);
    $title_en=str_replace("'","''",$title_en);

    $user=$_SESSION['userID'];
    $created_at=date('Y-m-d');
    $is_disable=$_POST['is_disable'];
     
    $pk->save_public_holiday(
                            $opt,
                            $id,
                            $od,
                            $date_kh,
                            $date_en,
                            $title_kh,
                            $title_en,
                            $user,
                            $created_at,
                            $is_disable
                            );
?>