<?php
    require('connectdb.php');

    if(isset($_POST['save'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $nights = $_POST['nights'];
        $class = $_POST['class'];

        if($class =='A'){
            $sqlRoomNo = "SELECT MIN(no001) as available FROM room001 WHERE no001<16 AND no001>10 AND status001='Available'";
        }else if($class =='B'){
            $sqlRoomNo = "SELECT MIN(no001) as available FROM room001 WHERE no001<11 AND no001>5 AND status001='Available'";
        }else if($class =='C'){
            $sqlRoomNo = "SELECT MIN(no001) as available FROM room001 WHERE no001<=5 AND no001>0 AND status001='Available'";
        }

        $roomno = $mydb->query($sqlRoomNo);
        while($row = $roomno->fetch_object()){
            $newRoom = $row->available;
        }

            $sqlNewRoom = "UPDATE room001 SET guest_name001='$name', status001='Occupied' WHERE no001=$newRoom";
            $mydb->query($sqlNewRoom);

            $sqlUpGuest = "UPDATE data_guest001 SET name001='$name', phone001='$phone', address001='$address', length001=$nights, no_room=$newRoom WHERE id001=$id";
            $mydb->query($sqlUpGuest);

    }else if(isset($_POST['back'])){
        header("location: view_guest.php");
    }
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
                <h2 class="text-center" style="text-shadow: 2px 2px 3px white;">Edit/Move Guest Success!</h2>
                <a href="view_guest.php" class="d-flex justify-content-center">
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