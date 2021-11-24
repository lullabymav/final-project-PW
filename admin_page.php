<?php
    require('connectdb.php');
    session_start();
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
    <nav class="navbar navbar-light shadow-sm" style="background-color:lightsteelblue; ">
        <div class="container-fluid ps-5">
            <a class="navbar-brand fs-3 fw-bold" style="text-shadow: 2px 2px 3px white" href="#">LULLABY</a>
            <form action="" method="POST">
                <button class="btn btn-danger" name="logout" aria-current="page">Logout</button>
            </form>
        </div>
    </nav>

    <!-- Content -->
    <h1 class="py-4" style="text-shadow: 2px 2px 3px black; color: tan;">
        <center>WELCOME ADMIN!</center>
    </h1>    
    <div class="container pb-4">
        <div class="row d-flex justify-content-center text-center">
          <div class="col">
              <a href="form_guest.php" style="text-decoration: none;">  
                <img src="./img/add.png" width="300" alt="add data guest">
                <h3 style="color: tan; text-shadow: 2px 2px 5px lightsteelblue;">Add New Guest</h4>
                </a>
          </div>
          <div class="col">
            <a href="view_guest.php" style="text-decoration: none;">
                <img src="./img/view.png" width="300" alt="view data guest">
                <h3 style="color: tan; text-shadow: 2px 2px 5px lightsteelblue;">Guest Data</h4>
            </a>
          </div>
          <div class="col">
            <a href="view_room.php" style="text-decoration: none;">
                <img src="./img/roomstatus.png" width="300" alt="check room status">
                <h3 style="color: tan; text-shadow: 2px 2px 5px lightsteelblue;">Rooms</h4>
                </a>
          </div>
        </div>
      </div>

    <!-- Footer -->
    <footer class="d-flex flex-wrap justify-content-center fixed-bottom align-items-center py-3 ps-4 border-top shadow-sm"
        style="background-color:lightsteelblue;">
        <div class="d-flex align-items-center">
            <span>Copyright 2021 © Lullaby Hotel</span>
        </div>
    </footer>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <title>Lullaby Hotel Admin</title>
</head>
<body>
    <form method="POST" action="">
        Welcome admin <br>
        <input type="submit" name="newGuest" value="New Guest">
        <input type="submit" name="viewGuest" value="View Guest">
        <input type="submit" name="room" value="Room Status">
        <input type="submit" name="checkout" value="Check Out">
        <br>
        <input type="submit" name="logout" value="LOGOUT">
    </form>
</body>
</html> -->

<?php
    // if(isset($_POST['newGuest'])){

    //     header("location:form_guest.php");

    // }else if(isset($_POST['viewGuest'])){

    //     header("location:view_guest.php");
    
    // }else if(isset($_POST['room'])){

    //     header("location:view_room.php");

    // // }else if(isset($_POST['checkout'])){

    // //     header("location:.php");
    // }
    
    if(isset($_POST['logout'])){
        session_destroy();
        header("location:index.php");
    }
?>