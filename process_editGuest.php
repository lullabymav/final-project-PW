<?php
    require('connectdb.php');
    session_start();

    if(isset($_POST['save'])){
        $id = $_POST['id'];
        //$oldRoom = $_POST['oldRoom'];
        $nik = $_POST['nik'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        //$addr = $_POST['addr'];
        $class = $_POST['class'];
        $nights = $_POST['nights'];

        if($class =='A'){
            $sqlRoomNo = "SELECT MIN(no) as available FROM room WHERE no<31 AND no>20 AND status='Available'";
        }else if($class =='B1'){
            $sqlRoomNo = "SELECT MIN(no) as available FROM room WHERE no<16 AND no>10 AND status='Available'";
        }else if($class =='B2'){
            $sqlRoomNo = "SELECT MIN(no) as available FROM room WHERE no<21 AND no>15 AND status='Available'";
        }else if($class =='C1'){
            $sqlRoomNo = "SELECT MIN(no) as available FROM room WHERE no<=5 AND no>0 AND status='Available'";
        }else if($class =='C2'){
            $sqlRoomNo = "SELECT MIN(no) as available FROM room WHERE no<11 AND no>5 AND status='Available'";
        }

        // if($class =='A'){
        //     $sqlRoomNo = "SELECT MIN(no) as available FROM room WHERE no<31 AND no>20 AND status='Available'";
        // }else if($class =='B'){
        //     $sqlRoomNo = "SELECT MIN(no) as available FROM room WHERE no<21 AND no>10 AND status='Available'";
        // }else{
        //     $sqlRoomNo = "SELECT MIN(no) as available FROM room WHERE no<11 AND no>0 AND status='Available'";
        // }

        $roomno = $mydb->query($sqlRoomNo);
        while($row = $roomno->fetch_object()){
            $newRoom = $row->available;
            // echo $newRoom;
        }

        // if($oldRoom!=$newRoom){
            // $sqlOldRoom = "UPDATE room SET guest_name=NULL, status='Available' WHERE no=$oldRoom AND status='Occupied'";
            // $mydb->query($sqlOldRoom);

            $sqlNewRoom = "UPDATE room SET guest_name='$name', status='Occupied' WHERE no=$newRoom";
            $mydb->query($sqlNewRoom);

            $sqlUpGuest = "UPDATE guest SET nik='$nik', name='$name', phone='$phone', email='$email', no_room=$newRoom, nights='$nights' WHERE id=$id";
            $mydb->query($sqlUpGuest);
        // }else{
        //     // $sqlOldRoom = "UPDATE room SET guest_name=NULL, status='Available' WHERE no=$oldRoom";
        //     // $mydb->query($sqlOldRoom);
    
        //     $sqlNewRoom = "UPDATE room SET guest_name='$name', status='Occupied' WHERE no=$newRoom";
        //     $mydb->query($sqlNewRoom);
    
        //     $sqlUpGuest = "UPDATE guest SET nik='$nik', name='$name', phone='$phone', email='$email', no_room=$newRoom, nights='$nights' WHERE id=$id";
        //     $mydb->query($sqlUpGuest);
        // }

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
    <nav class="navbar navbar-light shadow-sm" style="background-color:lightsteelblue; ">
        <div class="container-fluid ps-5">
            <a class="navbar-brand fs-3 fw-bold" style="text-shadow: 2px 2px 3px white" href="#">LULLABY</a>
        </div>
    </nav>

    <!-- Content -->
    <div class="container p-5 d-flex justify-content-center">
        <div class="box p-5 pb-4 m-5" style="background-color: #e0cbaf; min-width: min-content; min-height: min-content; border-radius: 5%">
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
        style="background-color:lightsteelblue;">
        <div class="d-flex align-items-center">
            <span>Copyright 2021 © Lullaby Hotel</span>
        </div>
    </footer>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <a href="view_guest.php">
        <button>OK</button>
    </a>
</body>
</html> -->