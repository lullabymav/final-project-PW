<?php
    require('connectdb.php');
    session_start();

    if(isset($_POST['save'])){
        $nik = $_POST['nik'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        //$addr = $_POST['addr'];
        $class = $_POST['class'];
        $nights = $_POST['nights'];

        // echo "hai1<br>";
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
        
        $roomno = $mydb->query($sqlRoomNo);
        // $row = "3";
        while($row = $roomno->fetch_object()){
                $no_room = $row->available;
                // echo $no_room;
        }

        // echo "hai2";

        if($no_room == NULL){
            header("location:post_process.php?head=Failed");
        }else{
            $sqlUpRoom = "UPDATE room SET guest_name='$name', status='Occupied' WHERE no=$no_room";
            $uproom = $mydb->query($sqlUpRoom);

            $sqlNewGuest = "INSERT INTO guest (nik, name, phone, email, no_room, nights) VALUES('$nik', '$name', '$phone', '$email', $no_room, $nights)";
            $nreguest = $mydb->query($sqlNewGuest);
            
            if($uproom && $nreguest){
                header("location:post_process.php?head=Success");
            }
        }
    }else if(isset($_POST['back'])){
        header("location:admin_page.php");
    }
?>