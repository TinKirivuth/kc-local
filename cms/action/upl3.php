<?php
    $img_name3 = $_FILES['txt_file3']['name'];
    $tmp_name3 = $_FILES['txt_file3']['tmp_name'];
    $ext3 = pathinfo($img_name3,PATHINFO_EXTENSION);
    $t3 = time();

    move_uploaded_file($tmp_name3,'../upl-img/'.$t3.'.'.$ext3);
    $msg['photoName3']=$t3.'.'.$ext3;

    echo json_encode($msg);
?>
 