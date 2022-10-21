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
print_r($_POST);
$holder = $_POST['holder'];
$num = $_POST['num'];
$date = $_POST['date'];
$cvc = $_POST['cvc'];
$amount = $_POST['amount'];

$sql = "Insert into card_details(holder,num,date,cvc,amount) values('$holder','$num','$date','$cvc','$amount')";

echo $sql;

$abc=mysqli_query($conn,$sql) or die(mysqli_error($conn));

?>