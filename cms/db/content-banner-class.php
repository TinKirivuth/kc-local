<?php
	include('database.php');

	class Content_Banner extends Db{
		// Get Connection
		function __construct(){
			$this->connect();
		}

        // Get Content Banner
        function get_content_banner($opt,$con,$limit){
            $od="od DESC";
		    $post_data=$this->select_data($this->tbl[$opt],$con,$od,$limit);
		    if($post_data!=0){
			    foreach ($post_data as $row) {
			?>
			    	<tr>
				        <td class="text-center"><?php echo $row['id']; ?></td>
						<td><?php echo $row['title_kh']; ?></td>
						<td><?php echo $row['title_en']; ?></td>
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

        // Save Content Banner
		function save_content_banner(
				$opt,
				$id,
				$od,
				$mm_id,
				$type_id,
				$title_kh,
				$title_en,
				$des_kh,
				$des_en,
				$photo,
				$user,
				$created_at,
				$is_disable
			){
			$sql1="SELECT * FROM ".$this->tbl[14]." WHERE id=".$mm_id."";
			$result1=$this->cn->query($sql1);
			$row1=$result1->fetch_array();
			$mm_link_kh=$row1['name_link_kh'];
			$mm_link_en=$row1['name_link_en'];

			// $sql="SELECT * FROM ".$this->tbl[13]." WHERE id=".$type_id."";
			$sql="SELECT type.* FROM(SELECT mi.id,mi.title_kh,mi.title_en,mi.name_link_kh,mi.name_link_en FROM tbl_menu_item mi UNION SELECT ps.id,ps.name_kh,ps.name_en,ps.name_link_kh,ps.name_link_en FROM tbl_product_service ps UNION SELECT t.id,t.name_kh,t.name_en,t.name_link_kh,t.name_link_en FROM tbl_type t WHERE t.id=16 ORDER BY id) as type WHERE type.id=".$type_id."";
			$result=$this->cn->query($sql);
			$row=$result->fetch_array();
			$type_link_kh=$row['name_link_kh'];
			$type_link_en=$row['name_link_en'];

			if($id==0){	
				$dpl=$this->dpl($this->tbl[$opt],"title_kh='".$title_kh."' OR title_en='".$title_en."'");
				if($dpl==1){
					$status['dpl']="1";	
				}else{
					$this->insert_data($this->tbl[$opt],
											"null,
											'".$od."',
											'".$type_id."',
											'".$title_kh."',
											'".$title_en."',
											'".$des_kh."',
											'".$des_en."',
											'".$photo."',
											'".$user."',
											'".$created_at."',
											'".$is_disable."',
											'".$type_link_kh."',
											'".$type_link_en."',
											'".$mm_id."',
											'".$mm_link_kh."',
											'".$mm_link_en."'
											");
					$status['id']=$this->last_id;
					$status['title_kh'] = $title_kh;
					$status['title_en'] = $title_en;
					$status['created_at'] = $created_at;
					$status['dpl']="0";
				}
				
			}else{
				$this->update_data($this->tbl[$opt],"
									od = '".$od."',
									type_id = '".$type_id."',
									title_kh = '".$title_kh."',
									title_en = '".$title_en."',
									description_kh = '".$des_kh."',
									description_en = '".$des_en."',
									image = '".$photo."',
									uid = '".$user."',
									created_at = '".$created_at."',
									is_disable = '".$is_disable."',
									type_link_kh = '".$type_link_kh."',
									type_link_en = '".$type_link_en."',
									mm_id = '".$mm_id."',
									mm_link_kh = '".$mm_link_kh."',
									mm_link_en = '".$mm_link_en."'
									","id='".$id."'");
				$status['id']='edit';
				$status['title_kh'] = $title_kh;
				$status['title_en'] = $title_en;
				$status['created_at'] = $created_at;
			}	
			$status['message'] = 'Successfully.';
			echo json_encode($status);
		}

        // Get Edit Content Banner
		function get_content_banner_edit($id,$opt){
			$sql="SELECT * FROM ".$this->tbl[$opt]." WHERE id=".$id."";
			$result=$this->cn->query($sql);
			$row=$result->fetch_array();

			$msg['id']=$row['id'];
            $msg['od']=$row['od']; 
			$msg['mm_id']=$row['mm_id'];
			$msg['type_id']=$row['type_id'];
			$msg['title_kh']=$row['title_kh'];
			$msg['title_en']=$row['title_en'];
			$msg['des_kh']=$row['description_kh'];
			$msg['des_en']=$row['description_en'];
			$msg['image']=$row['image'];
			$msg['is_disable']=$row['is_disable'];
			echo json_encode($msg);
		}

    }
?>