<?php
include('../../db/job-opportunity-class.php');
$pk=new Job;
$id=$_POST['id'];
$opt=$_POST['opt'];
$pk->get_job_opportunity_edit($id,$opt);
?>