<?php
include('../../db/management-team-class.php');
$pk=new Management;
$id=$_POST['id'];
$opt=$_POST['opt'];
$pk->get_management_team_edit($id,$opt);
?>