<?php
	include('../db/management-team-class.php');
	$pk = new Management;

	$con=$_POST['con'];
	$opt=$_POST['opt'];
	$s=$_POST['s'];
	$show_record=$_POST['show_record'];
	$limit="$s,$show_record";
?>
	<tr>
        <th style="width: 40px;">ID</th>
        <th>Name KH</th>
		<th>Name EN</th>
		<th>Position KH</th>
		<th>Position EN</th>
        <th style="width: 80px;">Is Disable</th>
        <th style="width: 80px;">Action</th>
    </tr>
<?php
	$pk->get_management_team($opt,$con,$limit);
?>
 