<?php
    require('connectdb.php');
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Admin Page</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-light shadow-sm" style="background-color:#fac334; ">
        <div class="container-fluid ps-5">
            <a class="navbar-brand fs-3 fw-bold" style="text-shadow: 2px 2px 3px white" href="#">DAIZY</a>
        </div>
    </nav>

    <!-- Content -->
    <h1 class="mt-4 mb-2" style="font-size:60px">
        <center>DAIZY HOTEL</center>
    </h1>    
    <div class="container pb-4">
        <div class="row d-flex justify-content-center text-center">
          <div class="col">
              <a href="form_guest.php" style="text-decoration: none;">  
                <img src="./img/add.png" width="300" alt="add data guest">
                <h3 style="color: black">Add New Guest</h4>
                </a>
          </div>
          <div class="col">
            <a href="view_guest.php" style="text-decoration: none;">
                <img src="./img/view.png" width="300" alt="view data guest">
                <h3 style="color: black">Guest Data</h4>
            </a>
          </div>
          <div class="col">
            <a href="view_room.php" style="text-decoration: none;">
                <img src="./img/roomstatus.png" width="300" alt="check room status">
                <h3 style="color: black">Rooms</h4>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>