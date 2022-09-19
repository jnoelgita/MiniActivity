<?php
 include 'resource/php/admintable.php';
?>

<!doctype html>
<html lang="en">
<head>
    <title>CEU Admin Dashboard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- External CSS -->
    <link rel="stylesheet" href="resource/css/admin.css">

    <!-- DataTables CSS -->

    <!-- Web Icon -->
    <link rel="icon" type="image/png" href="resource/img/apple-touch-icon.png">

    



    <!-- JavaScript -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <!-- Icons -->
    <script src="https://kit.fontawesome.com/b04d2a2a76.js" crossorigin="anonymous"></script>
    
    <!-- Data Tables Script -->
    
    
 </head>
  <body>  
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
        <img src="resource/img/logo.png" alt=""
          class="img-fluid logo" width="200" height="70">
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
        <div class="container-fluid">
          <div class="col-12">
            <h1 class="header-title text-center mt-3 mb-5">List of Accounts</h1>
            <div class="table-responsive">
              <table id="accountTable" class="table table-hover" width="100%"> 
              <thead>
              <th>ID</th>
              <th>Student ID</th>
              <th>First Name</th>
              <th>Middle Name</th>
              <th>Last Name</th>
              <th>Profile Picture</th>
              <th>PDF Documents</th>
              <th>Actions</th>
              </thead>
}
                <?php
                $viewUser = new Users();
                $row = $viewUser->fetchAllUser();
                ?>
              </table>
            </div>
          </div>
        </div>
    </section>
  </header>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
      $(document).ready( function () {
    $('#accountTable').DataTable({
      select: {
        style:'multi',
        selector:'td:first-child'
      }
    });
  });
    </script>
  
  </body>
</html>