<?php
    $img_name1 = $_FILES['txt_file1']['name'];
    $tmp_name1 = $_FILES['txt_file1']['tmp_name'];
    $ext1 = pathinfo($img_name1,PATHINFO_EXTENSION);
    $t1 = time();

    move_uploaded_file($tmp_name1,'../upl-img/'.$t1.'.'.$ext1);
    $msg['photoName1']=$t1.'.'.$ext1;

    echo json_encode($msg);
?>
 