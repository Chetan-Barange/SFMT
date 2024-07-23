<?php
session_start();
include('header.php');
include("configuration.php");
?>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">s
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.3.7/css/swiper.css">
</head>
<link rel="stylesheet" href="css/popular.css">
<title>STA | HOME</title>
<div class="slideshow-container">
  <div class="mySlides">
    <video class="video-slide active" src="videos/vid2.mp4" autoplay muted loop></video>
    <div class="text">
      <h1>Tourism is Worthwhile</h1>
      <p>Make Your Holidays Memorable with Sakhi travel Agency </p>
                <a href="#features" class="more-link">Discover More</a>
    </div>
  </div>
  <div class="mySlides">
    <video class="video-slide active" src="videos/vid1.mp4" autoplay muted loop></video>
    <div class="text">
    <h1>Tourism is Worthwhile</h1>
    <p>Make Your Holidays Memorable with Sakhi travel Agency </p>
                <a href="#features" class="more-link">Discover More</a>
    </div>
  </div>
  <div class="mySlides">
    <video class="video-slide active" src="videos/vid-3.mp4" autoplay muted loop></video>
    <div class="text">
    <h1>Tourism is Worthwhile</h1>
    <p>Make Your Holidays Memorable with Sakhi travel Agency </p>
                <a href="#features" class="more-link">Discover More</a>
    </div>
  </div>
  <div class="mySlides">
    <video class="video-slide active" src="videos/vid-1.mp4" autoplay muted loop></video>
    <div class="text">
    <h1>Tourism is Worthwhile</h1>
    <p>Make Your Holidays Memorable with Sakhi travel Agency </p>
                <a href="#features" class="more-link">Discover More</a>
    </div>
  </div>
  <div class="mySlides">
    <video class="video-slide active" src="videos/vid-5.mp4" autoplay muted loop></video>
    <div class="text">
    <h1>Tourism is Worthwhile</h1>
    <p>Make Your Holidays Memorable with Sakhi travel Agency </p>
                <a href="#features" class="more-link">Discover More</a>
    </div>
  </div>
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>
<div class="dot-btn" style="text-align: center;">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>
</div>
<div class="cards-body">
        <div class="cards">
           <i class="fa fa-inr" aria-hidden="true"></i>
             <ul>
               <li>20% OFF On Your</li>
               <li>1st Ever Booking</li>
             </ul>
        </div>
        <div class="cards">
             <i class="fas fa-hotel"></i>
              <ul>
                <li>Best Deals On Hotels</li>
               <li>Across The World</li>
             </ul>
        </div>
        <div class="cards">
              <i class="fa fa-plane"></i>
               <ul>
                <li>Safe & Secure</li>
                <li>World Travel</li>
              </ul>
        </div>
        <div class="cards">
           <i class="fa fa-ban" aria-hidden="true"></i>
            <ul>
              <li>Cancellation At</li>
              <li>Zero Charges</li>
            </ul>
        </div>
    </div>

