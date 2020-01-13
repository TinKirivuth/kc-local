<?php
	include('database.php');

	class Photo_Gallery extends Db{
        // Get Connection
		function __construct(){
			$this->connect();
		}
 
        // Get Photo Gallery Listing Page
		function get_photo_gallery($opt,$con,$limit){
		    $od="od DESC";
		    $post_data=$this->select_data($this->tbl[$opt],$con,$od,$limit);
		    if($post_data!=0){
			    foreach ($post_data as $row) {
			?>
			    	<tr>
				        <td class="text-center"><?php echo $row['id']; ?></td>
						<td><?php echo $row['title_en']; ?></td>
                        <td class="text-center">
                        <?php 
                            if ($row['is_disable']==0){
                                echo "No";
                            }else{
                                echo "Yes";
                            }
                        ?> 
                        </td>
						<td class="text-center"><?php echo $row['created_at']; ?></td>
				        <td class="text-center">
							<a href="#" class="btn-edit" title="View" style="color: white;font-size: 20px;"><i class="fas fa-eye"></i></a> &nbsp;&nbsp;
							<a href="#" class="btn-disable" title="Disable" style="color: white;font-size: 18px;"><i class="fas fa-trash-alt"></i></a>
				        </td>
			      </tr>       
			<?php
			    }
			}
        }
        
		// Save Photo Gallery
		function save_photo_gallery(
					$opt,
					$id,
					$od,
					$title_kh,
					$title_en,
					$des_kh,
					$des_en,
					$photo,
					$photo1,
					$photo2,
					$photo3,
					$photo4,
					$photo5,
					$photo6,
					$photo7,
					$photo8,
					$photo9,
					$photo10,
					$user,
					$created_at,
					$is_disable
					){
				$name_link_kh=$this->php_slug($title_kh);
				$name_link_en=$this->php_slug($title_en);
				if($id==0){	
					$dpl=$this->dpl($this->tbl[$opt],"des_kh='".$des_kh."' OR des_en='".$des_en."' OR title_kh='".$title_kh."' OR title_en='".$title_en."'");
					if($dpl==1){
						$status['dpl']="1";	
					}else{
						$this->insert_data($this->tbl[$opt],
												"null,
												'".$od."',
												'".$title_kh."',
                                                '".$title_en."',
                                                '".$des_kh."',
                                                '".$des_en."',
                                                '".$photo."',
												'".$photo1."',
												'".$photo2."',
												'".$photo3."',
												'".$photo4."',
												'".$photo5."',
												'".$photo6."',
												'".$photo7."',
												'".$photo8."',
												'".$photo9."',
												'".$photo10."',
												'".$user."',
												'".$created_at."',
                                                '".$is_disable."',
                                                '".$name_link_kh."',
                                                '".$name_link_en."'
												");
						$status['id']=$this->last_id;
                        $status['title_kh'] = $title_kh;
                        $status['title_en'] = $title_en;
                        $status['des_kh'] = $des_kh;
                        $status['des_en'] = $des_en;
                        $status['created_at'] = $created_at;
                        $status['is_disable'] = $is_disable;
						$status['dpl']="0";
					}
					
				}else{
					$this->update_data($this->tbl[$opt],"
										od = '".$od."',
										title_kh = '".$title_kh."',
                                        title_en = '".$title_en."',
                                        des_kh = '".$des_kh."',
                                        des_en = '".$des_en."',
										image = '".$photo."',
										image1 = '".$photo1."',
										image2 = '".$photo2."',
										image3 = '".$photo3."',
										image4 = '".$photo4."',
										image5 = '".$photo5."',
										image6 = '".$photo6."',
										image7 = '".$photo7."',
										image8 = '".$photo8."',
										image9 = '".$photo9."',
										image10 = '".$photo10."',
										uid = '".$user."',
										created_at = '".$created_at."',
                                        is_disable = '".$is_disable."',
                                        name_link_kh = '".$name_link_kh."',
                                        name_link_en = '".$name_link_en."'
										","id='".$id."'");
					$status['id']='edit';
					$status['title_kh'] = $title_kh;
					$status['title_en'] = $title_en;
                    $status['created_at'] = $created_at;
                    $status['is_disable'] = $is_disable;
				}	
				$status['message'] = 'Successfully.';
				echo json_encode($status);
		}
		 
		// Get Edit Photo Gallery
		function get_photo_gallery_edit($id,$opt){
			$sql="SELECT * FROM ".$this->tbl[$opt]." WHERE id=".$id."";
			$result=$this->cn->query($sql);
            $row=$result->fetch_array();
            
			$msg['id']=$row['id'];
			$msg['od']=$row['od']; 
			$msg['title_kh']=$row['title_kh'];
            $msg['title_en']=$row['title_en'];
            $msg['des_kh']=$row['des_kh'];
            $msg['des_en']=$row['des_en'];
			$msg['image']=$row['image'];
			$msg['image1']=$row['image1'];
			$msg['image2']=$row['image2'];
			$msg['image3']=$row['image3'];
			$msg['image4']=$row['image4'];
			$msg['image5']=$row['image5'];
			$msg['image6']=$row['image6'];
			$msg['image7']=$row['image7'];
			$msg['image8']=$row['image8'];
			$msg['image9']=$row['image9'];
			$msg['image10']=$row['image10'];
			$msg['is_disable']=$row['is_disable'];
			
			echo json_encode($msg);
		} 
    }
?>