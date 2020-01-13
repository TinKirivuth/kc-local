<?php
	include('database.php');

	class Product extends Db{
        // Get Connection
		function __construct(){
			$this->connect();
		}

        // Get Product and Service Listing Page
		function get_product_service($opt,$con,$limit){
		    $od="od DESC";
		    $post_data=$this->select_data($this->tbl[$opt],$con,$od,$limit);
		    if($post_data!=0){
			    foreach ($post_data as $row) {
			?> 
			    	<tr>
				        <td class="text-center"><?php echo $row['id']; ?></td>
				        <td><?php echo $row['name_en']; ?></td>
						<td class="text-center">
							<img src="upl-img/<?php echo $row['icon']; ?>" width="50" height="50">
							<input type="hidden" value="<?php echo $row['icon']; ?>">
						</td>
						<td class="text-center"><?php echo $row['created_at']; ?></td>
						<td class="text-center">
                        <?php 
                            if ($row['is_disable']==0){
                                echo "No";
                            }else{
                                echo "Yes";
                            }
                        ?> 
                        </td>
				        <td class="text-center">
							<a href="#" class="btn-edit" title="View" style="color: white;font-size: 20px;"><i class="fas fa-eye"></i></a> &nbsp;&nbsp;
							<a href="#" class="btn-disable" title="Disable" style="color: white;font-size: 18px;"><i class="fas fa-trash-alt"></i></a>
				        </td>
			      </tr>       
			<?php
			    }
			}
        }
        
		// Save Product and Service
		function save_product_service(
			$opt,
			$id,
			$od,
			$photo1,
			$name_kh,
			$name_en,
			$des_kh,
			$des_en,
			$content_kh,
			$content_en,
			$term_kh,
			$term_en,
			$doc_require_kh,
			$doc_require_en,
			$is_slide,
			$slide_text_kh,
			$slide_text_en,
			$photo,
			$user,
			$created_at,
			$is_disable,
			$min_khr,
			$max_khr,
			$min_usd,
			$max_usd,
			$min_month,
			$max_month,
			$min_rate,
			$max_rate,
			$rate_step
			){
				$bg_color="rgba(0,0,0,0.5)";
				$type=2; // Product and Service Menu
				$sql="SELECT * FROM ".$this->tbl[14]." WHERE id=".$type."";
				$result=$this->cn->query($sql);
				$row=$result->fetch_array();

				$name_link_kh=$this->php_slug($name_kh);//h-a-bc
				$name_link_en=$this->php_slug($name_en);//h-a-bc
				$type_link_kh=$row['name_link_kh'];//h-a-bc
				$type_link_en=$row['name_link_en'];//h-a-bc
				if($id==0){	
					$dpl=$this->dpl($this->tbl[$opt],"name_kh='".$name_kh."' OR name_en='".$name_en."'");
					if($dpl==1){
						$status['dpl']="1";	
					}else{
						$this->insert_data($this->tbl[$opt],
												"null,
												'".$type."',
												'".$od."',
												'".$photo1."',
												'".$name_kh."',
												'".$name_en."',
												'".$des_kh."',
												'".$des_en."',
												'".$content_kh."',
												'".$content_en."',
												'".$term_kh."',
												'".$term_en."',
												'".$doc_require_kh."',
												'".$doc_require_en."',
												'".$is_slide."',
												'".$slide_text_kh."',
												'".$slide_text_en."',
												'".$photo."',
												'".$user."',
												'".$created_at."',
												'".$is_disable."',
												'".$name_link_kh."',
												'".$name_link_en."',
												'".$type_link_kh."',
												'".$type_link_en."',
												'".$bg_color."',
												'".$min_khr."',
												'".$max_khr."',
												'".$min_usd."',
												'".$max_usd."',
												'".$min_month."',
												'".$max_month."',
												'".$min_rate."',
												'".$max_rate."',
												'".$rate_step."'
												");
						$status['id']=$this->last_id;
						$status['icon'] = $photo1;
						$status['name_en'] = $name_en;
						$status['created_at'] = $created_at;
						$status['is_disable'] = $is_disable;
						$status['dpl']="0";
					}
					
				}else{
					$this->update_data($this->tbl[$opt],"
										type = '".$type."',
										od = '".$od."',
										icon = '".$photo1."',
										name_kh = '".$name_kh."',
										name_en = '".$name_en."',
										des_kh = '".$des_kh."',
										des_en = '".$des_en."',
										content_kh = '".$content_kh."',
										content_en = '".$content_en."',
										term_con_kh = '".$term_kh."',
										term_con_en = '".$term_en."',
										doc_require_kh = '".$doc_require_kh."',
										doc_require_en = '".$doc_require_en."',
										is_slide = '".$is_slide."',
										slide_text_kh = '".$slide_text_kh."',
										slide_text_en = '".$slide_text_en."',
										slide_image = '".$photo."',
										uid = '".$user."',
										created_at = '".$created_at."',
										is_disable = '".$is_disable."',
										name_link_kh = '".$name_link_kh."',
										name_link_en = '".$name_link_en."',
										type_link_kh = '".$type_link_kh."',
										type_link_en = '".$type_link_en."',
										min_khr = '".$min_khr."',
										max_khr = '".$max_khr."',
										min_usd = '".$min_usd."',
										max_usd = '".$max_usd."',
										min_month = '".$min_month."',
										max_month = '".$max_month."',
										min_rate = '".$min_rate."',
										max_rate = '".$max_rate."',
										rate_step = '".$rate_step."'
										","id='".$id."'");
					$status['id']='edit';
					$status['created_at'] = $created_at;
					$status['is_disable'] = $is_disable;
				}	
				$status['message'] = 'Successfully.';
				echo json_encode($status);
		}
		 
		// Get Edit Product and Service
		function get_product_service_edit($id,$opt){
			$sql="SELECT * FROM ".$this->tbl[$opt]." WHERE id=".$id."";
			$result=$this->cn->query($sql);
			$row=$result->fetch_array();

			$msg['id']=$row['id'];
			$msg['type']=$row['type'];
			$msg['od']=$row['od']; 
			$msg['icon']=$row['icon'];
			$msg['name_kh']=$row['name_kh'];
			$msg['name_en']=$row['name_en'];
			$msg['des_kh']=$row['des_kh'];
			$msg['des_en']=$row['des_en'];
			$msg['content_kh']=$row['content_kh'];
			$msg['content_en']=$row['content_en'];
			$msg['term_con_kh']=$row['term_con_kh'];
			$msg['term_con_en']=$row['term_con_en'];
			$msg['doc_require_kh']=$row['doc_require_kh'];
			$msg['doc_require_en']=$row['doc_require_en'];
			$msg['is_slide']=$row['is_slide'];
			$msg['slide_text_kh']=$row['slide_text_kh'];
			$msg['slide_text_en']=$row['slide_text_en'];
			$msg['slide_image']=$row['slide_image'];
			$msg['is_disable']=$row['is_disable'];
			$msg['name_link_kh']=$row['name_link_kh'];
			$msg['name_link_en']=$row['name_link_en'];
			$msg['type_link_kh']=$row['type_link_kh'];
			$msg['type_link_en']=$row['type_link_en'];
			$msg['bg_color']=$row['bg_color'];

			
			$msg['min_khr']=$row['min_khr'];
			$msg['max_khr']=$row['max_khr'];
			$msg['min_usd']=$row['min_usd'];
			$msg['max_usd']=$row['max_usd'];
			$msg['min_month']=$row['min_month'];
			$msg['max_month']=$row['max_month'];
			$msg['min_rate']=$row['min_rate'];
			$msg['max_rate']=$row['max_rate'];
			$msg['rate_step']=$row['rate_step'];
			echo json_encode($msg);
		} 
    }
?>