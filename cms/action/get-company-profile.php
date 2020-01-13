<?php
	include('../db/company-profile-class.php');
	$pk = new Company;

	$con=$_POST['con'];
	$opt=$_POST['opt'];
	$s=$_POST['s'];
	$show_record=$_POST['show_record'];
	$limit="$s,$show_record";
?>
	<tr>
        <th style="width: 40px;">ID</th>
        <th>Content Title KH</th>
		<th>Content Title EN</th>
		<th>Mission Title KH</th>
		<th>Mission Title EN</th>
        <!-- <th>Vision</th> -->
        <th style="width: 80px;">Is Disable</th>
        <th style="width: 80px;">Action</th>
    </tr>
<?php
	$pk->get_company_profile($opt,$con,$limit);
?>
 