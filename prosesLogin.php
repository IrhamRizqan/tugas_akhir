<?php
include "libs/database.php";

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($db, "SELECT * FROM `users` WHERE username = '$username' AND password = '$password'");
$check = mysqli_num_rows($query);

if($check){
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "Logged";
    header("location: pages/dashboard.php?messageSuccess= RILL no pek pek ini akun rill");
} else{
    header("location: login.php?messageError= NO ACCOUNT PLS JGN BRUTEFORCE!");
}
?>