<!--popular starts here-->
<section id="features">
        <div class="title-text">
            <p>Popular</p>
            <h1>All Time Popular</h1>
        </div>
        <div class="feature">
                 <h1 class="popular-title">Most Visited In India *</h1>
            </div>
        <div class="feature-box">
            <div class="specials">
               <img src="images/National tourism images/mumbai/mumbai2.jpg">
               <div class="overlay"></div>
               <div class="description">
                    <h3>MUMBAI</h3>
                    <hr class="underline">
                    <p>Mumbai is also known as Mayanagri or The city of Dreams.
                        It is a capital of Maharashtra and other financial capital of India.
                    </p>
                    <div class="pop_explore">
                      <a href="india.php">Explore More</a>
                    </div>
               </div>
            </div>
            <div class="specials">
                    <img src="images/National tourism images/sikkim/sikkim main.jpg">
                    <div class="overlay"></div>
                <div class="description">
                    <h3>SIKKIM</h3>
                    <hr class="underline">
                    <p>Sikkim is such a scenic state of the region. Located in the
                        foothills of the Himalaya. the beauty is absolutely breathtaking. 
                    </p>
                    <div class="pop_explore">
                      <a href="india.php">Explore More</a>
                    </div>
               </div>
            </div>

            <div class="specials">
            <img src="images/National tourism images/chowmahalla palace/chowmahalla palace main.jpg">
                    <div class="overlay"></div>
                <div class="description">
                    <h3>CHOWMAHALLA PALACE</h3>
                    <hr class="underline">
                    <p>This palace is popularly known as the Nizam's resided
                      during their regin over the region, The city of pears Hyderabad is not 
                      just fammous for its biryani and charminar but also its history.
                      This place is known for magnificient architecture. 
                    </p>
                    <div class="pop_explore">
                      <a href="india.php">Explore More</a>
                    </div>
               </div>
            </div>


            <div class="specials">
            <img src="images/National tourism images/kullu manali/kullu manali 2.jpg">
                    <div class="overlay"></div>
                <div class="description">
                    <h3>KULLU MANALI</h3>
                    <hr class="underline">
                    <p>Kullu Manali is famous for being Indian's Honeymoon capital.
                        A gift of the Himalayas to the World.
                    </p>
                    <div class="pop_explore">
                      <a href="india.php">Explore More</a>
                    </div>
               </div>
            </div>
            
            <div class="specials">
                    <img src="images/National tourism images/Goa/goa 1.jpg">
                    <div class="overlay"></div>
                 <div class="description">
                    <h3>GOA</h3>
                    <hr class="underline">
                    <p>Goa is also known as the pearl of the orient.
                        It is famous for its Beaches and Places of worship.
                    </p>
                    <div class="pop_explore">
                      <a href="india.php">Explore More</a>
                    </div>
                 </div>
            </div>
            <div class="specials">
                   <img src="images/National tourism images/leh ladakh/leh ladakh 3.jpg">
                <div class="overlay"></div>
                <div class="description">
                    <h3>LEH LADAKH</h3>
                    <hr class="underline">
                    <p>A ride to the top of the world , a ride of dreams , a Leh Ladakh.
                        It also known as little Tibet or the land of famous.
                    </p>
                    <div class="pop_explore">
                      <a href="india.php">Explore More</a>
                    </div>
                </div>
            </div>
    </div>

