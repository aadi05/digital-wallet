<?php

session_start();
include("../db/dbconfig.php");

if(isset($_POST['login']))
{
  $email=$_POST['email'];
  $username=$_POST['username'];
   $password=$_POST['password'];

   $p="SELECT * FROM USER WHERE username='$username' AND password='$password' AND email='$email'";
   $passwd= mysql_query($p,$conn);
   $pc= mysql_num_rows($passwd);

  if($pc>0)
  {
    $_SESSION['loginstatus']=1;
    $_SESSION['usermail']=$email;
    header('Location:useraccount.php');

  }
  else
    {
      ?>
    <script type="text/javascript">
      alert("Login Failed");
      window.location="../user/";
    </script>
    <?php
    }
    
}

?>

<!DOCTYPE html>
<html>
<head>

	  <title>PayU</title>
   <!-- BOOSTRAP CDN  -->
  	<meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="website description">
  <meta name="keywords" comtent="xyz,abc,123">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="icon" type="image/.png" href="img/logo.png">

</head>

<!-- smooth scroll code -->
<script>
$(document).ready(function(){
  // Add scrollspy to <body>
  $('body').scrollspy({target: ".navbar", offset: 50});   

   // Add smooth scrolling on all links inside the navbar
  $("#myNavbar a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    }  // End if
  });
});
</script>
<!-- smooth scroll code ends -->
<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">PayU</a>
        </div>
    <div> 
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="../">Home</a></li>
            </ul>
        </div>
</div>
</nav>

<center>
  <div class="container" style="margin-top:5%">
    <h2><b>Login for PayU</b></h2>
    <br>
    <form method="POST">

      <div class="row">
        <div class="col-sm-6 col-sm-offset-3 form-group">
          <input type="text" name="username" placeholder="Username" class="form-control" required>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-6 col-sm-offset-3 form-group">
          <input type="email" name="email" placeholder="Email" class="form-control" required>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-6 col-sm-offset-3 form-group">
          <input type="password" name="password" placeholder="Enter your password" class="form-control" required>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-6 col-sm-offset-3 form-group">
          <input type="submit" name="login" value="Login" class="btn btn-primary form-control">
        </div>
      </div>   

  </div>
</center>

<br><br><br><br><br><br><br><br><br><br><br>
<nav id="footer" style="background-color:black;color:white;padding:10px;">
  <div class="container">
    <div class="pull-left">
      <p> 2018. &copyAll Rights Reserved. Designed and coded by <a href="https://www.instagram.com/?hl=en" target="_blank">Aditya Bhogate</a></p>
    </div>
    <div class="pull-right">
      &copySRS
    </div>
  </div>

</body>
</html>


