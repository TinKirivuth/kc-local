<?php
	include('../db/news-class.php');
	$pk = new News;

	$con=$_POST['con'];
	$opt=$_POST['opt'];
	$s=$_POST['s'];
	$show_record=$_POST['show_record'];
	$limit="$s,$show_record";
?>
	<tr>
        <th style="width: 40px;">ID</th>
		<th>Title</th>
		<th style="width: 150px;">Is Disable</th>
        <th style="width: 150px;">Number of View</th>
		<th style="width: 150px;">Updated Date</th>
        <th style="width: 150px;">Action</th>
    </tr>
<?php
	$pk->get_news($opt,$con,$limit);
?>
 