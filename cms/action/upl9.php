<?php
    $img_name9 = $_FILES['txt_file9']['name'];
    $tmp_name9 = $_FILES['txt_file9']['tmp_name'];
    $ext9 = pathinfo($img_name9,PATHINFO_EXTENSION);
    $t9 = time();

    move_uploaded_file($tmp_name9,'../upl-img/'.$t9.'.'.$ext9);
    $msg['photoName9']=$t9.'.'.$ext9;

    echo json_encode($msg);
?>
 