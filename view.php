<!doctype html>
<html lang="en">
  <head>
    <title>View Profile</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!-- External CSS -->
    <link rel="stylesheet" href="resource/css/view.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<!-- DataTables CSS -->

<!-- Web Icon -->
    <link rel="icon" type="image/png" href="resource/img/apple-touch-icon.png">

<!-- JavaScript -->

<!-- Icons -->
    <script src="https://kit.fontawesome.com/b04d2a2a76.js" crossorigin="anonymous"></script>
    <script src="resource/js/script.js"></script>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
          <img src="resource/img/logo.png" alt="" class="img-fluid logo" width="100" height="60">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link active" href="#">Home</a>
                <a class="nav-item nav-link" href="../../admin.php">Admin Dashboard</a>
              </div>
            </div>
        </div>  
      </nav>

        <?php

        include 'resource/php/conn.php';

        $id = $_GET['id'];
        $conn = conn();
        $sql = "SELECT * FROM  `accounts` WHERE id =$id";
        $result= mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        $studentID = $row['studentID'];
        $firstName = $row['firstName'];
        $middleName = $row ['middleName'];
        $lastName = $row ['lastName'];
        $profilepic = $row['profile_pic'];
        $pdf_file = $row['pdf_file'];
        //   echo $id; 
        ?>

      <div class="container">
        <h2 class="text-center mt-3">Student Profile</h2>
        <div class="card">
            <div class="card-body">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-12">
                    <img src="<?php echo $profilepic?>" width="320" alt="">
                         <form action="" class="textcenter">
                         <?php echo $studentID?></br>
                        <?php echo $firstName;?>&nbsp<?php echo $middleName;?>&nbsp<?php echo $lastName?> 
                         </form>
                        
                        <a href="<?php echo $pdf_file?>"download class="pdf_download">Download PDF</a>
                    </div>
                </div>
      </div>

      </header>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>