<?php
	include('../db/menu-item-class.php');
	$pk = new MenuItem;

	$con=$_POST['con'];
	$opt=$_POST['opt'];
	$s=$_POST['s'];
	$show_record=$_POST['show_record'];
	$limit="$s,$show_record";
?>
	<tr>
        <th style="width: 40px;">ID</th>
        <th>Title</th>
		<th style="width: 150px;">Icon</th>
		<th style="width: 300px;">Updated Date</th>
        <th style="width: 150px;">Action</th>
    </tr>
<?php
	$pk->get_menu_item($opt,$con,$limit);
?>
 