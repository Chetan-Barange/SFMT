<!DOCTYPE html>
<head>
  <title>STA | CONTACT US</title>
  <link rel="stylesheet" href="css/contact.css">
  <meta name="viewport" content="widtth=device-width,initial-scale=1">
</head>
<?php
  include('header.php');
  include("configuration.php");
  if(isset($_POST['msg_sent'])){
    $u_name = $_POST['name'];
    $msg = $_POST['msg'];
    $sql = "INSERT INTO user_messages(user,msg)VALUES('$u_name','$msg')";
    $query = mysqli_query($conn, $sql);
  }
  ?>
<body>
  <section id="contact" class="contact-us">
    <div class="contact-head">
      <div class="head-content">
        <h1>Contact Us</h1>
        <P>We’d love to hear from you! Here’s how you can reach us.</P>
        <div class="contact_call">
          <h2><a href="#"><i class="fas fa-phone-volume"></i> 1800 4897 9079</a></h2>
          <h2><a href="#"><i class="fas fa-envelope"></i> Sakhitravelagency@tourism </a></h2>
        </div>
      </div>
    </div>

    <h1 class="contact-heading">Our Offices</h1>

    <div class="offices-area">

      <div class="offices">
        <div class="office-head">
          <h1>Nagpur</h1>
        </div>
        <div class="office-body">
          <ul>
            <li><i class="fas fa-user-alt"></i> Mr.Avinash Randive</li>
            <li><i class="fas fa-phone"></i> <a href="#"> +91 7666331959 </a></li>
            <li><i class="fas fa-envelope"></i> Nagpursta@tourism </li>
            <li><i class="fas fa-building"></i> 5th floor, lokmat building, dhantoli </li>
            <li><i class="fas fa-map-marker-alt"></i> <a href="#"> Get Directions</a></li>
          </ul>
          <hr class="contact-time">
          <div class="hours">
            <p>Working Hours</p>
            <h5>10:00 AM - 6:00 PM | Sunday Closed</h5>
          </div>
        </div>
      </div>

      <div class="offices">
        <div class="office-head">
          <h1>Pune</h1>
        </div>
        <div class="office-body">
          <ul>
            <li><i class="fas fa-user-alt"></i> Mr.Chetan Barange</li>
            <li><i class="fas fa-phone"></i> <a href="#"> +91 7666331959 </a></li>
            <li><i class="fas fa-envelope"></i> Punesta@tourism</li>
            <li><i class="fas fa-building"></i> 5th floor, lokmat building, dhantoli</li>
            <li><i class="fas fa-map-marker-alt"></i> <a href="#"> Get Directions </a></li>
          </ul>
          <hr class="contact-time">
          <div class="hours">
            <p>Working Hours</p>
            <h5>10:00 AM - 6:00 PM | Sunday Closed</h5>
          </div>
        </div>
      </div>

      <div class="offices">
        <div class="office-head">
          <h1>Mumbai</h1>
        </div>
        <div class="office-body">
          <ul>
            <li><i class="fas fa-user-alt"></i> Mrs. Sakhi Randive</li>
            <li><i class="fas fa-phone"></i> <a href="#"> +91 7666331959 </a></li>
            <li><i class="fas fa-envelope"></i> Mumbaista@tourism</li>
            <li><i class="fas fa-building"></i> 5th floor, lokmat building, dhantoli</li>
            <li><i class="fas fa-map-marker-alt"></i> <a href=""> Get Directions</a></li>
          </ul>
          <hr class="contact-time">
          <div class="hours">
            <p>Working Hours</p>
            <h5>10:00 AM - 6:00 PM | Sunday Closed</h5>
          </div>
        </div>
      </div>

      <div class="offices">
        <div class="office-head">
          <h1>Bangalore</h1>
        </div>
        <div class="office-body">
          <ul>
            <li><i class="fas fa-user-alt"></i> Mr.richard primault</li>
            <li><i class="fas fa-phone"></i> <a href="#"> +91 7666331959 </a></li>
            <li><i class="fas fa-envelope"></i> Bangaloresta@tourism </li>
            <li><i class="fas fa-building"></i> 5th floor, lokmat building, dhantoli </li>
            <li><i class="fas fa-map-marker-alt"></i> <a href="#"> Get Directions</a></li>
          </ul>
          <hr class="contact-time">
          <div class="hours">
            <p>Working Hours</p>
            <h5>10:00 AM - 6:00 PM | Sunday Closed</h5>
          </div>
        </div>
      </div>

      <div class="offices">
        <div class="office-head">
          <h1>Hyderabad</h1>
        </div>
        <div class="office-body">
          <ul>
            <li><i class="fas fa-user-alt"></i> Mr.richard primault</li>
            <li><i class="fas fa-phone"></i> <a href="#"> +91 7666331959 </a></li>
            <li><i class="fas fa-envelope"></i> Hyderabadsta@tourism </li>
            <li><i class="fas fa-building"></i> 5th floor, lokmat building, dhantoli </li>
            <li><i class="fas fa-map-marker-alt"></i> <a href="#"> Get Directions</a></li>
          </ul>
          <hr class="contact-time">
          <div class="hours">
            <p>Working Hours</p>
            <h5>10:00 AM - 6:00 PM | Sunday Closed</h5>
          </div>
        </div>
      </div>

      <div class="offices">
        <div class="office-head">
          <h1>Delhi</h1>
        </div>
        <div class="office-body">
          <ul>
            <li><i class="fas fa-user-alt"></i> Mr.richard primault</li>
            <li><i class="fas fa-phone"></i> <a href="#"> +91 7666331959 </a></li>
            <li><i class="fas fa-envelope"></i> Delhista@tourism </li>
            <li><i class="fas fa-building"></i> 5th floor, lokmat building, dhantoli </li>
            <li><i class="fas fa-map-marker-alt"></i> <a href="#"> Get Directions</a></li>
          </ul>
          <hr class="contact-time">
          <div class="hours">
            <p>Working Hours</p>
            <h5>10:00 AM - 6:00 PM | Sunday Closed</h5>
          </div>
        </div>
      </div>

      <div class="offices">
        <div class="office-head">
          <h1>Kolkata</h1>
        </div>
        <div class="office-body">
          <ul>
            <li><i class="fas fa-user-alt"></i> Mr.richard primault</li>
            <li><i class="fas fa-phone"></i> <a href="#"> +91 7666331959 </a></li>
            <li><i class="fas fa-envelope"></i> Kolkatasta@tourism </li>
            <li><i class="fas fa-building"></i> 5th floor, lokmat building, dhantoli </li>
            <li><i class="fas fa-map-marker-alt"></i> <a href="#"> Get Directions</a></li>
          </ul>
          <hr class="contact-time">
          <div class="hours">
            <p>Working Hours</p>
            <h5>10:00 AM - 6:00 PM | Sunday Closed</h5>
          </div>
        </div>
      </div>

      <div class="offices">
        <div class="office-head">
          <h1>Chennai</h1>
        </div>
        <div class="office-body">
          <ul>
            <li><i class="fas fa-user-alt"></i> Mr.richard primault</li>
            <li><i class="fas fa-phone"></i> <a href="#"> +91 7666331959 </a></li>
            <li><i class="fas fa-envelope"></i> Chennaista@tourism </li>
            <li><i class="fas fa-building"></i> 5th floor, lokmat building, dhantoli </li>
            <li><i class="fas fa-map-marker-alt"></i> <a href="#"> Get Directions</a></li>
          </ul>
          <hr class="contact-time">
          <div class="hours">
            <p>Working Hours</p>
            <h5>10:00 AM - 6:00 PM | Sunday Closed</h5>
          </div>
        </div>
      </div>

      <div class="offices">
        <div class="office-head">
          <h1>Ahmedabad</h1>
        </div>
        <div class="office-body">
          <ul>
            <li><i class="fas fa-user-alt"></i> Mr.richard primault</li>
            <li><i class="fas fa-phone"></i> <a href="#"> +91 7666331959 </a></li>
            <li><i class="fas fa-envelope"></i> Ahmedabadsta@tourism </li>
            <li><i class="fas fa-building"></i> 5th floor, lokmat building, dhantoli </li>
            <li><i class="fas fa-map-marker-alt"></i> <a href="#"> Get Directions</a></li>
          </ul>
          <hr class="contact-time">
          <div class="hours">
            <p>Working Hours</p>
            <h5>10:00 AM - 6:00 PM | Sunday Closed</h5>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!---contact us ends here--->

  <!-- enquiry starts here-->
  <section id="enquiry" class="enquiry">
    <div class="content">
      <h2>Have any query..? Always here to help you...!</h2>
    </div>
    <div class="contact-container">
      <div class="contact-info">

        <div class="enquiry_box">
          <div class="icon"><i class="fas fa-phone"></i> </div>
          <div class="enquiry_text">
            <h3>Phone</h3>
            <p>9866-8767-7865 </p>
          </div>
        </div>

        <div class="enquiry_box">
          <div class="icon"><i class="fas fa-envelope"></i></div>
          <div class="enquiry_text">
            <h3>Email</h3>
            <p> Sakhitravelagency@tourism</p>
          </div>
        </div>

        <div class="enquiry_box">
          <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
          <div class="enquiry_text">
            <h3>Address</h3>
            <p> tower no.245 shivaji palace, new mankapur
              nagpur</p>
          </div>
        </div>

      </div>

      <div class="contactForm">
        <form action="contact.php" method="POST">
          <h2>Contact us..</h2>
          <div class="inputBox">
            <input type="text" name="name" class="input-field" placeholder="Your Name">
          </div>
          <div class="inputBox">
            <textarea type="text" class="input-field" name="msg" placeholder="Type your message..." required></textarea>
          </div>
          <div class="inputBox-btn">
            <input class="enquiry_sub_btn" type="submit" name="msg_sent" value="Submit">
          </div>
        </form>
      </div>
    </div>

  </section>
  <?php include('footer.php'); ?>
</body>

</html>