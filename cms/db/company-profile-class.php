<?php
	include('database.php');

	class Company extends Db{
		// Get Connection
		function __construct(){
			$this->connect();
		}

		// Get Company Profile listing page
		function get_company_profile($opt,$con,$limit){
		    $od="od DESC";
		    $post_data=$this->select_data($this->tbl[$opt],$con,$od,$limit);
		    if($post_data!=0){
			    foreach ($post_data as $row) {?>
			    	<tr>
				        <td class="text-center"><?php echo $row['id']; ?></td>
				        <td><?php echo $row['con_title_kh']; ?></td>
						<td><?php echo $row['con_title_en']; ?></td>
						<td><?php echo $row['mis_title_kh']; ?></td>
		                <td><?php echo $row['mis_title_en']; ?></td>
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
							<a href="#" class="btn-disable" title="Delete" style="color: white;font-size: 18px;"><i class="fas fa-trash-alt"></i></a>
				        </td>
			      </tr>
			<?php
			    }
			}
		}
	
		// Save Company Profile
		function save_company_profile(
					$opt,
					$id,
					$od,
					$con_title_kh,
					$con_title_en,
					$con_des_kh,
					$con_des_en,
					$mis_title_kh,
					$mis_title_en,
					$mis_des_kh,
					$mis_des_en,
					$vi_title_kh,
					$vi_title_en,
					$vi_des_kh,
					$vi_des_en,
					$photo,
					$user,
					$created_at,
					$is_disable
			){
			//  $name_link=$this->php_slug($name);//h-a-bc
			if($id==0){		
				$this->insert_data($this->tbl[$opt],
											"null,
											'".$od."',
											'".$con_title_kh."',
											'".$con_title_en."',
											'".$con_des_kh."',
											'".$con_des_en."',
											'".$mis_title_kh."',
											'".$mis_title_en."',
											'".$mis_des_kh."',
											'".$mis_des_en."',
											'".$vi_title_kh."',
											'".$vi_title_en."',
											'".$vi_des_kh."',
											'".$vi_des_en."',
											'".$photo."',
											'".$user."',
											'".$created_at."',
											'".$is_disable."'
											");
				$status['id']=$this->last_id;
				$status['con_title_kh'] = $con_title_kh;
				$status['con_title_en'] = $con_title_en;
				$status['mis_title_kh'] = $mis_title_kh;
				$status['mis_title_en'] = $mis_title_en;
			}else{
				$this->update_data($this->tbl[$opt],"
									od='".$od."',	
									con_title_kh='".$con_title_kh."',
									con_title_en='".$con_title_en."',
									con_des_kh='".$con_des_kh."',
									con_des_en='".$con_des_en."',
									mis_title_kh='".$mis_title_kh."',
									mis_title_en='".$mis_title_en."',
									mis_des_kh='".$mis_des_kh."',
									mis_des_en='".$mis_des_en."',
									vi_title_kh='".$vi_title_kh."',
									vi_title_en='".$vi_title_en."',
									vi_des_kh='".$vi_des_kh."',
									vi_des_en='".$vi_des_en."',
									image='".$photo."',
									uid='".$user."',
									created_at='".$created_at."',
									is_disable='".$is_disable."'
									","id='".$id."'");
				$status['id']='edit';
			}	
			$status['message'] = 'Successfully.';
			echo json_encode($status);
		}

		// Get Edit Company Profile
		function get_company_profile_edit($id,$opt){
			$sql="SELECT * FROM ".$this->tbl[$opt]." WHERE id=".$id."";
			$result=$this->cn->query($sql);
			$row=$result->fetch_array();

			$msg['id']=$row[0];
			$msg['od']=$row[1]; 
			$msg['con_title_kh']=$row[2];
			$msg['con_title_en']=$row[3];
			$msg['con_des_kh']=$row[4];
			$msg['con_des_en']=$row[5];
			$msg['mis_title_kh']=$row[6];
			$msg['mis_title_en']=$row[7];
			$msg['mis_des_kh']=$row[8];
			$msg['mis_des_en']=$row[9];
			$msg['vi_title_kh']=$row[10];
			$msg['vi_title_en']=$row[11];
			$msg['vi_des_kh']=$row[12];
			$msg['vi_des_en']=$row[13];
			$msg['image']=$row[14];
			$msg['is_disable']=$row[17];


			echo json_encode($msg);
		}
	}

?>
