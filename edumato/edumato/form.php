<?php
include_once('connection.php');



if(isset($_POST['enter'])){
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $persons=$_POST['person'];
    $date=$_POST['date'];

    $query="insert into booking values('','$name','$phone','$email','$persons','$date')";
    $ck=mysqli_query($cn,$query);
    if($ck){
        echo "<script> alert('Your table is booked')</script>";
    }
}


?>