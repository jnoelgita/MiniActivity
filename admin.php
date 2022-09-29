<?php
 include 'resource/php/conn.php';
 include 'resource/php/admintable.php';
 include 'resource/php/function.php';
 include 'resource/php/delete.php';
 session_start();
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
    <!-- Data Tables Script -->

</head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
        <img src="resource/img/logo.png" alt=""
          class="img-fluid logo" width="100" height="70">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
              <a class="nav-item nav-link" href="resource/php/logout.php">Logout</a>
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
                <tr>
                  <th>ID</th>
                  <th>Student ID</th>
                  <th>First Name</th>
                  <th>Middle Name</th>
                  <th>Last Name</th>
                  <th>Profile Picture</th>
                  <th>PDF Documents</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $viewUser = new Users();
                $data = $viewUser->fetchAllUser();
                
                ?>
                <script type="text/javascript">var studs = <?php echo($data);?>;</script>

              </tbody>
              </table>
            </div>
          </div>
        </div>
    </section>
  </header>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

  </body>
</html>
