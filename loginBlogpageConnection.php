<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbblog";

//varables
$uname = $_POST["username"];
$upass = $_POST["password"];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//query
$sql = "SELECT user_id, password from login_table where  user_id='$uname' and password='$upass'";
$result = $conn->query($sql);

 if ($conn->query($sql) == 1) {
    //redirecting page to product page
        header('location:filldata.php');
    } 
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?> 