<!--international starts-->
    <div class="feature">
                 <h1 class="popular-title">Most Visited Outside The India *</h1>
            </div>
        <div class="feature-box">
            <div class="specials">
               <img src="images/international tourism images/dubai/dubai main.jpg">
               <div class="overlay"></div>
               <div class="description">
                    <h3>DUBAI</h3>
                    <hr class="underline">
                    <p>Dubai is famous for sightseeing attraction such as Burj Khalifa
                        and shopping malls that come complete with Aquarium and indoor 
                        Ski slopes.
                    </p>
                    <div class="pop_explore">
                      <a href="international.php">Explore More</a>
                    </div>
               </div>
            </div>
            <div class="specials">
            <img src="images/international tourism images/japan/japan main.jpg">
                    <div class="overlay"></div>
                <div class="description">
                    <h3>JAPAN</h3>
                    <hr class="underline">
                    <p>Japan is known Worldwide for its traditional arts including tea ceremonies, 
                        calligraphy and flower arranging.
                    </p>
                    <div class="pop_explore">
                      <a href="international.php">Explore More</a>
                    </div>
               </div>
            </div>
            <div class="specials">
            <img src="images/international tourism images/bali/ulun danu beratan bali main.jpg">
                    <div class="overlay"></div>
                <div class="description">
                    <h3>BALI</h3>
                    <hr class="underline">
                    <p>Bali is known as the Land of the Gods. It is mesmerising Indonesian island 
                        which is world famous for its beautiful places rich culture , history , art and craft.
                    </p>
                    <div class="pop_explore">
                      <a href="international.php">Explore More</a>
                    </div>
               </div>
            </div>
            <div class="specials">
            <img src="images/international tourism images/maldives/maldives main.jpg">
                    <div class="overlay"></div>
                <div class="description">
                    <h3>MALDIVES</h3>
                    <hr class="underline">
                    <p>Maldives are known for their natural environment including blue ob_clean,
                        white beaches and own air and also its famous for sports and other adventure activities.
                    </p>
                    <div class="pop_explore">
                      <a href="international.php">Explore More</a>
                    </div>
               </div>
            </div>
            <div class="specials">
            <img src="images/international tourism images/sydney/sydney main.jpg">
                    <div class="overlay"></div>
                 <div class="description">
                    <h3>SYDNEY</h3>
                    <hr class="underline">
                    <p>Best known for its Harbour Front Sydney Opera House with a distinctive
                        sail like design. It has more than 100 beautiful beaches.
                    </p>
                    <div class="pop_explore">
                      <a href="international.php">Explore More</a>
                    </div>
                 </div>
            </div>
            <div class="specials">
            <img src="images/international tourism images/new zealand/new zealand main.jpg">
                <div class="overlay"></div>
                <div class="description">
                    <h3>NEW ZEALAND</h3>
                    <hr class="underline">
                    <p>It is famous for national rugby team, its indigenous Maori culture and its 
                        picturesque landscape. It is also known as the
                        land of the long white cloud , In new zealand more ships than people.
                    </p>
                    <div class="pop_explore">
                      <a href="international.php">Explore More</a>
                    </div>
                </div>
            </div>
      </div>
</section>
<!--- popular ends here --->
<!-- review section starts  -->
<section id="review-block"> 
    <div class="review-body">
        <div class="review-container">
        <div class="review-heading"><h1 class="review-title">What people says ....</h1></div>
            <div id="slider" class="owl-carousel">
                <div class="review-area">
                    <div class="review">
                       <div class="img-area-review"><img src="images/elon musk.jpeg" alt=""></div>
                       <h3>Elon Musk</h3>
                       <div class="stars">
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       </div>
                       <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum laboriosam consequuntur vero quidem magnam error laborum similique exercitationem ab eos unde voluptatibus voluptatum in consectetur tenetur, ea, distinctio eligendi vel.</p>
                    </div>
                </div>

                <div class="review-area">
                    <div class="review">
                    <div class="img-area-review"><img src="images/pic2.png" alt=""></div>
                       <h3>Elon Musk</h3>
                       <div class="stars">
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="far fa-star"></i>
                       </div>
                       <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum laboriosam consequuntur vero quidem magnam error laborum similique exercitationem ab eos unde voluptatibus voluptatum in consectetur tenetur, ea, distinctio eligendi vel.</p>
                    </div>
                </div>

                <div class="review-area">
                    <div class="review">
                    <div class="img-area-review"><img src="images/pic3.png" alt=""></div>
                       <h3>Elon Musk</h3>
                       <div class="stars">
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       </div>
                       <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum laboriosam consequuntur vero quidem magnam error laborum similique exercitationem ab eos unde voluptatibus voluptatum in consectetur tenetur, ea, distinctio eligendi vel.</p>
                    </div>
                </div>

                <div class="review-area">
                    <div class="review">
                    <div class="img-area-review"><img src="images/pic4.png" alt=""></div>
                       <h3>Elon Musk</h3>
                       <div class="stars">
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="far fa-star"></i>
                       </div>
                       <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum laboriosam consequuntur vero quidem magnam error laborum similique exercitationem ab eos unde voluptatibus voluptatum in consectetur tenetur, ea, distinctio eligendi vel.</p>
                    </div>
                </div>

                <div class="review-area">
                    <div class="review">
                    <div class="img-area-review"><img src="images/pic1.png" alt=""></div>
                       <h3>Elon Musk</h3>
                       <div class="stars">
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="far fa-star"></i>
                       </div>
                       <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum laboriosam consequuntur vero quidem magnam error laborum similique exercitationem ab eos unde voluptatibus voluptatum in consectetur tenetur, ea, distinctio eligendi vel.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </section>  
 <!---review section ends -->

 <!---live counting section starts --> 
