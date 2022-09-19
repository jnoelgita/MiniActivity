<?php 

function deleteRecords(){
    $id = $_GET['id'];
    $conn = conn();
    $sql = mysqli_query("DELETE FROM `users` WHERE id = " .$id. "");
    $data = $conn->query($sql);
}
?>