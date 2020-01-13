<?php
    session_start(); // used to get current user
    // date_default_timezone_set('Asia/Phnom_Penh');
    include('../../db/content-banner-class.php');
    $pk=new Content_Banner;	
    
    $opt=$_POST['opt'];
    $id=$_POST['id'];	
    $od=$_POST['od'];
    $mm_id=$_POST['mm_id'];
    $type_id=$_POST['type_id'];

    $title_kh=$_POST['title_kh'];
    $title_kh=trim($title_kh);
    $title_kh=str_replace("'","''",$title_kh);

    $title_en=$_POST['title_en'];
    $title_en=trim($title_en);
    $title_en=str_replace("'","''",$title_en);

    $des_kh=$_POST['des_kh'];
    $des_kh=trim($des_kh);
    $des_kh=str_replace("'","''",$des_kh);

    $des_en=$_POST['des_en'];
    $des_en=trim($des_en);
    $des_en=str_replace("'","''",$des_en);

    $photo=$_POST['photo'];
    $user=$_SESSION['userID'];
    $created_at=date('Y-m-d');
    $is_disable=$_POST['is_disable'];
    
    $pk->save_content_banner(
                            $opt,
                            $id,
                            $od,
                            $mm_id,
                            $type_id,
                            $title_kh,
                            $title_en,
                            $des_kh,
                            $des_en,
                            $photo,
                            $user,
                            $created_at,
                            $is_disable
                            );
?>