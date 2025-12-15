<?php
include_once('connection.php');

if(isset($_POST['enter'])){
    $name=$_POST['name'];
    $email=$_POST['email'];  
    $password=md5($_POST['password']);
    $phone=$_POST['phone'];
    $whatsapp =$_POST['wtsphone'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];

    $query="insert into  register values('','$name','$email','$password','$phone','$whatsapp','$gender','$address')";
    $ck=mysqli_query($cn,$query);
    if($ck){
        echo "<script> alert('Congratulation!You have Created Account Successfully')</script>";
        
              header("location:index.php");
    }
}


?>