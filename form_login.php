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

    <title>Login Page</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-light shadow-sm" style="background-color:lightsteelblue; ">
        <div class="container-fluid ps-5">
            <a class="navbar-brand fs-3 fw-bold" style="text-shadow: 2px 2px 3px white" href="./index.php">LULLABY</a>
        </div>
    </nav>

    <!-- Content -->
    <div class="container p-5 d-flex justify-content-center">
        <div class="box p-5 pb-4" style="background-color: #e0cbaf; min-width: min-content; min-height: min-content; border-radius: 5%">
            <div class="boxContent">
                <h1 class="text-center" style="text-shadow: 2px 2px 3px white; font-size: 50px;">Login</h1>
                <form action="" method="POST">
                    <div class="input pt-3" style="font-size: 20px;"> 
                        <label for="username">Username</label><br>
                        <input type="text" name="username" class="mb-3 mt-1 p-2 rounded shadow-sm" style="width: 430px; border: none;"><br>
                        <label for="password">Password</label><br>
                        <input type="password" name="password" class="mb-3 mt-1 p-2 rounded shadow-sm" style="width: 430px; border: none;"><br>
                    </div>
                    <div class="d-flex justify-content-center pt-3">
                        <input type="submit" name="back" value="Back" class="btn btn-danger shadow-sm text-light fs-5 px-4 mx-2" style="min-width: min-content;">                            
                        <input type="submit" name="submit" value="Submit" class="btn btn-primary shadow-sm text-light fs-5 px-4" style="min-width: min-content;">         
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="d-flex flex-wrap justify-content-center align-items-center py-3 ps-4 border-top shadow-sm"
        style="background-color:lightsteelblue;">
        <div class="d-flex align-items-center">
            <span>Copyright 2021 ?? Lullaby Hotel</span>
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
<center>
        <table>
            <form method="POST" action="">
                <tr><td colspan="2" align="center">PLEASE LOGIN</td></tr>
                <tr><td>Username<td><input type="text" name="username"></td></tr>
                <tr><td>Password<td><input type="password" name="password"></td></tr>
                <tr><td><td><input type="submit" name="submit" value="LOGIN"></td></tr>
            </form>
        </table>
    </center>
</body>
</html> -->

<?php
    if(isset($_POST['submit'])){
        $user=$_POST['username'];
        $pass=$_POST['password'];

        $sql=mysqli_query($mydb, "Select * from admin where username='$user' and password='$pass'");

        $check=mysqli_num_rows($sql);
        // $check = 1;

        if($check>0){
            session_start();
            $_SESSION['username']=$user;
            $_SESSION['password']=$pass;
            header("location:admin_page.php");
        }
        else{
            echo "<p align=center>Invalid username or password</p>";
            echo "<p align=center>Please try again</p>";
        }
    }else if(isset($_POST['back'])){
        header("location:index.php");
    }
?>