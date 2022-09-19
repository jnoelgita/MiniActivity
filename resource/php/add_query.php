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
            header("location: ../../index.php?error=Registered Successfully");
        } else {
            header("location: ../../index.php?error=Registration Unsuccessful");
        }

        mysqli_close($conn);
        
        
    }
    header("location: ../../index.php");

?>  
