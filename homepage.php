<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: rgb(28, 26, 26);

}

h3{
  color: white;
}

h1
{
  color: white;
}

p
{
 color: white;
}

/*Navigation Bar*/
.navbar {
  width: 100%;
  background-color: black;
  overflow: auto;
}

.navbar a {
  float: left;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background-color: #000;
}

.active {
  background-color:#bc2a16;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}

/****************************************************************/


</style>
<body>

<h1>Saurabh R</h1>
<p>Hello guys , I'm from pune and I would like to talk about party culture in pune. Click on the images to know more about it and login for gettin latest updates </p>



<div class="navbar">
  <a class="active" href="homepage.php"><i class="fa fa-fw fa-home"></i> Home</a> 
  <!--<a href="#"><i class="fa fa-fw fa-search"></i> Search</a> --->
  <a href="contactblog.php"><i class="fa fa-fw fa-envelope"></i> Contact</a> 
  <a href="loginBlogPage"><i class="fa fa-fw fa-user"></i> Login</a>
  <a href="aboutMeblog.php"><i class="fa fa-fw fa-user"></i> About Me</a>
</div>


<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbblog";

$conn = new mysqli($servername,$username,$password,$dbname);
if(! $conn ) {
      die('Could not connect: ' . $conn->connect_error);
   }
   
   $sql = "SELECT title_name,content,author_name FROM content_table";
      $result = $conn->query($sql);
   
   


   


?>
<?php
         if(mysqli_num_rows($result)>0)
         {
          while($row=mysqli_fetch_array($result))
          {
         
     ?>
<div class="container-fluid">
  <div class="row">
    
    <div class="col-sm-3 ">
      
    </div>
    <div class="col-sm-6 bg-dark">

      <h1> <?php echo $row['title_name']; ?> </h1>
      <p> <?php echo $row['content']; ?> </p>
      <h3> <?php echo $row['author_name']; ?> </h3>
     </div>

    <div class="col-sm-3">
      
    </div>
  </div>
</div>
  <?php
}}
  ?>
</div>




</body>
</html> 
