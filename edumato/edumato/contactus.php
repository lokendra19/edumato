<?php
include_once('connection.php');

if(isset($_POST['send'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];

    $query="insert into contact values('','$name','$email','$phone','$message')";
    $ck=mysqli_query($cn,$query);
    if($ck){
        echo "<script> alert('Thankyou for contact us')</script>";
             
    }
    if($ck){
        header("location:contact.php");
    }
}


?>