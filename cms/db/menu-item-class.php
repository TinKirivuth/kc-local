<?php
	include('database.php');

	class MenuItem extends Db{
		// Get Connection
		function __construct(){
			$this->connect();
		}

        // Get Menu Item
        function get_menu_item($opt,$con,$limit){
            $od="od ASC";
		    $post_data=$this->select_data($this->tbl[$opt],$con,$od,$limit);
		    if($post_data!=0){
			    foreach ($post_data as $row) {
			?>
			    	<tr>
				        <td class="text-center"><?php echo $row['id']; ?></td>
				        <td><?php echo $row['title_en']; ?></td>
						<td class="text-center">
							<img src="upl-img/<?php echo $row['icon']; ?>" width="50" height="50">
							<input type="hidden" value="<?php echo $row['icon']; ?>">
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

        // Save Menu Item
		function save_menu_item(
			$opt,
			$id,
			$type,
			$od,
			$title_kh,
			$title_en,
			$photo1,
			$photo,
			$user,
			$created_at,
			$is_disable
			){
				$sql="SELECT * FROM ".$this->tbl[14]." WHERE id=".$type."";
				$result=$this->cn->query($sql);
				$row=$result->fetch_array();
				$name_link_kh=$this->php_slug($title_kh);
				$name_link_en=$this->php_slug($title_en);
				$type_link_kh=$row['name_link_kh'];
				$type_link_en=$row['name_link_en'];
				if($id==0){	
					$dpl=$this->dpl($this->tbl[$opt],"title_kh='".$title_kh."' OR title_en='".$title_en."'");
					if($dpl==1){
						$status['dpl']="1";	
					}else{
						$this->insert_data($this->tbl[$opt],
												"null,
												'".$type."',
                                                '".$od."',
                                                '".$title_kh."',
												'".$title_en."',
												'".$photo1."',
												'".$photo."',
												'".$user."',
												'".$created_at."',
												'".$is_disable."',
												'".$name_link_kh."',
												'".$name_link_en."',
												'".$type_link_kh."',
												'".$type_link_en."'
												");
						$status['id']=$this->last_id;
                        $status['title_en'] = $title_en;
                        $status['icon'] = $photo1;
						$status['created_at'] = $created_at;
						$status['dpl']="0";
					}
					
				}else{
					$this->update_data($this->tbl[$opt],"
										od = '".$od."',
										type = '".$type."',
										title_kh = '".$title_kh."',
                                        title_en = '".$title_en."',
                                        icon = '".$photo1."',
										image = '".$photo."',
										uid = '".$user."',
										created_at = '".$created_at."',
										is_disable = '".$is_disable."',
										name_link_kh = '".$name_link_kh."',
										name_link_en = '".$name_link_en."',
										type_link_kh = '".$type_link_kh."',
										type_link_en = '".$type_link_en."'
										","id='".$id."'");
                    $status['id']='edit';
					$status['title_en'] = $title_en;
					$status['icon'] = $photo1;
					$status['created_at'] = $created_at;
				}	
				$status['message'] = 'Successfully.';
				echo json_encode($status);
		}

        // Get Edit Product and Service
		function get_menu_item_edit($id,$opt){
			$sql="SELECT * FROM ".$this->tbl[$opt]." WHERE id=".$id."";
			$result=$this->cn->query($sql);
			$row=$result->fetch_array();

			$msg['id']=$row['id'];
			$msg['od']=$row['od']; 
			$msg['type']=$row['type']; 
            $msg['title_kh']=$row['title_kh'];
			$msg['title_en']=$row["title_en"];
			$msg['icon']=$row['icon'];
			$msg['image']=$row['image'];
			$msg['is_disable']=$row['is_disable'];
			echo json_encode($msg);
		}
    }
?>