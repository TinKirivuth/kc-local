<?php
	include('database.php');

	class Public_Hoday extends Db{
        // Get Connection
		function __construct(){
			$this->connect();
		}

        // Get Public Holiday Listing Page
		function get_public_holiday($opt,$con,$limit){
		    $od="od DESC";
		    $post_data=$this->select_data($this->tbl[$opt],$con,$od,$limit);
		    if($post_data!=0){
			    foreach ($post_data as $row) {
			?>
			    	<tr>
				        <td class="text-center"><?php echo $row['id']; ?></td>
				        <td><?php echo $row['date_en']; ?></td>
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
							<a href="#" class="btn-disable" title="Delete" style="color: white;font-size: 18px;"><i class="fas fa-trash-alt"></i></a>
				        </td>
			      </tr>       
			<?php
			    }
			}
        }
        
		// Save Public Holiday
		function save_public_holiday(
                                    $opt,
                                    $id,
                                    $od,
                                    $date_kh,
                                    $date_en,
                                    $title_kh,
                                    $title_en,
                                    $user,
                                    $created_at,
                                    $is_disable ){
				if($id==0){	
					$dpl=$this->dpl($this->tbl[$opt],"date_kh='".$date_kh."' OR date_en='".$date_en."' OR title_kh='".$title_kh."' OR title_en='".$title_en."'");
					if($dpl==1){
						$status['dpl']="1";	
					}else{
						$this->insert_data($this->tbl[$opt],
												"null,
												'".$od."',
												'".$date_kh."',
												'".$date_en."',
												'".$title_kh."',
												'".$title_en."',
												'".$user."',
												'".$created_at."',
												'".$is_disable."'
												");
						$status['id']=$this->last_id;
						$status['date_kh'] = $date_kh;
                        $status['date_en'] = $date_en;
                        $status['title_kh'] = $title_kh;
						$status['title_en'] = $title_en;
                        $status['created_at'] = $created_at;
                        $status['is_disable'] = $is_disable;
						$status['dpl']="0";
					}
					
				}else{
					$this->update_data($this->tbl[$opt],"
										od = '".$od."',
										date_kh = '".$date_kh."',
										date_en = '".$date_en."',
										title_kh = '".$title_kh."',
										title_en = '".$title_en."',
										uid = '".$user."',
										created_at = '".$created_at."',
										is_disable = '".$is_disable."'
										","id='".$id."'");
					$status['id']='edit';
                    $status['created_at'] = $created_at;
                    $status['is_disable'] = $is_disable;
				}	
				$status['message'] = 'Successfully.';
				echo json_encode($status);
		}
		 
		// Get Edit Public Holiday
		function get_public_holiday_edit($id,$opt){
			$sql="SELECT * FROM ".$this->tbl[$opt]." WHERE id=".$id."";
			$result=$this->cn->query($sql);
            $row=$result->fetch_array();
            
			$msg['id']=$row['id'];
			$msg['od']=$row['od']; 
			$msg['date_kh']=$row['date_kh'];
			$msg['date_en']=$row['date_en'];
			$msg['title_kh']=$row['title_kh'];
			$msg['title_en']=$row['title_en'];
			$msg['is_disable']=$row['is_disable'];
			
			echo json_encode($msg);
		} 
    }
?>