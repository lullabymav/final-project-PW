<?php
    require('connectdb.php');
    session_start();

    $id = $_GET['id'];

    $sqlEditGuest = "SELECT * from guest where id='$id'";
    $editGuest = $mydb->query($sqlEditGuest);
    $row = $editGuest->fetch_object();

    // $sqlEditRoom = "SELECT * from room where no=$row->no_room";
    // $editRoom = $mydb->query($sqlEditRoom);
    // $row2 = $editRoom->fetch_object();

    $sqlFreeRoom = "UPDATE room SET guest_name=NULL, status='Available' WHERE no=$row->no_room AND status='Occupied'";
    $mydb->query($sqlFreeRoom);
    
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

    <title>New Guest Data</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-light shadow-sm" style="background-color: lightsteelblue">
        <div class="container-fluid ps-5">
            <a class="navbar-brand fs-3 fw-bold" style="text-shadow: 2px 2px 3px white" href="#">LULLABY</a>
        </div>
    </nav>

    <div class="container p-5 d-flex justify-content-center">
        <div class="box p-5 pb-4" style="background-color: #e0cbaf; min-width: min-content; min-height: min-content; border-radius: 5%">
            <div class="boxContent">
                <h1 class="text-center" style="text-shadow: 2px 2px 3px white; font-size: 50px">Edit / Move Guest</h1>
                <form action="process_editGuest.php" method="POST">
                    <div class="input pt-3" style="font-size: 20px;"> 
                        <input type="hidden" name="id" value=<?= $row->id ?>>
                        <!-- <input type="hidden" name="oldRoom" value=<?= $row->no_room ?>> -->
                        <label for="nik">NIK</label><br>
                        <input type="text" name="nik" class="mb-3 mt-1 p-2 rounded shadow-sm" style="width: 430px; border: none; " placeholder="ID number according to ID card" value=<?= $row->nik ?>><br>
                        <label for="name">Name</label><br>
                        <input type="text" name="name" class="mb-3 mt-1 p-2 rounded shadow-sm" style="width: 430px; border: none;" placeholder="name according to ID Card" value="<?= $row->name ?>"><br>
                        <label for="phone">Phone</label><br>
                        <input class="mb-3 mt-1 p-2 rounded shadow-sm" name="phone" style="width: 430px; border: none;" placeholder="08xxxxxxxxxx" value=<?= $row->phone ?>><br>
                        <label for="email">Email</label><br>
                        <input type="text" name="email" class="mb-3 mt-1 p-2 rounded shadow-sm" style="width: 430px; border: none;" placeholder="emailname@gmail.com" value=<?= $row->email ?>><br>
                        <label for="room">Room Type</label><br>
                        <div class="input-group">
                            <select name="class" class="form-select mb-3 mt-1 p-2 rounded shadow-sm" style="width: 430px; border: none; font-size: 20px">
                                <option value="" disabled selected>choose type</option>
                                <option value="C1">Standard Single Bed</option>
                                <option value="C2">Standard Double Bed</option>
                                <option value="B1">Deluxe Single Bed</option>
                                <option value="B2">Deluxe Double Bed</option>
                                <option value="A">Grand</option>
                            </select>
                        </div>
                        <label for="nigths">How Many Nigths</label><br>
                        <input type="number" name="nights" class="mb-3 mt-1 p-2 rounded shadow-sm" style="width: 430px; border: none;" min="1" value=<?= $row->nights ?>><br>
                    </div>
                    <div class="d-flex justify-content-center pt-2">
                        <!-- <input type="submit" name="back" value="Back" class="btn btn-danger shadow-sm text-light fs-5 px-4 mx-2" style="min-width: min-content;">                             -->
                        <input type="submit" name="save" value="Finish" class="btn btn-primary shadow-sm text-light fs-5 px-4" style="min-width: min-content;">         
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="d-flex flex-wrap justify-content-center align-items-center py-3 ps-4 border-top shadow-sm"
        style="background-color: lightsteelblue;">
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
    <title>Edit / Move Guest</title>
</head>
<body>
    <form action="process_editGuest.php" method="POST">
        <h1>Edit / Move Guest <?= $row->name ?></h1>
        <input type="hidden" name="id" value=<?= $row->id ?>>
        <input type="hidden" name="oldRoom" value=<?= $row->no_room ?>>
        <label for="">NIK     : </label>
        <input type="text" name="nik" value=<?= $row->nik ?>><br>

        <label for="">Name    : </label>
        <input type="text" name="name" value=<?= $row->name ?>><br>

        <label for="">Phone   : </label>
        <input type="text" name="phone" value=<?= $row->phone ?>><br>

        <label for="">E-mail  : </label>
        <input type="text" name="email" value=<?= $row->email ?>><br>

        <label for="">Address : </label>
        <input type="text" name="addr" value=<?= $row->address ?>><br>

        <label for="">Class   :</label>
            <select name="class">
            <option value="A">Grand</option>
                <option value="B1">Deluxe Double Bed</option>
                <option value="B2">Deluxe Double Bed</option>
                <option value="C1">Standar Single Bed</option>
                <option value="C2">Standar Double Bed</option>
            </select><br>
        <label for="">How many nights :</label>
        <input type="number" name="nights" value=<?= $row->nights ?>><br>

        <button type="submit" name="save">Finish</button>
    </form>
    
</body>
</html> -->