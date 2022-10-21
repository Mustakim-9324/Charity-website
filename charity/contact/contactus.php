<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "donation";

//CONNECTION
$conn = mysqli_connect ($host, $username, $password, $database);

if(!$conn){
    die("connection failed due to" .
    mysqli_connect_error());
}
// else{
//     echo "connected successfully";
// }

// if(isset($_POST['']))
// print_r($_POST);
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "Insert into contactus(name,email,message) values('$name','$email','$message')";

echo $sql;

$abc=mysqli_query($conn,$sql) or die(mysqli_error($conn));

// header('Location:donation.html');//
?>