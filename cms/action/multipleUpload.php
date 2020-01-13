<?php 
	$img_name = $_FILES['files']['name'];
    $msg['imgName']=$img_name;
    echo json_encode($msg);
	// $result = ''; 
	// if(is_array($_FILES)) { 
	// 	foreach ($_FILES['files']['name'] as $name => $value) { 
	// 		$fileName=$_FILES['files']['name'][$name];
	// 		$my_extension = explode(".", $fileName); 
	// 		$extension_name = array("jpg", "jpeg", "png", "gif"); 
	// 		$file_extension = isset($my_extension[1]) ? $my_extension[1] : null;
	// 		if(in_array($file_extension, $extension_name)) { 
	// 			$NewImageName = md5(rand()) . '.' . $file_extension; 
	// 			$SourcePath = $_FILES['files']['tmp_name'][$name]; 
	// 			$TargetPath = "../images/".$NewImageName; 
	// 			if(move_uploaded_file($SourcePath, $TargetPath)) { 
	// 				$result .= '<div class="col-md-4"><img src="'.$TargetPath.'" class="img-responsive"></div>'; 
	// 			} 
	// 		} 
	// 	} 
	// 	echo $result; 
	// } 
	
	
?>