<?php
    require('connectdb.php');

    if(isset($_POST['save'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $class = $_POST['class'];
        $nights = $_POST['nights'];

        if($class =='A'){
            $sqlRoomNo = "SELECT MIN(no001) as available FROM room001 WHERE no001<16 AND no001>10 AND status001='Available'";
        }else if($class =='B'){
            $sqlRoomNo = "SELECT MIN(no001) as available FROM room001 WHERE no001<11 AND no001>5 AND status001='Available'";
        }else if($class =='C'){
            $sqlRoomNo = "SELECT MIN(no001) as available FROM room001 WHERE no001<=5 AND no001>0 AND status001='Available'";
        }
        
        $roomno = $mydb->query($sqlRoomNo);
        while($row = $roomno->fetch_object()){
                $no_room = $row->available;
        }

        if($no_room == NULL){
            header("location:post_process.php?head=Failed");
        }else{
            $sqlUpRoom = "UPDATE room001 SET guest_name001='$name', status001='Occupied' WHERE no001=$no_room";
            $uproom = $mydb->query($sqlUpRoom);

            $sqlNewGuest = "INSERT INTO data_guest001 (name001, phone001, address001, length001, no_room001) VALUES ('$name', '$phone', '$address', $nights, '$no_room')";
            $nreguest = $mydb->query($sqlNewGuest);
            
            if($uproom && $nreguest){
                header("location:post_process.php?head=Success");
            }
        }
    }else if(isset($_POST['back'])){
        header("location:index.php");
    }
?>