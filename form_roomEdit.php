<?php
    require('connectdb.php');

    $no = $_GET['no'];

    $sql = "SELECT * FROM room001 WHERE no001=$no";
    $editRoom = $mydb->query($sql);
    $row = $editRoom->fetch_object();
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
                <h1 class="text-center" style="text-shadow: 2px 2px 3px white; font-size: 50px">Edit Room <?= $no ?></h1>
                <form action="process_editRoom.php" method="POST">
                    <div class="input pt-3" style="font-size: 20px;">
                        <input type="hidden" name="no" value=<?= $row->no001 ?>> 
                        <label for="name">Guest Name</label><br>
                        <input type="text" name="name" class="mb-3 mt-1 p-2 rounded shadow-sm" style="width: 430px; border: none;" placeholder="name according to ID Card" value="<?= $row->guest_name001 ?>"><br>
                        <label for="status">Status</label><br>
                        <div class="input-group">
                            <select name="status" class="form-select mb-3 mt-1 p-2 rounded shadow-sm" style="width: 430px; border: none; font-size: 20px" value="<?= $row->status001 ?>">
                                <option value="" disabled selected>choose room status</option>
                                <option value="Available">Available</option>
                                <option value="Occupied">Occupied</option>
                                <option value="Under<br>Main#fac334ce">Under Maintenance</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center pt-2">
                        <input type="submit" name="back" value="Back" class="btn btn-danger shadow-sm text-light fs-5 px-4 mx-2" style="min-width: min-content;">                            
                        <input type="submit" name="save" value="Submit" class="btn btn-primary shadow-sm text-light fs-5 px-4" style="min-width: min-content;">         
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