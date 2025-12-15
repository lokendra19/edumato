<?php
include_once('connection.php');

if(isset($_POST['enter'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $query="insert into customer values('','$username','$password')";
    $ck=mysqli_query($cn,$query);
    if($ck){
        echo "<script> alert('Your table is booked')</script>";
        
            header("location:index.php");
    }
}


?>