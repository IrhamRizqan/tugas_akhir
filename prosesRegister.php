<?php
include "libs/database.php";

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = mysqli_query($db, "INSERT INTO `users`(`username`, `email`, `password`) VALUES ('$username','$email','$password')");


if($query){
    header("location: login.php?messageSuccess= akw jg mw, RILL SUCCESS GES");
} else{
    header("location: register.php?messageError= ho? CEK LAGI LA PANTE");
}
?>