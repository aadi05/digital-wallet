<?php
  session_start();
  include("../db/dbconfig.php");
  $a=$_SESSION['loginstatus'];
  $e=$_SESSION['usermail'];

  if($a==1)
  {

  }
  else
  {
    session_destroy();
    header('Location:../user/');
  }

  $query="SELECT * FROM user WHERE email='$e'";
  $iquery=mysql_query($query,$conn);
  $result=mysql_fetch_assoc($iquery);
  $balance=$result['balance'];
  $fname=$result['fname'];
  $lname=$result['lname'];
  $contact=$result['contact'];
  $username=$result['username'];

  if(isset($_POST['update']))
  {
    $n_fname=$_POST['fname'];
    $n_lname=$_POST['lname'];
    $n_username=$_POST['username'];
    $n_password=$_POST['password'];
    $n_cpassword=$_POST['cpassword'];

    $u_query="UPDATE user SET fname='$n_fname', lname='$n_lname',username='$n_username', password='$n_password' WHERE email='$e'";
    $e_query=mysql_query($u_query,$conn);

    if($e_query)
    {
      ?>
      <script type="text/javascript">
        alert("Updated Successfully");
      </script>
      <?php
    }
    else
    {
      ?>
      <script type="text/javascript">
        alert("Update Failed");
      </script>
      <?php

    }

  }

  if(isset($_POST['submit']))
  {
    $r_contact=$_POST['contact'];
    $r_amount=$_POST['amount'];

    $check="SELECT * FROM user WHERE contact='$r_contact'";
    $exe_check=mysql_query($check,$conn);
    $c_check=mysql_num_rows($exe_check);

    if($r_amount<0 )
    {
      ?>
      <script type="text/javascript">
        alert("Enter proper amount");
        window.location="../user/useraccount.php";
      </script>
      <?php
    }
    elseif($balance<$r_amount)
    {
      ?>
      <script type="text/javascript">
        alert("Balance Insufficient");
        window.location="../user/useraccount.php";
      </script>
      <?php
    }
    elseif($r_contact==$contact)
    {
      ?>
      <script type="text/javascript">
        alert("Enter correct contact number");
        window.location="../user/useraccount.php";
      </script>
      <?php
    }
    elseif($c_check==0)
    {
      ?>
      <script type="text/javascript">
        alert("Enter valid contact number");
        window.location="../user/useraccount.php";
      </script>
      <?php
    }
    else
    {
          $r_query="SELECT * FROM user WHERE contact='$r_contact'";
    $r_exe=mysql_query($r_query,$conn);
    $r_result=mysql_fetch_assoc($r_exe);
    $r_balance=$r_result['balance'];

    //adding balance to the receiver balance.
    $r_bal=$r_balance+$r_amount;

    //updating samne wale ka balance.
    $nn="UPDATE user SET balance='$r_bal' WHERE contact='$r_contact'";
    $nr=mysql_query($nn,$conn);

    if($nr)
    {
      ?>
      <script type="text/javascript">
        alert("Payment Successfull!");
      </script>
      <?php
    }
    else
    {
      ?>
      <script type="text/javascript">
        alert("Payment Failed!");
      </script>
      <?php
    }
    //updating or reducing user's balance.
    $my_balance=$balance-$r_amount;

    //updating my own balance in db.
    $nn1="UPDATE user SET balance='$my_balance' WHERE email='$e'";
    $nr1=mysql_query($nn1,$conn);

    if($nr1)
    {
      ?>
      <script type="text/javascript">
        alert("Deducted Successfull!");
        window.location="../user/useraccount.php";
      </script>
      <?php
    }
    else
    {
      ?>
      <script type="text/javascript">
        alert("Deduction Failed!");
      </script>
      <?php
    }

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
        <a class="navbar-brand" href="#">Welcome, <?php echo $fname ?></a>
        </div>
    <div> 
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
</div>
</nav>
<center>
<h1><b>Your Account</b></h1></center>
<div class="container">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#balance">Balance</a></li>
    <li><a data-toggle="tab" href="#pay">Pay</a></li>
    <li><a data-toggle="tab" href="#update">Account Settings</a></li>
    <li><a data-toggle="tab" href="#feedback">Feedback</a></li>
  </ul>

  <div class="tab-content">
    <div id="balance" class="tab-pane fade in active">
      <h2>Your Balance</h2>
      <h3>Rs.<?php echo $balance ?></h3> 
    </div>
    <div id="pay" class="tab-pane fade">
      <h3>New Transaction</h3>

      <form method="POST">
        <div class="row">
          <div class="col-sm-12 form-group">
            <input type="number" name="contact" class="form-control" placeholder="Contact Number" required>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 form-group">
            <input type="number" name="amount" class="form-control" placeholder="Amount" required>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 form-group">
            <input type="submit" name="submit" value="Pay" class="form-control btn btn-primary">
          </div>
        </div>
      </form>
    </div>

    <div id="update" class="tab-pane fade">
      <h3>Update Your Information</h3>
      <form method="POST">
        <div class="row">
          <div class="col-sm-12 form-group">
            <input type="text" name="fname" value="<?php echo $fname?>" class="form-control" placeholder="Enter new name" required>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 form-group">
            <input type="text" name="lname" value="<?php echo $lname?>" class="form-control" placeholder="Enter new last name" required>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 form-group">
            <input type="text" name="username" class="form-control" placeholder="Enter new username" required>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 form-group">
            <input type="password" name="password" class="form-control" placeholder="Enter new password" required>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 form-group">
            <input type="password" name="cpassword" class="form-control" placeholder="Confirm password" required>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 form-group">
            <input type="submit" name="update" value="Update" class="form-control btn btn-primary">
          </div>
        </div>
      </form>


    </div>
    <div id="feedback" class="tab-pane fade">
      <h3>Queries and Feedback</h3>
      <form method="POST">
        <div class="row">
          <div class="col-sm-12 form-group">
            <textarea name="feedback" class="form-control" placeholder="YOUR FEEDBACK HERE" style="resize:vertical;"></textarea>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 form-group">
            <input type="submit" name="feedback_btn" value="Submit" class="form-control btn btn-danger">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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


