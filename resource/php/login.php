<?php
session_start();

include 'conn.php';
$conn = conn();

if(isset($_POST['username']) && isset($_POST['password'])) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }

    $uname = validate($_POST['username']);
    $pass = validate($_POST['password']);
   
    
    if(empty($uname)) {
        header("Location: adminlogin.php?error=Username is required");
        exit();

    } else if(empty($pass)) {
        header("Location: adminlogin.php?error=Password is required");  
        exit();

    } else {
        $sql = "SELECT * FROM admin WHERE username ='$uname' AND password ='$pass'";

        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            
            if ($row['username'] === $uname && $row['password'] === $pass)  {
                echo "Logged in!";

                $_SESSION['username'] = $row['username'];

                $_SESSION['id'] = $row['id'];
                header("location: ../../admin.php");
                exit();
            }
            else {
                header("location:adminlogin.php?error=Incorrect Username or Password");
                exit();
            }
        }
        else {
            header("location:adminlogin.php?error=Incorrect Username or Password");
            exit();
        }
    }
}else{
    header("location:../../adminlogin.php");
    exit();
}
?> 