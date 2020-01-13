<?php
include('../../db/news-class.php');
$pk=new News;
$id=$_POST['id'];
$opt=$_POST['opt'];
$pk->get_news_edit($id,$opt);
?>