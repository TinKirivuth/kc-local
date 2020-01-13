<?php
	include('database.php');

	class Management extends Db{
		// Get Connection
		function __construct(){
			$this->connect();
		}

		// Get Management Team listing page
		function get_management_team($opt,$con,$limit){
		    $od="od DESC";
		    $post_data=$this->select_data($this->tbl[$opt],$con,$od,$limit);
		    if($post_data!=0){
			    foreach ($post_data as $row) {
			?>
			    	<tr>
				        <td class="text-center"><?php echo $row['id']; ?></td>
				        <td><?php echo $row['name_kh']; ?></td>
						<td><?php echo $row['name_en']; ?></td>
						<td><?php echo $row['position_kh']; ?></td>
		                <td><?php echo $row['position_en']; ?></td>
		                <td class="text-center">
		                	<?php 
		                	if($row['is_disable']==0){
		                		echo "No";
		                	}else{
		                		echo "Yes";
		                	}
		                	?>	
		                </td>
				        <td class="text-center">
							<a href="#" class="btn-edit" title="View" style="color: white;font-size: 20px;"><i class="fas fa-eye"></i></a> &nbsp;&nbsp;
							<a href="#" class="btn-delete" title="Delete" style="color: white;font-size: 18px;"><i class="fas fa-trash-alt"></i></a>
				        </td>
			      </tr>       
			<?php
			    }
			}
		}
	
		// Save Management Team
		function save_management_team(
						$opt,
						$id,
						$od,
						$name_kh,
						$name_en,
						$position_kh,
						$position_en,
						$email,
						$phone1,
						$phone2,
						$other_kh,
						$other_en,
						$photo,
						$user,
						$created_at,
						$is_disable
			){
			$name_link_kh=$this->php_slug($name_kh);
			$name_link_en=$this->php_slug($name_en);
			if($id==0){		
				$this->insert_data($this->tbl[$opt],
											"null,
											'".$od."',
											'".$name_kh."',
											'".$name_en."',
											'".$position_kh."',
											'".$position_en."',
											'".$email."',
											'".$phone1."',
											'".$phone2."',
											'".$other_kh."',
											'".$other_en."',
											'".$photo."',
											'".$user."',
											'".$created_at."',
											'".$is_disable."',
											'".$name_link_kh."',
											'".$name_link_en."'
											");
				$status['id']=$this->last_id;
				$status['name_kh'] = $name_kh;
				$status['name_en'] = $name_en;
				$status['position_kh'] = $position_kh;
				$status['position_en'] = $position_en;
			}else{
				$this->update_data($this->tbl[$opt],"
									od='".$od."',	
									name_kh='".$name_kh."',
									name_en='".$name_en."',
									position_kh='".$position_kh."',
									position_en='".$position_en."',
									email='".$email."',
									phone1='".$phone1."',
									phone2='".$phone2."',
									other_kh='".$other_kh."',
									other_en='".$other_en."',
									image='".$photo."',
									uid='".$user."',
									created_at='".$created_at."',
									is_disable='".$is_disable."',
									name_link_kh='".$name_link_kh."',
									name_link_en='".$name_link_en."'
									","id='".$id."'");
				$status['id']='edit';
			}	
			$status['message'] = 'Successfully.';
			echo json_encode($status);
		}

		// Get Edit Company Profile
		function get_management_team_edit($id,$opt){
			$sql="SELECT * FROM ".$this->tbl[$opt]." WHERE id=".$id."";
			$result=$this->cn->query($sql);
			$row=$result->fetch_array();

			$msg['id']=$row['id'];
			$msg['od']=$row['od']; 
			$msg['name_kh']=$row['name_kh'];
			$msg['name_en']=$row['name_en'];
			$msg['position_kh']=$row['position_kh'];
			$msg['position_en']=$row['position_en'];
			$msg['email']=$row['email'];
			$msg['phone1']=$row['phone1'];
			$msg['phone2']=$row['phone2'];
			$msg['other_kh']=$row['other_kh'];
			$msg['other_en']=$row['other_en'];
			$msg['image']=$row['image'];
			$msg['is_disable']=$row['is_disable'];
			echo json_encode($msg);
		}
	}

?>
