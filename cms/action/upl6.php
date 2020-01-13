<?php
    $img_name6 = $_FILES['txt_file6']['name'];
    $tmp_name6 = $_FILES['txt_file6']['tmp_name'];
    $ext6 = pathinfo($img_name6,PATHINFO_EXTENSION);
    $t6 = time();

    move_uploaded_file($tmp_name6,'../upl-img/'.$t6.'.'.$ext6);
    $msg['photoName6']=$t6.'.'.$ext6;

    echo json_encode($msg);
?>
 