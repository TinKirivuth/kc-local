<?php
    include('database.php');

	class DeleteData extends Db{
		// Get Connection
		function __construct(){
			$this->connect();
        } 
        
        // Delete Data
        function delete_data_1($opt,$id){
            $this->delete_data($this->tbl[$opt],"id='".$id."'");
            $msg['message'] = 'Data was deleted.';
            echo json_encode($msg);
        }

        // Disable Data
        function disable_data_1($opt,$id){
            $this->disable_data($this->tbl[$opt],
                                "is_disable=1",
                                "id='".$id."'");
            $msg['message'] = 'Data was disable.';
            echo json_encode($msg);
        }
    }

?>