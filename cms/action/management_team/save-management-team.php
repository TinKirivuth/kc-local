<?php
    session_start(); // used to get current user
    // date_default_timezone_set('Asia/Phnom_Penh');
    include('../../db/management-team-class.php');
    $pk=new Management;	
    
    $opt=$_POST['opt'];
    $id=$_POST['id'];	
    $od=$_POST['txt_od'];

    $name_kh=$_POST['name_kh'];
    $name_kh=trim($name_kh);
    $name_kh=str_replace("'","''",$name_kh);

    $name_en=$_POST['name_en'];
    $name_en=trim($name_en);
    $name_en=str_replace("'","''",$name_en);

    $position_kh=$_POST['position_kh'];
    $position_kh=trim($position_kh);
    $position_kh=str_replace("'","''",$position_kh);
    
    $position_en=$_POST['position_en'];
    $position_en=trim($position_en);
    $position_en=str_replace("'","''",$position_en);

    $email=$_POST['email'];
    $phone1=$_POST['phone1'];
    $phone2=$_POST['phone2'];

    $other_kh=$_POST['other_kh'];
    $other_kh=trim($other_kh);
    $other_kh=str_replace("'","''",$other_kh);

    $other_en=$_POST['other_en'];
    $other_en=trim($other_en);
    $other_en=str_replace("'","''",$other_en);

    $photo=$_POST['photo'];
    $user=$_SESSION['userID'];
    $created_at=date('Y-m-d');
    $is_disable=$_POST['is_disable'];
    
    $pk->save_management_team(
                            $opt,
                            $id,
                            $od,
                            $name_kh,
                            $name_en,
                            $position_kh,
                            $position_en,
                            $email,
                            $phone1,
                            $phone2,
                            $other_kh,
                            $other_en,
                            $photo,
                            $user,
                            $created_at,
                            $is_disable
                            );
?>