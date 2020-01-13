<?php
    $img_name7 = $_FILES['txt_file7']['name'];
    $tmp_name7 = $_FILES['txt_file7']['tmp_name'];
    $ext7 = pathinfo($img_name7,PATHINFO_EXTENSION);
    $t7 = time();

    move_uploaded_file($tmp_name7,'../upl-img/'.$t7.'.'.$ext7);
    $msg['photoName7']=$t7.'.'.$ext7;

    echo json_encode($msg);
?>
 