<?php
	include('../db/job-opportunity-class.php');
	$pk = new Job;

	$con=$_POST['con'];
	$opt=$_POST['opt'];
	$s=$_POST['s'];
	$show_record=$_POST['show_record'];
	$limit="$s,$show_record";
?>
	<tr>
        <th style="width: 40px;">ID</th>
        <th>Position</th>
		<th style="width:200px;">Post Date</th>
		<th style="width:200px;">Close Date</th>
        <th style="width: 80px;">Is Disable</th>
		<th style="width: 80px;">Action</th>
    </tr>
<?php
	$pk->get_job_opportunity($opt,$con,$limit);
?>
 