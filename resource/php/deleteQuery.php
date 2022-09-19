<?php 

function deleteRecords(){
    $conn = conn();
    $id = $_GET['id'];
    $sql = mysqli_query("DELETE FROM `users` WHERE id = " .$id. "");
    
    if($conn->query($sql)=== TRUE) {
        $message = "Credentials Deleted Successfully";
    } else {
        $message = "Credentials Deleted Successfully";
    }
    echo "<script>alert('$message');</script>";
    mysqli_close($conn);
}
?>