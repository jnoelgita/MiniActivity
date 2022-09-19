<?php 

public function deleteRecords(){
  
    $db = $conn;
    $tableName="accounts";

    if(isset($_GET['id'])) {
        $id = validate($_GET['id']);
        $condition =['id'=>$id];
        $deleteMsg=delete_data($db, $tableName, $condition);
        header("location:../../admin.php");
    }
    
    function delete_data($db,$tableName, $condition) {
        $dataCondition = '';
        $i=0;
        foreach($condition as $index => $data){
            $and = ($i > 0)?' AND ':'';
            $conditionData .= $and.$index." ="."'".$data."'";
            $i++;
        }
        $query = "DELETE FROM ".$tableName." WHERE".$dataCondition;
        $result = $db->query($query);
        if($result) {
            $msg="Account Deleted";
            header("location:../../admin.php");
        }
        else {
            $msg = $conn->error;
        }
        return $msg;
        
    }
    
    function validate ($value) {
        $value = trim($value);
        $value = stripslashes($value);
        $value = htmlspecialchars($value);
        return $value;
    }
}
?>