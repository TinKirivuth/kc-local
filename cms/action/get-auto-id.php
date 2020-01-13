<?php
    include('../db/database.php');
    $pk=new Db;
    $opt=$_POST['opt'];
    $msg['id']=$pk->get_auto_id($opt);
    echo json_encode($msg);
?>
