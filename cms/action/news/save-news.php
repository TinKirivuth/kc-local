<?php
    session_start(); // used to get current user
    // date_default_timezone_set('Asia/Phnom_Penh');
    include('../../db/news-class.php');
    $pk=new News;	
    
    $opt=$_POST['opt'];
    $id=$_POST['id'];	
    $od=$_POST['od'];

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
    $num_of_view=0;
    
    $user=$_SESSION['userID'];
    $created_at=date('Y-m-d');
    $is_disable=$_POST['is_disable'];
     
    $pk->save_news(
                            $opt,
                            $id,
                            $od,
                            $title_kh,
                            $title_en,
                            $des_kh,
                            $des_en,
                            $photo,
                            $num_of_view,
                            $user,
                            $created_at,
                            $is_disable
                            );
?>