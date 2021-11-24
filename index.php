<!-- <?php
    // require('connectdb.php');
?> -->

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Role Page</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-light shadow-sm" style="background-color:lightsteelblue; ">
        <div class="container-fluid ps-5">
            <a class="navbar-brand fs-3 fw-bold" style="text-shadow: 2px 2px 3px white" href="#">LULLABY</a>
        </div>
    </nav>

    <!-- content -->
    <h1 class="pt-4 pb-3" style="font-size: 100px; text-shadow: 2px 2px 3px black; color: tan;"><center>LULLABY HOTEL</center></h1>
    <div class="container pb-5">
        <div class="row gx-1">
          <div class="col">
            <div class="box d-flex justify-content-center">
                <a href="./form_login.php" style="text-decoration: none;">
                    <div class="boxContent">
                        <img src="./img/admin2.jpeg" class="mx-auto d-block" width="430" alt="roleadmin">
                        <h2 class="text-center fs-1" style="color: black; text-shadow: 2px 2px 5px lightsteelblue;">ADMIN</h2>
                    </div>
                </a>
            </div>
          </div>
          <div class="col">
            <div class="box d-flex justify-content-center">
                <a href="./homePage.php" style="text-decoration: none;">
                    <div class="boxContent">
                        <img src="./img/guest2.jpg" class="mx-auto d-block" width="430" alt="roleguest">
                        <h2 class="text-center fs-1" style="color: black; text-shadow: 2px 2px 5px lightsteelblue;">GUEST</h2>
                    </div>
                </a>
            </div>
          </div>
        </div>
      </div>

    <!-- Footer -->
    <footer class="d-flex flex-wrap justify-content-center align-items-center py-3 ps-4 border-top shadow-sm"
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
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Lullaby Hotel</title>
    <style>

    </style>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <center> 
        <form method="GET" action="">
            <h1>Who are you?</h1>
                <table>
                    <tr><td><img src="https://i.ibb.co/99v1TVT/admin-icon.png" width="200px" alt="Img error"><td><img src="https://i.ibb.co/ngS3dWX/guest-icon.png" width="180px" alt="Img error"></td></tr>
                    <tr><td align="center"><input type="submit" name="admin" value="ADMIN"><td align="center"><input type="submit" name="guest" value="GUEST"></td></tr>
                </table>
        </form>
    </center>
</body>
</html>

<?php
    // if(isset($_GET['admin'])){
    //     // echo "admin";
    //     header("location:form_login.php");
    // }else if(isset($_GET['guest'])){
    //     // echo "guest";
    //     header("location:home.php");
    // }
?> -->