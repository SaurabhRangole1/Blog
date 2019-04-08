<!DOCTYPE html>
<html>
 <head>
	<title>Login</title>

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

.box{
  text-align: center;
  padding: 50px;
}


     /*Submit button*/

        .button {
          background-color: #333; /* blackish grey */
          border: none;
          color: white;
          padding: 15px 32px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 4px 2px;
          cursor: pointer;
         -webkit-transition-duration: 0.4s; /* Safari */
          transition-duration: 0.4s;
         }

        .button1 {
         box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
         }

</style>
    
 </head>
	
  <body>
    <!--Navigation Bar-->
	 <div class="navbar">
    <a class="active" href="homepage.php"><i class="fa fa-fw fa-home"></i> Home</a> 
    <!--<a href="#"><i class="fa fa-fw fa-search"></i> Search</a> -->
    <a href="contactblog.php"><i class="fa fa-fw fa-envelope"></i> contact</a> 
    <a href="loginBlogPage"><i class="fa fa-fw fa-user"></i> Login</a>
    <a href="aboutMeblog.php"><i class="fa fa-fw fa-user"></i> About Me</a>
  </div>


  <div class="container-fluid">
    <div class="row">
    
      <div class="col-sm-3 ">
      
      </div>
        <div class="col-sm-6 bg-dark">
         <div class= "box">
         <form action="filldataConnection.php" method="post">
          <h3> Title:</h3><input type="text" name="titlename" class="right" required><br><br><br><br>
          <h3> Content:</h3><input type="text" name="content" class="right" require><br><br><br><br>
          <h3> Author name:</h3> <input type="text" name="authorname"class="right" require><br><br><br><br>
          
           <input type="submit" class="button button1">
         </form>
       </div>

        <div class="col-sm-3">
      
    </div>
  </div>
</div>

  

   </body>
</html>