<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbblog";

//variables 
$utn=$_POST["titlename"];
$content=$_POST["content"];
$author_name=$_POST["authorname"];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// query to insert the data into database
$sql = "INSERT INTO content_table (title_name,content,author_name)VALUES ('$utn','$content','$author_name')";


  if ($conn->query($sql) === TRUE) {
    header("location:homepage.php");
    } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
    }

$conn->close();
?>