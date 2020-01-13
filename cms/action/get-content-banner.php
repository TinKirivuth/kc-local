<?php
	include('../db/content-banner-class.php');
	$pk = new Content_Banner;

	$con=$_POST['con'];
	$opt=$_POST['opt'];
	$s=$_POST['s'];
	$show_record=$_POST['show_record'];
	$limit="$s,$show_record";
?>
	<tr>
        <th style="width: 40px;">ID</th>
		<th>Title KH</th>
		<th>Title EN</th>
		<th style="width:200px;">Post Date</th>
        <th style="width: 80px;">Action</th>
    </tr>
<?php
	$pk->get_content_banner($opt,$con,$limit);
?>
 