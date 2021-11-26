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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>View Data</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-light shadow-sm" style="background-color: #fac334">
        <div class="container-fluid ps-5">
            <a class="navbar-brand fs-3 fw-bold" style="text-shadow: 2px 2px 3px white" href="index.php">DAIZY</a>
        </div>
    </nav>

    <div class="container p-5 my-4 d-flex justify-content-center">
        <div class="box p-5 pb-4 rounded-3" style="background-color: #fac334; min-width: min-content; min-height: min-content;">
            <div class="boxContent">
                <h1 class="text-center" style="text-shadow: 2px 2px 3px white; font-size: 50px">Room Data</h1>
                <table class="table table-bordered table-light border-dark mt-4">
                    <thead class="text-center table-dark">
                        <tr class="align-middle">
                            <th width="100px">Room No.</th>
                            <th width="200px">Occupied by</th>
                            <th>Status</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sqlReadRoom = "SELECT * FROM room001";
                    $room = $mydb->query($sqlReadRoom);
                    while($row = $room->fetch_object()){
                    ?>
                        <tr class="align-middle">
                            <td><?= $row->no001 ?></td>
                            <?php
                                if($row->guest_name001==NULL){
                                    $row->guest_name001 = "-";
                                }
                            ?>
                            <td><?= $row->guest_name001 ?></td>
                            <td><?= $row->status001 ?></td>
                            <td>
                                <a href="form_roomEdit.php?no=<?= $row->no001?>">
                                    <button class="btn btn-secondary">Edit</button>
                                </a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                    </tbody>
                </table>
                <p class="fs-5 mb-2">Total Room : <?php echo mysqli_num_rows($room)?></p>
                <a class="d-flex justify-content-center pb-2" style="text-decoration: none" href="index.php" role="button">
                  <input type="submit" name="back" value="Back" class="btn btn-danger shadow-sm text-light fs-5 px-4" style="min-width: min-content;">
                </a>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>