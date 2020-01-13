<?php
    session_start(); // used to get current user
    // date_default_timezone_set('Asia/Phnom_Penh');
    include('../../db/photo-gallery-class.php');
    $pk=new Photo_Gallery;	
    
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
    $photo1=$_POST['photo1'];
    $photo2=$_POST['photo2'];
    $photo3=$_POST['photo3'];
    $photo4=$_POST['photo4'];
    $photo5=$_POST['photo5'];
    $photo6=$_POST['photo6'];
    $photo7=$_POST['photo7'];
    $photo8=$_POST['photo8'];
    $photo9=$_POST['photo9'];
    $photo10=$_POST['photo10'];
    
    $user=$_SESSION['userID'];
    $created_at=date('Y-m-d');
    $is_disable=$_POST['is_disable'];
     
    $pk->save_photo_gallery(
                            $opt,
                            $id,
                            $od,
                            $title_kh,
                            $title_en,
                            $des_kh,
                            $des_en,
                            $photo,
                            $photo1,
                            $photo2,
                            $photo3,
                            $photo4,
                            $photo5,
                            $photo6,
                            $photo7,
                            $photo8,
                            $photo9,
                            $photo10,
                            $user,
                            $created_at,
                            $is_disable
                            );
?>