<?php
    // $img_name = $_FILES['txt_file']['name'];
    // $tmp_name = $_FILES['txt_file']['tmp_name'];
    // $ext = pathinfo($img_name,PATHINFO_EXTENSION);
    // $t = time();

    // move_uploaded_file($tmp_name,'cv-upload/'.$t.'.'.$ext);
    // $msg['photoName']=$img_name;
    $msg['photoName']=$_FILES['txt_file']['name'];
    echo json_encode($msg);
?>
 