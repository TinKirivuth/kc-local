<?php
include('../../db/company-profile-class.php');
$pk=new Company;
$id=$_POST['id'];
$opt=$_POST['opt'];
$pk->get_company_profile_edit($id,$opt);
?>