<?php
$sql6 = "SELECT id FROM user_data ORDER BY id";
$query6 = mysqli_query($conn, $sql6);
$regrow = mysqli_num_rows($query6);
$sql7 = "SELECT bkid FROM user_bookings ORDER BY bkid";
$query7 = mysqli_query($conn, $sql7);
$ttlbkrow = mysqli_num_rows($query7);
?>
 <div class="live-count-area">
    <div class="live-count-card">
        <div class="live-count-text">
            <i class="fa fa-users" aria-hidden="true"></i>
            <div class="live-count-name">
               <h3>Users</h3>
               <h3>Registered</h3>
            </div>
        </div>
        <div class="live-count">
        <h2><?php echo $regrow; ?></h2>
        </div>
    </div>

    <div class="live-count-card">
        <div class="live-count-text">
            <i class="fa fa-book" aria-hidden="true"></i>
            <div class="live-count-name">
              <h3>Total</h3>
              <h3>Bookings</h3>
            </div>  
        </div>
        <div class="live-count">
          <h2><?php echo $ttlbkrow; ?></h2>
        </div>
    </div>

    <div class="live-count-card">
        <div class="live-count-text">
            <i class="fa fa-briefcase" aria-hidden="true"></i>
            <div class="live-count-name">
              <h3>Total</h3>
              <h3>Packages</h3>
            </div>  
        </div>
        <div class="live-count">
        <?php
            $totalquery1 = "SELECT pkgid FROM india_packages ORDER BY pkgid";
            $totalquery2 = "SELECT pkgid FROM intl_packages ORDER BY pkgid";
            $totalqueryrun1 = mysqli_query($conn, $totalquery1);
            $totalqueryrun2 = mysqli_query($conn, $totalquery2);
            $totalqueryrow1 = mysqli_num_rows($totalqueryrun1);
            $totalqueryrow2 = mysqli_num_rows($totalqueryrun2);
            $totalpackages = $totalqueryrow1 + $totalqueryrow2;
            echo '<h2>'.$totalpackages.'</h2>';
            ?>
        </div>
    </div>

    <div class="live-count-card">
        <div class="live-count-text">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <div class="live-count-name">
              <h3>Inbox</h3>
              <h3>Messages</h3>
            </div>  
        </div>
        <div class="live-count">
        <?php
            $totalquery3 = "SELECT id FROM user_messages ORDER BY id";
            $totalqueryrun3 = mysqli_query($conn, $totalquery3);
            $totalqueryrow3 = mysqli_num_rows($totalqueryrun3);
            echo '<h2>'.$totalqueryrow3.'</h2>';
            ?>
        </div>
    </div>
</div>
 <!---live counting ends --> 

<script>
  var slideIndex = 0;
  showSlides();
  var slides, dots;

  function showSlides() {
    var i;
    slides = document.getElementsByClassName("mySlides");
    dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
      slideIndex = 1
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    setTimeout(showSlides, 5000); // Change image every 8 seconds
  }

  function plusSlides(position) {
    slideIndex += position;
    if (slideIndex > slides.length) {
      slideIndex = 1
    } else if (slideIndex < 1) {
      slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
  }

  function currentSlide(index) {
    if (index > slides.length) {
      index = 1
    } else if (index < 1) {
      index = slides.length
    }
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[index - 1].style.display = "block";
    dots[index - 1].className += " active";
  }
</script>
<!--review script starts--> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> 
     <script>
        $('#slider').owlCarousel({
        loop:true,
        margin:15,
        nav:false,
        autoplay:true,
        responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        },
      }
    })
     </script>
<!--review script ends -->

<?php
include("footer.php");
?>
