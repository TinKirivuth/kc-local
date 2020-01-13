<?php
	session_start();
	include('database.php');

	class User extends Db{
		// Get Connection
		function __construct(){
			$this->connect();
		}

		// Login
	  function login($uname,$upass){
	    $sql="SELECT * FROM tbl_user WHERE name='".$uname."' AND password='".$upass."' AND is_disable=0";
	    $result=$this->cn->query($sql);
	    $num=$result->num_rows;
	    if($num>0){
				$row=$result->fetch_array();
	      $msg['login']='1';
				$_SESSION['userID']=$row[0];
				$_SESSION['userName']=$row[1];
				$_SESSION['userPhoto']=$row[3];
				$_SESSION['userRole']=$row[4];
				$_SESSION['userIsActive']=$row[5];
				$_SESSION['userIsDisable']=$row[6];
	    }else{
	      $msg['login']='0';
	    }
	    echo json_encode($msg);
	  }

	}

?>
