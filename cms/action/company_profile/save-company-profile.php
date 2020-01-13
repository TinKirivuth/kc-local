<?php
    session_start(); // used to get current user
    // date_default_timezone_set('Asia/Phnom_Penh');
    include('../../db/company-profile-class.php');
    $pk=new Company;	
    
    $opt=$_POST['opt'];
    $id=$_POST['id'];	
    $od=$_POST['txt_od'];

    $con_title_kh=$_POST['txt_con_title_kh'];
    $con_title_kh=trim($con_title_kh);
    $con_title_kh=str_replace("'","''",$con_title_kh);

    $con_title_en=$_POST['txt_con_title_en'];
    $con_title_en=trim($con_title_en);
    $con_title_en=str_replace("'","''",$con_title_en);

    $con_des_kh=$_POST['txt_con_des_kh'];
    $con_des_kh=trim($con_des_kh);
    $con_des_kh=str_replace("'","''",$con_des_kh);
    
    $con_des_en=$_POST['txt_con_des_en'];
    $con_des_en=trim($con_des_en);
    $con_des_en=str_replace("'","''",$con_des_en);

    $mis_title_kh=$_POST['txt_mis_title_kh'];
    $mis_title_kh=trim($mis_title_kh);
    $mis_title_kh=str_replace("'","''",$mis_title_kh);

    $mis_title_en=$_POST['txt_mis_title_en'];
    $mis_title_en=trim($mis_title_en);
    $mis_title_en=str_replace("'","''",$mis_title_en);

    $mis_des_kh=$_POST['txt_mis_des_kh'];
    $mis_des_kh=trim($mis_des_kh);
    $mis_des_kh=str_replace("'","''",$mis_des_kh);

    $mis_des_en=$_POST['txt_mis_des_en'];
    $mis_des_en=trim($mis_des_en);
    $mis_des_en=str_replace("'","''",$mis_des_en);

    $vi_title_kh=$_POST['txt_vi_title_kh'];
    $vi_title_kh=trim($vi_title_kh);
    $vi_title_kh=str_replace("'","''",$vi_title_kh);

    $vi_title_en=$_POST['txt_vi_title_en'];
    $vi_title_en=trim($vi_title_en);
    $vi_title_en=str_replace("'","''",$vi_title_en);

    $vi_des_kh=$_POST['txt_vi_des_kh'];
    $vi_des_kh=trim($vi_des_kh);
    $vi_des_kh=str_replace("'","''",$vi_des_kh);

    $vi_des_en=$_POST['txt_vi_des_en'];
    $vi_des_en=trim($vi_des_en);
    $vi_des_en=str_replace("'","''",$vi_des_en);

    $photo=$_POST['txt_photo'];
    $user=$_SESSION['userID'];
    $created_at=date('Y-m-d');
    $is_disable=$_POST['txt_is_disable'];
    
    $pk->save_company_profile(
                            $opt,
                            $id,
                            $od,
                            $con_title_kh,
                            $con_title_en,
                            $con_des_kh,
                            $con_des_en,
                            $mis_title_kh,
                            $mis_title_en,
                            $mis_des_kh,
                            $mis_des_en,
                            $vi_title_kh,
                            $vi_title_en,
                            $vi_des_kh,
                            $vi_des_en,
                            $photo,
                            $user,
                            $created_at,
                            $is_disable
                            );
?>