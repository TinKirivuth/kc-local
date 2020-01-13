<?php
    $img_name8 = $_FILES['txt_file8']['name'];
    $tmp_name8 = $_FILES['txt_file8']['tmp_name'];
    $ext8 = pathinfo($img_name8,PATHINFO_EXTENSION);
    $t8 = time();

    move_uploaded_file($tmp_name8,'../upl-img/'.$t8.'.'.$ext8);
    $msg['photoName8']=$t8.'.'.$ext8;

    echo json_encode($msg);
?>
 