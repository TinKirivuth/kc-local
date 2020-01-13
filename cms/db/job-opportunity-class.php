<?php
	include('database.php');

	class Job extends Db{
        // Get Connection
		function __construct(){
			$this->connect();
		}

        // Get Product and Service Listing Page
		function get_job_opportunity($opt,$con,$limit){
		    $od="od DESC";
		    $post_data=$this->select_data($this->tbl[$opt],$con,$od,$limit);
		    if($post_data!=0){
			    foreach ($post_data as $row) {
			?>
			    	<tr>
				        <td class="text-center"><?php echo $row['id']; ?></td>
				        <td><?php echo $row['position_en']; ?></td>
						<td class="text-center"><?php echo $row['post_date'];?></td>
						<td class="text-center"><?php echo $row['close_date']; ?></td>
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
		function save_job_opportunity(
				$opt,
				$id,
				$od,
				$position_kh,
				$position_en,
				$des_kh,
				$des_en,
				$location_kh,
				$location_en,
				$duties_and_respon_kh,
				$duties_and_respon_en,
				$skill_and_specification_kh,
				$skill_and_specification_en,
				$how_to_apply_kh,
				$how_to_apply_en,
				$post_date,
				$close_date,
				$type_id,
				$user,
				$created_at,
				$is_disable
            ){
				$number_of_view = 0;
				$type=4; // Menu Type Career
				$name_link_kh = $this->php_slug($position_kh);
				$name_link_en = $this->php_slug($position_en);
			
				$sql="SELECT * FROM ".$this->tbl[14]." WHERE id=".$type."";
				$result=$this->cn->query($sql);
				$row=$result->fetch_array();
				$type_link_kh=$row['name_link_kh'];
				$type_link_en=$row['name_link_en'];

				if($id==0){	
					$dpl=$this->dpl($this->tbl[$opt],"position_kh='".$position_kh."' OR position_en='".$position_en."'");
					if($dpl==1){
						$status['dpl'] = 1;	
					}else{
						$this->insert_data($this->tbl[$opt],
												"null,
												'".$od."',
												'".$position_kh."',
												'".$position_en."',
												'".$des_kh."',
												'".$des_en."',
												'".$location_kh."',
												'".$location_en."',
												'".$duties_and_respon_kh."',
												'".$duties_and_respon_en."',
												'".$skill_and_specification_kh."',
												'".$skill_and_specification_en."',
												'".$how_to_apply_kh."',
												'".$how_to_apply_en."',
												'".$post_date."',
												'".$close_date."',
												'".$type_id."',
												'".$number_of_view."',
												'".$user."',
												'".$created_at."',
												'".$is_disable."',
												'".$name_link_kh."',
												'".$name_link_en."',
												'".$type_link_kh."',
												'".$type_link_en."'
												");
						$status['id']= $this->last_id;
						$status['opt'] = $opt;
						$status['od'] = $od;
						$status['position_en'] = $position_en;
						$status['position_en'] = $position_en;
						$status['location_kh'] = $location_kh;
						$status['location_en'] = $location_en;
						$status['duties_and_respon_kh'] = $duties_and_respon_kh;
						$status['duties_and_respon_en'] = $duties_and_respon_en;
						$status['skill_and_specification_kh'] = $skill_and_specification_kh;
						$status['skill_and_specification_en'] = $skill_and_specification_en;
						$status['how_to_apply_kh'] = $how_to_apply_kh;
						$status['how_to_apply_en'] = $how_to_apply_en;
						$status['post_date'] = $post_date;
						$status['close_date'] = $close_date;
						$status['type_id'] = $type_id;
						$status['user'] = $user;
						$status['created_at'] = $created_at;
						$status['is_disable'] = $is_disable;
						$status['number_of_view'] = $number_of_view;
						$status['name_link_kh'] = $name_link_kh;
						$status['name_link_en'] = $name_link_en;
						$status['type_link_kh'] = $type_link_kh;
						$status['type_link_en'] = $type_link_en;
					}	
				}else{
					$this->update_data($this->tbl[$opt],"
                                        od='".$od."',
                                        position_kh='".$position_kh."',
                                        position_en='".$position_en."',
                                        des_kh='".$des_kh."',
                                        des_en='".$des_en."',
                                        location_kh='".$location_kh."',
                                        location_en='".$location_en."',
                                        duties_and_respon_kh='".$duties_and_respon_kh."',
                                        duties_and_respon_en='".$duties_and_respon_en."',
                                        skill_and_specification_kh='".$skill_and_specification_kh."',
                                        skill_and_specification_en='".$skill_and_specification_en."',
                                        how_to_apply_kh='".$how_to_apply_kh."',
                                        how_to_apply_en='".$how_to_apply_en."',
                                        post_date='".$post_date."',
                                        close_date='".$close_date."',
                                        type_id='".$type_id."',
                                        uid='".$user."',
                                        created_at='".$created_at."',
                                        is_disable='".$is_disable."',
										name_link_kh='".$name_link_kh."',
										name_link_en='".$name_link_en."',
										type_link_kh='".$type_link_kh."',
										type_link_en='".$type_link_en."'
										","id='".$id."'");
					$status['id']='edit';
					$status['is_disable'] = $is_disable;
				}	
				$status['message'] = 'Successfully.';
				echo json_encode($status);
		}
		 
		// Get Edit Product and Service
		function get_job_opportunity_edit($id,$opt){
			$sql="SELECT * FROM ".$this->tbl[$opt]." WHERE id=".$id."";
			$result=$this->cn->query($sql);
			$row=$result->fetch_array();

			$msg['id']=$row['id'];
			$msg['od']=$row['od']; 
			$msg['position_kh']=$row['position_kh'];
			$msg['position_en']=$row['position_en'];
			$msg['des_kh']=$row['des_kh'];
			$msg['des_en']=$row['des_en'];
			$msg['location_kh']=$row['location_kh'];
			$msg['location_en']=$row['location_en'];
			$msg['duties_and_respon_kh']=$row['duties_and_respon_kh'];
			$msg['duties_and_respon_en']=$row['duties_and_respon_en'];
			$msg['skill_and_specification_kh']=$row['skill_and_specification_kh'];
			$msg['skill_and_specification_en']=$row['skill_and_specification_en'];
			$msg['how_to_apply_kh']=$row['how_to_apply_kh'];
			$msg['how_to_apply_en']=$row['how_to_apply_en'];
			$msg['post_date']=$row['post_date'];
			$msg['close_date']=$row['close_date'];
			$msg['type_id']=$row['type_id'];
			$msg['is_disable']=$row['is_disable'];
			$msg['name_link_kh']=$row['name_link_kh'];
			$msg['name_link_en']=$row['name_link_en'];
			$msg['type_link_kh']=$row['type_link_kh'];
			$msg['type_link_en']=$row['type_link_en'];
			echo json_encode($msg);
		}
    }
?>