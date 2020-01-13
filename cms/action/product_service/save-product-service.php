<?php
    session_start(); // used to get current user
    // date_default_timezone_set('Asia/Phnom_Penh');
    include('../../db/product-service-class.php');
    $pk=new Product;	
    
    $opt=$_POST['opt'];
    $id=$_POST['id'];	
    $od=$_POST['od'];
    $photo1=$_POST['photo1'];

    $name_kh=$_POST['name_kh'];
    $name_kh=trim($name_kh);
    $name_kh=str_replace("'","''",$name_kh);

    $name_en=$_POST['name_en'];
    $name_en=trim($name_en);
    $name_en=str_replace("'","''",$name_en);

    $des_kh=$_POST['des_kh'];
    $des_kh=trim($des_kh);
    $des_kh=str_replace("'","''",$des_kh);
    
    $des_en=$_POST['des_en'];
    $des_en=trim($des_en);
    $des_en=str_replace("'","''",$des_en);

    $content_kh=$_POST['content_kh'];
    $content_kh=trim($content_kh);
    $content_kh=str_replace("'","''",$content_kh);

    $content_en=$_POST['content_en'];
    $content_en=trim($content_en);
    $content_en=str_replace("'","''",$content_en);

    $term_kh=$_POST['term_kh'];
    $term_kh=trim($term_kh);
    $term_kh=str_replace("'","''",$term_kh);
    
    $term_en=$_POST['term_en'];
    $term_en=trim($term_en);
    $term_en=str_replace("'","''",$term_en);

    $doc_require_kh=$_POST['doc_require_kh'];
    $doc_require_kh=trim($doc_require_kh);
    $doc_require_kh=str_replace("'","''",$doc_require_kh);
    
    $doc_require_en=$_POST['doc_require_en'];
    $doc_require_en=trim($doc_require_en);
    $doc_require_en=str_replace("'","''",$doc_require_en);

    $is_slide=$_POST['is_slide'];
    
    $slide_text_kh=$_POST['slide_text_kh'];
    $slide_text_kh=trim($slide_text_kh);
    $slide_text_kh=str_replace("'","''",$slide_text_kh);

    $slide_text_en=$_POST['slide_text_en'];
    $slide_text_en=trim($slide_text_en);
    $slide_text_en=str_replace("'","''",$slide_text_en);

    $photo=$_POST['photo'];
    $user=$_SESSION['userID'];
    $created_at=date('Y-m-d');
    $is_disable=$_POST['is_disable'];


    $min_khr=$_POST['min_khr'];
    $max_khr=$_POST['max_khr'];
    $min_usd=$_POST['min_usd'];
    $max_usd=$_POST['max_usd'];
    $min_month=$_POST['min_month'];
    $max_month=$_POST['max_month'];
    $min_rate=$_POST['min_rate'];
    $max_rate=$_POST['max_rate'];
    $rate_step=$_POST['rate_step'];
     
    $pk->save_product_service(
                            $opt,
                            $id,
                            $od,
                            $photo1,
                            $name_kh,
                            $name_en,
                            $des_kh,
                            $des_en,
                            $content_kh,
                            $content_en,
                            $term_kh,
                            $term_en,
                            $doc_require_kh,
                            $doc_require_en,
                            $is_slide,
                            $slide_text_kh,
                            $slide_text_en,
                            $photo,
                            $user,
                            $created_at,
                            $is_disable,
                            $min_khr,
                            $max_khr,
                            $min_usd,
                            $max_usd,
                            $min_month,
                            $max_month,
                            $min_rate,
                            $max_rate,
                            $rate_step
                            );
?>