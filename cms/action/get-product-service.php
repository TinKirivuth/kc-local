<?php
	include('../db/product-service-class.php');
	$pk = new Product;

	$con=$_POST['con'];
	$opt=$_POST['opt'];
	$s=$_POST['s'];
	$show_record=$_POST['show_record'];
	$limit="$s,$show_record";
?>
	<tr>
        <th style="width: 40px;">ID</th>
        <th>Product Title</th>
		<th style="width: 150px;">Icon</th>
		<th style="width: 300px;">Updated Date</th>
		<th style="width: 80px;">Is Disable</th>
        <th style="width: 150px;">Action</th>
    </tr>
<?php
	$pk->get_product_service($opt,$con,$limit);
?>
 