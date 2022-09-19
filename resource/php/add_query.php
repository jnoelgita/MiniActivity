<?php
    require 'conn.php';
    $conn = conn();

    if (isset($_POST['submit'])) {
        $studentID = $_POST ['studentID'];
        $fname = $_POST ['firstname'];
        $mname = $_POST ['middlename'];
        $lname = $_POST ['lastname'];
        $profPic = $_POST ['profPic'];
        $pdfFile = $_POST ['pdfFile'];

        $sql = "INSERT INTO `accounts`(`studentID`, `firstName`, `middleName`, `lastName`, `profile_pic`, `pdf_file`) VALUES ('$studentID','$fname','$mname','$lname', '$profPic', '$pdfFile')";

        if (mysqli_query($conn, $sql)) {
           $message = "Credentials Registered Sucessfully";
           echo "<script>alert('$message') ;</script>";
            header("location: ../../index.php");
        } else {
            header("location: ../../index.php");
        }

        mysqli_close($conn);
        
        
    }
    header("location: ../../index.php");

?>  
