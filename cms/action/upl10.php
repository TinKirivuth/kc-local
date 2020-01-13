<?php
    $img_name10 = $_FILES['txt_file10']['name'];
    $tmp_name10 = $_FILES['txt_file10']['tmp_name'];
    $ext10 = pathinfo($img_name10,PATHINFO_EXTENSION);
    $t10 = time();

    move_uploaded_file($tmp_name10,'../upl-img/'.$t10.'.'.$ext10);
    $msg['photoName10']=$t10.'.'.$ext10;

    echo json_encode($msg);
?>
 