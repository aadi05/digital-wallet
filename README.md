# digital-wallet
A bootstrap website for online digital wallet

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
  <!-- end -->
  <!-- fontawesome cdn -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <!-- end -->

  <link rel="icon" type="image/.png" href="img/logo.png">

<style type="text/css">
  body{
    position:relative;
  }
  .btn2{
    color:white;
    background:#2e6cd1;
    border-radius:11px;
    border: 2px solid white;
  }
  .jumbotron{
    color:white;
    margin-top:3.5%;
    padding:17%;
    background:url(temp/img/bank.jpg) no-repeat center center fixed;
    width:100%;
    background-size:cover;
    position:relative;
    display:table;
    height:30%;

  }
  .content{
    text-align:justify;
    font-size:110%;
    line-height:1.5;
    margin-left:5px;
    margin-right:5px;
  }
  .sizer{
    font-size:500%;
    color:#9fa092;
  }
</style>

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
<div class="jumbotron text-center container-fluid" id="home" style="margin-bottom:0px;">
  <div class="row">
    <center>
      <div class="col-sm-6 col-sm-offset-3">
        <h1 style="padding:1%;">PayU Bank</h1>
        <h3 style="padding:2%;">Your Online Bank Buddy</h3>
        <a href ="reg/"><button class="btn btn-lg btn2">Sign up</button></a>
        <a href ="user/"><button class="btn btn-lg btn2">Login</button></a>
      </div>
    </center>
  </div>
</div>

<!-- smoothscroll.txt -->
<!-- Displaying smoothscroll.txt. -->
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">PayU</a>
        </div> 
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#location">Location</a></li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">User<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="reg/">Signup</a></li>
                        <li><a href="user/">Login</a></li>
                    </ul>

            </ul>
        </div>
</div>
</nav>
<!-- section-2 -->
<div class="container" id="about">
  <div class="row">
    <h2>About Us</h2>
    <p class="content">PayU is India's largest leading payment gateway that offers comprehensive payment services for customer and merchants. We offer mobile payment solutions to over 7 million merchants and allow consumers to make seamless mobile payments from Cards, Bank Accounts and Digital Credit among others. We pioneered and are the leader of QR based mobile payments in India. With the launch of Paytm Payments Bank, we aim to bring banking and financial services to half-a-billion un-served and under-served Indians. Our investors include Softbank, SAIF Partners, Alibaba Group and Ant Financial. We strive to maintain an open culture where everyone is a hands-on contributor and feels comfortable sharing ideas and opinions. Our team spends hours, designing each new feature and obsesses about the smallest of details.</p>
    <p class="content">It is India's largest leading payment gateway that offers comprehensive payment services for customer and merchants. We offer mobile payment solutions to over 7 million merchants and allow consumers to make seamless mobile payments from Cards, Bank Accounts and Digital Credit among others. We pioneered and are the leader of QR based mobile payments in India. With the launch of Paytm Payments Bank, we aim to bring banking and financial services to half-a-billion un-served and under-served Indians. Our investors include Softbank, SAIF Partners, Alibaba Group and Ant Financial. We strive to maintain an open culture where everyone is a hands-on contributor and feels comfortable sharing ideas and opinions. Our team spends hours, designing each new feature.</p>
  </div>
