<?php
    session_start(); // used to get current user
    // date_default_timezone_set('Asia/Phnom_Penh');
    include('../../db/job-opportunity-class.php');
    $pk=new Job;	
    
    $opt=$_POST['opt'];
    $id=$_POST['id'];	
    $od=$_POST['od']; 

    $position_kh=$_POST['position_kh'];
    $position_kh=trim($position_kh);
    $position_kh=str_replace("'","''",$position_kh);

    $position_en=$_POST['position_en'];
    $position_en=trim($position_en);
    $position_en=str_replace("'","''",$position_en);

    $des_kh=$_POST['des_kh'];
    $des_kh=trim($des_kh);
    $des_kh=str_replace("'","''",$des_kh);
    
    $des_en=$_POST['des_en'];
    $des_en=trim($des_en);
    $des_en=str_replace("'","''",$des_en);

    $location_kh=$_POST['location_kh'];
    $location_kh=trim($location_kh);
    $location_kh=str_replace("'","''",$location_kh);

    $location_en=$_POST['location_en'];
    $location_en=trim($location_en);
    $location_en=str_replace("'","''",$location_en);

    $duties_and_respon_kh=$_POST['duties_and_respon_kh'];
    $duties_and_respon_kh=trim($duties_and_respon_kh);
    $duties_and_respon_kh=str_replace("'","''",$duties_and_respon_kh);
    
    $duties_and_respon_en=$_POST['duties_and_respon_en'];
    $duties_and_respon_en=trim($duties_and_respon_en);
    $duties_and_respon_en=str_replace("'","''",$duties_and_respon_en);

    $skill_and_specification_kh=$_POST['skill_and_specification_kh'];
    $skill_and_specification_kh=trim($skill_and_specification_kh);
    $skill_and_specification_kh=str_replace("'","''",$skill_and_specification_kh);
    
    $skill_and_specification_en=$_POST['skill_and_specification_en'];
    $skill_and_specification_en=trim($skill_and_specification_en);
    $skill_and_specification_en=str_replace("'","''",$skill_and_specification_en);

    $how_to_apply_kh=$_POST['how_to_apply_kh'];
    $how_to_apply_kh=trim($how_to_apply_kh);
    $how_to_apply_kh=str_replace("'","''",$how_to_apply_kh);
    
    $how_to_apply_en=$_POST['how_to_apply_en'];
    $how_to_apply_en=trim($how_to_apply_en);
    $how_to_apply_en=str_replace("'","''",$how_to_apply_en);

    $post_date=$_POST['post_date'];
    $close_date=$_POST['close_date'];
    $type_id=$_POST['type_id'];
    $user=$_SESSION['userID'];
    $created_at=date('Y-m-d');
    $is_disable=$_POST['is_disable'];
     
    $pk->save_job_opportunity(
                            $opt,
                            $id,
                            $od,
                            $position_kh,
                            $position_en,
                            $des_kh,
                            $des_en,
                            $location_kh,
                            $location_en,
                            $duties_and_respon_kh,
                            $duties_and_respon_en,
                            $skill_and_specification_kh,
                            $skill_and_specification_en,
                            $how_to_apply_kh,
                            $how_to_apply_en,
                            $post_date,
                            $close_date,
                            $type_id,
                            $user,
                            $created_at,
                            $is_disable
                            );
?>