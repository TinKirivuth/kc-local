<?php
    $img_name2 = $_FILES['txt_file2']['name'];
    $tmp_name2 = $_FILES['txt_file2']['tmp_name'];
    $ext2 = pathinfo($img_name2,PATHINFO_EXTENSION);
    $t2 = time();

    move_uploaded_file($tmp_name2,'../upl-img/'.$t2.'.'.$ext2);
    $msg['photoName2']=$t2.'.'.$ext2;

    echo json_encode($msg);
?>
 