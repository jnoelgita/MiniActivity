<?php    

function registerStudent($studentID, $fname, $mname, $lname, $profPic, $pdfFile){
  if($_SERVER['REQUEST_METHOD']=='POST') {
    $conn = conn();
  
    $studentID = $_POST['studentID'];
    $fname = $_POST ['firstname'];
    $mname = $_POST['middlename'];
    $lname = $_POST['lastname'];
    $profPic = $_FILES['profPic'];
    $pdfFile = $_FILES['pdfFile'];

  $profile = strtolower(pathinfo($profPic['name'], PATHINFO_EXTENSION));
  $profPic['name'] = $studentID.".".$profile;
  $storage = "resource/pictures/";
  $picture = $storage . $profPic['name'];
  move_uploaded_file($profPic['tmp_name'], $picture);
  
  $pdf = strtolower(pathinfo($pdfFile['name'], PATHINFO_EXTENSION));
  $pdfFile['name'] = $studentID.".".$pdf;
  $docstorage = "resource/documents/";
  $document = $docstorage . $pdfFile['name'];
  move_uploaded_file($pdfFile['tmp_name'], $document);

  if($profile == '')
    $profile = '';

  if($pdf == '')
    $pdf = '';


    $sql = "INSERT INTO `accounts`(`studentID`, `firstName`, `middleName`, `lastName`, `profile_pic`, `pdf_file`) VALUES ('$studentID','$fname','$mname','$lname', '$picture', '$document')";

    if (mysqli_query($conn, $sql)) {
       $message = "Credentials Registered Sucessfully";
    } else {
      $message = "Credentials Registered Unsucessfully";
    }
    echo "<script>alert('$message');</script>";
    mysqli_close($conn);
  }
       
}

// function getRecords() {
//   $sql = "SELECT * FROM `accounts` WHERE `id` = :id";
//   $stmt = $this->db
// }  



