<?php
$flag=0;
include("../db/dbconfig.php");

if(isset($_POST['submit']))
{
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $contact=$_POST['contact'];
  $gender=$_POST['gender'];
  $branch=$_POST['branch'];
  $username=$_POST['username'];
  $password=$_POST['password'];
  $cpassword=$_POST['cpassword'];
  $balance=5000;

  if($password!=$cpassword)
  {
    $flag=1;
    ?>
    <script type="text/javascript">
      alert("passwords do not match!");
    </script>
    <?php
  }

  //second condition checking existence of email in database.
  $e="SELECT * FROM USER WHERE email='$email'";
  $eres=mysql_query($e,$conn);
  $ec=mysql_num_rows($eres);
  if($ec>0)
  {
    $flag=1;
    ?>
    <script type="text/javascript">
      alert("User With same email already exists");
      window.location="../reg/";
    </script>
    <?php
  }

  //third condition checking existence of phone number in database.
  $p="SELECT * FROM USER WHERE contact='$contact'";
  $pres=mysql_query($p,$conn);
  $pc=mysql_num_rows($pres);
  if($pc>0)
  {
    $flag=1;
    ?>
    <script type="text/javascript">
      alert("User With same contact number already exists");
      window.location="../reg/";
    </script>
    <?php
  }

  //fourth condition checking existence of username in database.
  $u="SELECT * FROM USER WHERE username='$username'";
  $ures=mysql_query($u,$conn);
  $uc=mysql_num_rows($ures);
  if($uc>0)
  {
    $flag=1;
    ?>
    <script type="text/javascript">
      alert("User With same username already exists");
      window.location="../reg/";
    </script>
    <?php
  }

  $iq="INSERT INTO user (fname,lname,email,contact,gender,branch,username,password,balance) VALUES('$fname','$lname','$email','$contact','$gender','$branch','$username','$password','$balance')";
  if($flag==0)
  {
    $r= mysql_query($iq,$conn);
  }
  else
  {
    alert("Failed!");

  }
  
   if($r)
  {
    ?>
    <script type="text/javascript">
      alert("Registered!");
      window.location="../";
    </script>
      <?php
  }

  else
  {
    ?>
    <script type="text/javascript">
      alert("Failed!");
      window.location="../reg/";
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
<!-- smoothscroll.txt -->
<!-- Displaying smoothscroll.txt. -->
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
    <h2><b>Sign Up</b></h2>
    <br>
    <form method="POST">

      <div class="row">
        <div class="col-sm-6 col-sm-offset-3 form-group">
          <input type="text" name="fname" placeholder="First Name" class="form-control" required>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-6 col-sm-offset-3 form-group">
          <input type="text" name="lname" placeholder="Last Name" class="form-control" required>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-6 col-sm-offset-3 form-group">
          <input type="email" name="email" placeholder="Email" class="form-control" required>
        </div>
      </div>
      
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3 form-group">
          <input type="number" name="contact" placeholder="Contact Number" class="form-control" required>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-6 col-sm-offset-3 form-group">
          <select name="gender" class="form-control">
            <option value="null" disabled selected>Gender</option>
            <option value="M">Male</option>
            <option value="F">Female</option>
          </select>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-6 col-sm-offset-3 form-group">
          <select name="branch" class="form-control">
            <option value="null" disabled selected>Choose Your Branch</option>
            <option value="1">Andheri</option>
            <option value="2">Bandra</option>
            <option value="3">Worli</option>
            <option value="4">Mahim</option>
          </select>
        </div>
      </div> 

      <div class="row">
        <div class="col-sm-6 col-sm-offset-3 form-group">
          <input type="text" name="username" placeholder="Enter new username" class="form-control" required>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-6 col-sm-offset-3 form-group">
          <input type="password" name="password" placeholder="Enter new password" class="form-control" required>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3 form-group">
          <input type="password" name="cpassword" placeholder="Confirm password" class="form-control" required>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-6 col-sm-offset-3 form-group">
          <input type="submit" value="submit" name="submit" class="btn btn-primary form-control">
        </div>
      </div>   

  </div>
</center>


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
