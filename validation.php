<?php
session_start();
$conn= mysqli_connect('localhost', 'root', '', 'register');

$name = $_POST['username'];
$pass = $_POST['password'];
$sql = "select * from usertable where name = '$name' && password = '$pass'";

$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['username'] = $name;
    header('location:login-home.php');
}else{
    header('location:login.php');
}
?>