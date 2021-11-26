<?php
    require('connectdb.php');

    $id = $_GET['id'];

    $sqlEditGuest = "SELECT * FROM data_guest001 WHERE id001='$id'";
    $editGuest = $mydb->query($sqlEditGuest);
    $row = $editGuest->fetch_object();

    $sqlFreeRoom = "UPDATE room001 SET guest_name001=NULL, status001='Available' WHERE no001=$row->no_room001 AND status001='Occupied'";
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
    <nav class="navbar navbar-light shadow-sm" style="background-color: #fac334">
        <div class="container-fluid ps-5">
            <a class="navbar-brand fs-3 fw-bold" style="text-shadow: 2px 2px 3px white" href="index.php">DAIZY</a>
        </div>
    </nav>

    <div class="container p-5 d-flex justify-content-center">
        <div class="box p-5 pb-4" style="background-color: #fac334; min-width: min-content; min-height: min-content; border-radius: 5%">
            <div class="boxContent">
                <h1 class="text-center" style="text-shadow: 2px 2px 3px white; font-size: 50px">Edit / Move Guest</h1>
                <form action="process_editGuest.php" method="POST">
                    <div class="input pt-3" style="font-size: 20px;"> 
                        <input type="hidden" name="id" value=<?= $row->id001 ?>>
                        <label for="name">Name</label><br>
                        <input type="text" name="name" class="mb-3 mt-1 p-2 rounded shadow-sm" style="width: 430px; border: none;" placeholder="name according to ID Card" value="<?= $row->name001 ?>"><br>
                        <label for="phone">Phone</label><br>
                        <input class="mb-3 mt-1 p-2 rounded shadow-sm" name="phone" style="width: 430px; border: none;" placeholder="08xxxxxxxxxx" value=<?= $row->phone001 ?>><br>
                        <label for="address">Email</label><br>
                        <textarea name="address" class="mb-3 mt-1 p-2 rounded shadow-sm" style="width: 430px; border: none;" placeholder="address according to ID Card"><?= $row->address001 ?></textarea><br>
                        <label for="room">Room Type</label><br>
                        <div class="input-group">
                            <select name="class" class="form-select mb-3 mt-1 p-2 rounded shadow-sm" style="width: 430px; border: none; font-size: 20px">
                                <option value="" disabled selected>choose type</option>
                                <option value="C">Standard</option>
                                <option value="B">Deluxe</option>
                                <option value="A">Grand</option>
                            </select>
                        </div>
                        <label for="nigths">How Many Nigths</label><br>
                        <input type="number" name="nights" class="mb-3 mt-1 p-2 rounded shadow-sm" style="width: 430px; border: none;" min="1" value=<?= $row->length001 ?>><br>
                    </div>
                    <div class="d-flex justify-content-center pt-2">
                        <input type="submit" name="save" value="Finish" class="btn btn-primary shadow-sm text-light fs-5 px-4" style="min-width: min-content;">         
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="d-flex flex-wrap justify-content-center align-items-center py-3 ps-4 border-top shadow-sm"
        style="background-color: #fac334;">
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