<?php
    require('connectdb.php');
    session_start();
    // print_r($_GET);

    $id = $_GET['id'];

    $sqlCheckout = "SELECT * from guest where id='$id'";
    $checkout = $mydb->query($sqlCheckout);
    $row = $checkout->fetch_object();

    if($row->no_room>0 && $row->no_room<6){
        $price = $row->nights*150000;
    }else if($row->no_room>5 && $row->no_room<11){
        $price = $row->nights*200000;
    }else if($row->no_room>10 && $row->no_room<16){
        $price = $row->nights*300000;
    }else if($row->no_room>15 && $row->no_room<21){
        $price = $row->nights*350000;
    }else if($row->no_room>20 && $row->no_room<31){
        $price = $row->nights*500000;
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

    <title>View Data</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-light shadow-sm" style="background-color: lightsteelblue">
        <div class="container-fluid ps-5">
            <a class="navbar-brand fs-3 fw-bold" style="text-shadow: 2px 2px 3px white" href="#">LULLABY</a>
        </div>
    </nav>

    <div class="container p-5 my-4 d-flex justify-content-center">
        <div class="box p-5 pb-4 rounded-3" style="background-color: #e0cbaf; min-width: min-content; min-height: min-content;">
            <div class="boxContent">
                <h1 class="text-center" style="text-shadow: 2px 2px 3px white; font-size: 50px">Checkout</h1>
                <form action="" method="POST">
                <table class="table table-bordered table-light border-dark mt-4">
                    <thead class="text-center table-dark">
                        <tr class="align-middle">
                            <th>NIK</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th width="140px">Room Number</th>
                            <th width="140px">Lenght of Stay</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= $row->nik ?></td>
                            <td><?= $row->name ?></td>
                            <td><?= $row->phone ?></td>
                            <td><?= $row->email ?></td>
                            <td><?= $row->no_room ?></td>
                            <td><?= $row->nights ?></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td class="fw-bold">Total</td>
                            <td colspan="5" align="left">Rp<?= $price ?></td>
                        </tr>
                        <tr>
                            <td><label for="" class="fw-bold">Payment</label></td>
                            <td colspan="5"><input type="text" name="pay" style="min-width: auto" placeholder="Rp"></td>
                        </tr>
                    </tfoot>
                </table>
                
                    
                    <div class="d-flex justify-content-center pt-2">
                        <input type="submit" name="back" value="Back" class="btn btn-danger shadow-sm text-light fs-5 px-4 mx-2" style="min-width: min-content;">                            
                        <input type="submit" name="check" value="Pay Now" class="btn btn-primary shadow-sm text-light fs-5 px-4" style="min-width: min-content;">         
                    </div>
                </form>
                <?php
                if(isset($_POST['check'])){
                    $payment = $_POST['pay'];
                    if($payment>=$price){
                        $change = $payment-$price;
                        header("location:process_checkout.php?id=$row->id&change=$change");
                    }else{
                        ?>
                            <p class="fs-5 pt-4" style="text-shadow:2px 2px 5px white; text-align:center">Not Enough Money <br>Please try again</p>
                            <!-- <a  href="form_checkout.php?id=<?= $row->id ?>">
                                <button class="btn btn-primary">OK</button>
                            </a> -->
                        <?php
                    }
                }else if(isset($_POST['back'])){
                    header("location:view_guest.php");
                }
                ?>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>

// <!-- 
// <!DOCTYPE html>
// <html lang="en">
// <head>
//     <title>Checkout</title>
// </head>
// <body>
//     <table border=1>
//         <thead>
//             <th>NIK</th>
//             <th>Name</th>
//             <th>Phone</th>
//             <th>E-mail</th>
//             <th>Address</th>
//             <th>Room No.</th>
//             <th>Nights</th>
//             <th>Option</th>
//             <th>Checkout</th>
//         </thead>
//         <tbody>
//             <tr>
//                 <td><?= $row->nik ?></td>
//                 <td><?= $row->name ?></td>
//                 <td><?= $row->phone ?></td>
//                 <td><?= $row->email ?></td>
//                 <td><?= $row->address ?></td>
//                 <td><?= $row->no_room ?></td>
//                 <td><?= $row->nights ?></td>
//             </tr>
//         </tbody>
//         <tfoot>
//             <tr>
//                 <td colspan="2">Total</td>
//                 <td colspan="5" align="left">Rp<?= $price ?></td>
//             </tr>
//         </tfoot>
//     </table>
//     <form action="" method="POST">
//         <label for="">Payment  : Rp</label>
//         <input type="text" name="pay">
//         <button type="submit" name="check">PAY NOW</button>
//     </form>
//     <?php
//     if(isset($_POST['check'])){
//         $payment = $_POST['pay'];
//         if($payment>=$price){
//             $change = $payment-$price;
//             header("location:process_checkout.php?id=$row->id&change=$change");
//         }else{
//             ?>
//                 <p>Not Enough Money <br>Please try again</p>
//                 <a href="form_checkout.php?id=<?= $row->id ?>">OK</a>
//             <?php
//         }
//     }
//     ?>
// </body>
// </html>
//  -->
