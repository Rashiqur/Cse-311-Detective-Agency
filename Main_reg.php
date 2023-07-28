<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";
session_start();
$conn= mysqli_connect('localhost', 'root', '', 'register');
//mysqli_select_db($conn, 'register');
$name = $_POST['username'];
$pass = $_POST['password'];
$sql = "select * from usertable where name = '$name'";

$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);

if($num ==1){
    //echo "username taken";
    header('location:registration.php');
}else{
    $reg = "insert into usertable (name, password) values ('$name', '$pass')";
    mysqli_query($conn, $reg);
    //echo "Registration succesfull";
    header('location:login.php');
}
?>