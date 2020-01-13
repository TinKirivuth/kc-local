<?php
    $img_name4 = $_FILES['txt_file4']['name'];
    $tmp_name4 = $_FILES['txt_file4']['tmp_name'];
    $ext4 = pathinfo($img_name4,PATHINFO_EXTENSION);
    $t4 = time();

    move_uploaded_file($tmp_name4,'../upl-img/'.$t4.'.'.$ext4);
    $msg['photoName4']=$t4.'.'.$ext4;

    echo json_encode($msg);
?>
 