</div>
<hr><br><br>
<!-- section 3 -->
<div class="container" id="services">
  <center>
  <div class="row">
    <h2> Our Services</h2>
    <div class="col-sm-4">
      <i class="fas fa-piggy-bank sizer"></i>
      <h4>Instant Loan</h4>
      <p>The SMS/e-mail alert/push notification service provided by Paytm is an additional facility provided for Your convenience and that it may be susceptible to error, omission and/or inaccuracy. In the event that You observe any error in the information provided in the alert, Paytm shall be immediately informed about the same by You and Paytm will make best possible efforts to rectify the error as early as possible. You shall not hold Paytm liable for any loss, damages, claim, expense including legal cost that may be incurred/suffered by You on account of the SMS/e-mail alert/push notification facility.</p>
    </div>
    <div class="col-sm-4">
      <i class="fas fa-money-check-alt sizer"></i>
      <h4>Instant Loan</h4>
      <p>The SMS/e-mail alert/push notification service provided by Paytm is an additional facility provided for Your convenience and that it may be susceptible to error, omission and/or inaccuracy. In the event that You observe any error in the information provided in the alert, Paytm shall be immediately informed about the same by You and Paytm will make best possible efforts to rectify the error as early as possible. You shall not hold Paytm liable for any loss, damages, claim, expense including legal cost that may be incurred/suffered by You on account of the SMS/e-mail alert/push notification facility.</p>
    </div>
    <div class="col-sm-4">
      <i class="fas fa-money-check sizer"></i>
      <h4>Instant Loan</h4>
      <p>The SMS/e-mail alert/push notification service provided by Paytm is an additional facility provided for Your convenience and that it may be susceptible to error, omission and/or inaccuracy. In the event that You observe any error in the information provided in the alert, Paytm shall be immediately informed about the same by You and Paytm will make best possible efforts to rectify the error as early as possible. You shall not hold Paytm liable for any loss, damages, claim, expense including legal cost that may be incurred/suffered by You on account of the SMS/e-mail alert/push notification facility.</p>
    </div>
  </div> 
  <div class="row">
    <div class="col-sm-4">
      <i class="fas fa-university sizer"></i>
      <h4>Instant Loan</h4>
      <p>The SMS/e-mail alert/push notification service provided by Paytm is an additional facility provided for Your convenience and that it may be susceptible to error, omission and/or inaccuracy. In the event that You observe any error in the information provided in the alert, Paytm shall be immediately informed about the same by You and Paytm will make best possible efforts to rectify the error as early as possible. You shall not hold Paytm liable for any loss, damages, claim, expense including legal cost that may be incurred/suffered by You on account of the SMS/e-mail alert/push notification facility.</p>
    </div>
    <div class="col-sm-4">
      <i class="fab fa-amazon-pay sizer"></i>
      <h4>Instant Loan</h4>
      <p>The SMS/e-mail alert/push notification service provided by Paytm is an additional facility provided for Your convenience and that it may be susceptible to error, omission and/or inaccuracy. In the event that You observe any error in the information provided in the alert, Paytm shall be immediately informed about the same by You and Paytm will make best possible efforts to rectify the error as early as possible. You shall not hold Paytm liable for any loss, damages, claim, expense including legal cost that may be incurred/suffered by You on account of the SMS/e-mail alert/push notification facility.</p>
    </div>
    <div class="col-sm-4">
      <i class="fas fa-coins sizer"></i>
      <h4>Instant Loan</h4>
      <p>The SMS/e-mail alert/push notification service provided by Paytm is an additional facility provided for Your convenience and that it may be susceptible to error, omission and/or inaccuracy. In the event that You observe any error in the information provided in the alert, Paytm shall be immediately informed about the same by You and Paytm will make best possible efforts to rectify the error as early as possible. You shall not hold Paytm liable for any loss, damages, claim, expense including legal cost that may be incurred/suffered by You on account of the SMS/e-mail alert/push notification facility.</p>
    </div>
  </div> 
  <div class="row">
    <div class="col-sm-4">
      <i class="fab fa-paypal sizer"></i>
      <h4>Instant Loan</h4>
      <p>The SMS/e-mail alert/push notification service provided by Paytm is an additional facility provided for Your convenience and that it may be susceptible to error, omission and/or inaccuracy. In the event that You observe any error in the information provided in the alert, Paytm shall be immediately informed about the same by You and Paytm will make best possible efforts to rectify the error as early as possible. You shall not hold Paytm liable for any loss, damages, claim, expense including legal cost that may be incurred/suffered by You on account of the SMS/e-mail alert/push notification facility.</p>
    </div>
    <div class="col-sm-4">
      <i class="fas fa-money-bill sizer"></i>
      <h4>Instant Loan</h4>
      <p>The SMS/e-mail alert/push notification service provided by Paytm is an additional facility provided for Your convenience and that it may be susceptible to error, omission and/or inaccuracy. In the event that You observe any error in the information provided in the alert, Paytm shall be immediately informed about the same by You and Paytm will make best possible efforts to rectify the error as early as possible. You shall not hold Paytm liable for any loss, damages, claim, expense including legal cost that may be incurred/suffered by You on account of the SMS/e-mail alert/push notification facility.</p>
    </div>
    <div class="col-sm-4">
      <i class="fas fa-hand-holding-usd sizer"></i>
      <h4>Instant Loan</h4>
      <p>The SMS/e-mail alert/push notification service provided by Paytm is an additional facility provided for Your convenience and that it may be susceptible to error, omission and/or inaccuracy. In the event that You observe any error in the information provided in the alert, Paytm shall be immediately informed about the same by You and Paytm will make best possible efforts to rectify the error as early as possible. You shall not hold Paytm liable for any loss, damages, claim, expense including legal cost that may be incurred/suffered by You on account of the SMS/e-mail alert/push notification facility.</p>
    </div>
  </div> 
</center>
</div>
<hr><br><br>

<!-- section 4 -->
<div class="container" id="location">
  <div class="row">
    <div class="col-sm-3">
      <h2>Location</h2>
      <p>Xavier Institute Of Engineering Mahim, Mumbai.</p>
    </div>
    <div class="col-sm-9">
      <!-- map here -->
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.4204535700674!2d72.83949831446735!3d19.04524288710554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c92fb093d785%3A0x38854a716f0ca945!2sXavier+Institute+of+Engineering!5e0!3m2!1sen!2sin!4v1528348646627" width="600" height="450" frameborder="0" style="border:0; width:100%;" allowfullscreen></iframe>
    </div>
  </div>
</div>    
<nav id="footer" style="background-color:black;color:white;padding:10px;">
  <div class="container">
    <div class="pull-left">
      <p> 2018. &copyAll Rights Reserved. Designed and coded by <a href="https://www.instagram.com/?hl=en" target="_blank">Aditya Bhogate</a></p>
    </div>
    <div class="pull-right">
      &copySRS
    </div>
  </div>
</nav>
</body>
</html>


