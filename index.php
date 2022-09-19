<!doctype html>
<html lang="en">
  <head>
    <title>CEU Registration Form </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- External CSS -->
    <link rel="stylesheet" href="resource/css/register.css">

    <!-- Web Icon -->
    <link rel="icon" type="image/png" href="resource/img/apple-touch-icon.png">

    <!-- JavaScript -->
    <script src="resource/js/script.js"></script>
  </head>
  <body>  
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark">
       <div class="container-fluid">
        <img src="resource/img/logo.png" alt=""
          class="img-fluid logo" width="170" height="60">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
              <a class="nav-item nav-link active" href="#">Home</a>
              <a class="nav-item nav-link" href="">Sign Up</a>
            </div>
          </div>
        </div>  
      </nav>

      <section>
      <form method="POST" action="resource/php/add_query.php">
        <div class="container"> 
          <div class="card">
            <div class="card-body">
              <h1 class="header-title text-center">Registration Form</h1>
              <?php
              if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
             <?php }?>
              <div class="row justify-content-start align-items-start mt-3">
                <div class="form-group col-md-5 studID">
                  <label for="studentID" class="form-title">Student ID</label>
                  <input type="text" class="form-control" name="studentID" placeholder="Ex. 2001-30000"autocomplete="no" pattern="[0-9]{4}-[0-9]{5}">
                </div>
                <div class="row justify-content-center align-items-center ml-5 mt-1">
                  <div class="form-group col-md-4">
                    <label for="firstname" class="form-title">First Name</label>
                    <input type="text" class="form-control" name="firstname" placeholder="Ex. John Noel"autocomplete="no" pattern="[a-zA-Z\s]*$">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="middlename" class="form-title">Middle Name</label>
                    <input type="text" class="form-control" name="middlename" placeholder="Ex. Ayson"autocomplete="no" pattern="[a-zA-Z\s]*$">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="lastname" class="form-title">Last Name</label>
                    <input type="text" class="form-control" name="lastname" placeholder="Ex. Gita" autocomplete="no" pattern="[a-zA-Z\s]*$">
                  </div>
                </div>
                <!-- Row for Upload Picture and Documents -->
                <div class="row justify-content-center align-items-center ml-5 mt-2">
                  <div class="form-group col-md-5">
                    <label for="profPic" class="form-title">Upload Profile Picture</label></br>
                    <input type="file" class="form-control1" name="profPic" id="profPic" onchange="ValidatePic()">
                  </div>
                  <div class="form-group col-md-5">
                    <label for="pdfFile" class="form-title">Upload PDF Documents</label>
                    <input type="file" class="form-control1" name="pdfFile" id="pdfFile" onchange="ValidateDoc()">
                  </div>
                </div>
              </div>
              <!-- Row for Button -->
              <div class="row justify-content-center align-items-center mt-2">
                  <div class="form-group col-md-4"> 
                    <input type="submit" class="btn " name="submit" id="submit" placeholder=""></br>
                    <a href="adminlogin.php" class="btn">Admin</a>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </form>
    </header>
      




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>