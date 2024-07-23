<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="css/newheader.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Acme&family=Anton&family=Dongle:wght@300;400;700&family=Mochiy+Pop+P+One&family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Sedgwick+Ave&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>
<body>
<!---Navbar---> 
<?php
if(!isset($_SESSION['hiuser'])){
    ?>
<button class="top-btn" onclick="topFunction()" id="myBtn" title="Scroll To Top">
<i class="fa fa-arrow-circle-up" aria-hidden="true"></i></button>
  <div class="call">
    <ul>
      <li><i class="fa fa-phone" aria-hidden="true"></i>123-456-7890</li>
      <li><i class="fa fa-question-circle" aria-hidden="true"></i>help</li>
    </ul>
  </div>
  <div class="home-navbar">
    
    <li class="logo"><img src="images/logo2.png" alt="Sakhi Tourism"></li>
    <ul>
      <li><a href="home.php">Home</a></li>
      <li><a href="india.php">India</a></li>
      <li><a href="international.php">International</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="contact.php">Contact Us</a></li>
      <li><a href="userlogin.php">Login</a></li>
    </ul>
  </div>
<?php
}
else{
    ?>
    <button class="top-btn" onclick="topFunction()" id="myBtn" title="Scroll To Top">
        <i class="fa fa-arrow-circle-up" aria-hidden="true"></i></button>
    <div class="call">
        <ul>
            <li><i class="fa fa-phone" aria-hidden="true"></i>123-456-7890</li>
            <li><i class="fa fa-question-circle" aria-hidden="true"></i>help</li>
        </ul>
    </div>
    <div class="home-navbar">
    
        <li class="logo"><img src="images/logo2.png" alt="Sakhi Tourism"></li>
        <ul>
          
            <li><a href="home.php">Home</a></li>
            <li><a href="india.php">India</a></li>
            <li><a href="international.php">International</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="#">Hi ! Tourist <i class="fas fa-smile-wink"></i></a>
            <div class="user-dropdown">
                <ul>
                    <li><a href="useraccount.php">My Account</a></li>
                    <li><a href="userhistory.php">My Bookings</a></li>
                    <li><a href="usersettings.php">Settings</a></li>
                    <li><a href="userlogout.php">Logout</a></li>
                </ul>
            </div>
            </li>
        </ul>
    </div>
<?php
}
?>    
<!---Scripts--->
<script>
    //scoll to top button script
    var mybutton = document.getElementById("myBtn");
    window.onscroll = function() {
      scrollFunction()
    };
    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
</script>
</body>