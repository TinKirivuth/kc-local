<?php
    $img_name5 = $_FILES['txt_file5']['name'];
    $tmp_name5 = $_FILES['txt_file5']['tmp_name'];
    $ext5 = pathinfo($img_name5,PATHINFO_EXTENSION);
    $t5 = time();

    move_uploaded_file($tmp_name5,'../upl-img/'.$t5.'.'.$ext5);
    $msg['photoName5']=$t5.'.'.$ext5;

    echo json_encode($msg);
?>
 