<?php
    session_start();
    $head = $_GET['head'];
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
      <!-- Navbar -->
    <nav class="navbar navbar-light shadow-sm" style="background-color:#fac334; ">
        <div class="container-fluid ps-5">
            <a class="navbar-brand fs-3 fw-bold" style="text-shadow: 2px 2px 3px white" href="index.php">DAIZY</a>
        </div>
    </nav>

    <!-- Content -->
    <div class="container p-5 d-flex justify-content-center">
        <div class="box p-5 pb-4 m-5" style="background-color: #fac334; min-width: min-content; min-height: min-content; border-radius: 5%">
            <div class="boxContent">
                <h2 class="text-center" style="text-shadow: 2px 2px 3px white;">Input New Guest <?= $head ?>!</h2>
                <a href="index.php" class="d-flex justify-content-center">
                    <input type="submit" name="submit" value="OK" class="btn btn-primary shadow-sm text-light fs-5 px-4 mt-4" style="min-width: min-content;">         
                </a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="d-flex flex-wrap justify-content-center fixed-bottom align-items-center py-3 ps-4 border-top shadow-sm"
        style="background-color:#fac334;">
        <div class="d-flex align-items-center">
            <span>Copyright 2021 © Daizy Hotel</span>
        </div>
    </footer>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>