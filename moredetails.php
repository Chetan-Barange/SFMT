<?php
session_start();
include("header.php");
include("configuration.php");
?>
<link rel="stylesheet" href="css/more_details.css">
<title>STA | MORE DETAILS</title>
<div class="mo_de_pa_containter">
<?php
if(isset($_POST['pkg_detail'])){
    if(isset($_POST['pkg_ind_id'])){
        $pkg_ind_id = $_POST['pkg_ind_id'];
        $_SESSION['pkg_id'] = $pkg_ind_id;
        $sql22 = "SELECT * FROM india_packages WHERE pkgid='$pkg_ind_id'";
        $query22 = mysqli_query($conn, $sql22);
        foreach($query22 as $row){
            $_SESSION['pkg_location'] = $row['pkg_location'];
            $_SESSION['pkg_name'] = $row['pkg_name'];
        ?>
        <div class="more_de_main_sec">
           <div class="more_de_imgs">
             <div class="mo_de_pkg_name"><?php echo $row['pkg_name']; ?>  <div class="mo_de_pkg_dst">  (<?php echo $row['pkg_dst']; ?>)</div></div>
             <h3 class="mo_de_pkg_duration"><b><?php echo $row['pkg_duration']; ?></b> Days - <b>1</b> country | <b>2</b> cities  -----<i class="fas fa-star"></i> <b>5</b> (143 Reviews)</h3>
             <img class="more_de_img" src="admin/india_images/<?php echo $row['pkg_img']; ?>" width="50%">
           </div>
           <div class="more_de_main_sec_details">
                <img src="images/india.jpeg" alt="">
           </div>
        </div>
           <div class="mo_de_pkg_info_menu">
               <ul>
                   <li><a href="#package_includes">Package Includes</a></li>
                   <li><a href="#pkg_det_overview">Overview</a></li>
                   <li><a href="#pkg_det_tour_information">Tour Information</a></li>
               </ul>
           </div>

            <div id="package_includes" class="mo_de_pkg_det_end">
               <h1  class="mo_de_pkg_det_end_title">Package Includes</h1>
               <div class="mo_de_pkg_det_features">
                    <ul>
                        <li><i class="fas fa-hotel"> <h6>Hotels</h6> </i></li>
                        <li><i class="fas fa-plane"><h6>Flights</h6> </i></li>
                        <li><i class="fas fa-shuttle-van"><h6>Transports</h6> </i></li>
                        <li><i class="fas fa-utensils"><h6>All Meals</h6> </i></li>
                        <li><i class="fas fa-camera-alt"><h6>Sightseeing</h6> </i></li>
                        <li><i class="fab fa-cc-visa"><h6>Visa</h6> </i></li>
                    </ul>
               </div>
               <div id="pkg_det_overview" class="mo_de_pkg_det_end_pkg_info">
               <h1  class="mo_de_pkg_det_end_title">Overview</h1>
                     <?php echo $row['about_package']; ?>
               </div>
                <div id="pkg_det_tour_information" class="kg_det_tour_information">
                  <h1  class="mo_de_pkg_det_end_title">Tour Information</h1>
                    <div class="tour_info_main_flex">
                        <div class="tour_info_left_flex">
                            <ul>
                                <li>To and Fro economy class air ticket (Ex-Mumbai) with current airport taxes</li>
                                <li>Baggage Allowance as per the airline policy</li>
                                <li>Travel by comfortable A/C or non A/C small cars or Tempo Travellers or Mini Buses or big buses depending on the respective tour group size</li>
                                <li>Accommodation in comfortable hotels on twin/triple/Single sharing basis</li>
                                <li>Permits/ entrance fees of all sightseeing places which is to be visited from inside</li>
                                <li>Accompanied local guide/s services wherever require</li>
                                <li>Smiles for Miles Tour Manager Services from Day 01 Meeting point till the dropping point on last day</li>
                            </ul>
                        </div>
                        <div class="tour_info_right_flex">
                            <ul>
                                <h5>Documents Required for Travel</h5>
                                <li>ADULT: Voters ID / Passport / Aadhar Card / Driving Licence</li>
                                <li>CHILD : Passport / Aadhar Card / School ID</li>
                                <li>INFANT: Aadhar Card/ Birth certificate</li>
                                <li>ID card, ID card type and ID card number is mandatory at time of booking, kindly carry the same ID card on tour.</li>
                                <li>For NRI and Foreign National Guests alongwith Passport, Valid Indian Visa/ OCI Card/ PIO Card is mandatory.</li>
                                <li>Carry one passport size photo.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <h3 class="mo_de_pkg_price_offer"><p>Super Deal Price</p></h3>
                <h3 class="mo_de_pkg_price"><i class="fas fa-rupee-sign"></i> <?php echo $row['pkg_price']; ?> /-per person</h3>
            </div>
            
        <?php
        }
    }
    elseif(isset($_POST['pkg_intl_id'])){
        $pkg_intl_id = $_POST['pkg_intl_id'];
        $_SESSION['pkg_id'] = $pkg_intl_id;
        $sql22 = "SELECT * FROM intl_packages WHERE pkgid='$pkg_intl_id'";
        $query22 = mysqli_query($conn, $sql22);
        foreach($query22 as $row){
            $_SESSION['pkg_location'] = $row['pkg_location'];
            $_SESSION['pkg_name'] = $row['pkg_name'];
        ?>
        <div class="more_de_main_sec">
           <div class="more_de_imgs">
             <div class="mo_de_pkg_name"><?php echo $row['pkg_name']; ?>  <div class="mo_de_pkg_dst">  (<?php echo $row['pkg_dst']; ?>)</div></div>
             <h3 class="mo_de_pkg_duration"><b><?php echo $row['pkg_duration']; ?></b> Days - <b>1</b> country | <b>2</b> cities  -----<i class="fas fa-star"></i> <b>5</b> (143 Reviews)</h3>
             <img  class="more_de_img" src="admin/international_images/<?php echo $row['pkg_img']; ?>" width="50%">
           </div>
           <div class="more_de_main_sec_details">
                <img src="images/india.jpeg" alt="">
           </div>
        </div>
           <div class="mo_de_pkg_info_menu">
               <ul>
                   <li><a href="#package_includes">Package Includes</a></li>
                   <li><a href="#pkg_det_overview">Overview</a></li>
                   <li><a href="#pkg_det_tour_information">Tour Information</a></li>
               </ul>
           </div>

           <div id="package_includes" class="mo_de_pkg_det_end">
               <h1  class="mo_de_pkg_det_end_title">Package Includes</h1>
               <div class="mo_de_pkg_det_features">
                    <ul>
                        <li><i class="fas fa-hotel"> <h6>Hotels</h6> </i></li>
                        <li><i class="fas fa-plane"><h6>Flights</h6> </i></li>
                        <li><i class="fas fa-shuttle-van"><h6>Transports</h6> </i></li>
                        <li><i class="fas fa-utensils"><h6>All Meals</h6> </i></li>
                        <li><i class="fas fa-camera-alt"><h6>Sightseeing</h6> </i></li>
                        <li><i class="fab fa-cc-visa"><h6>Visa</h6> </i></li>
                    </ul>
               </div>
               <div id="pkg_det_overview" class="mo_de_pkg_det_end_pkg_info">
               <h1  class="mo_de_pkg_det_end_title">Overview</h1>
                     <?php echo $row['about_package']; ?>
               </div>
                <div id="pkg_det_tour_information" class="kg_det_tour_information">
                  <h1  class="mo_de_pkg_det_end_title">Tour Information</h1>
                    <div class="tour_info_main_flex">
                        <div class="tour_info_left_flex">
                            <ul>
                                <li>To and Fro economy class air ticket (Ex-Mumbai) with current airport taxes</li>
                                <li>Baggage Allowance as per the airline policy</li>
                                <li>Travel by comfortable A/C or non A/C small cars or Tempo Travellers or Mini Buses or big buses depending on the respective tour group size</li>
                                <li>Accommodation in comfortable hotels on twin/triple/Single sharing basis</li>
                                <li>Permits/ entrance fees of all sightseeing places which is to be visited from inside</li>
                                <li>Accompanied local guide/s services wherever require</li>
                                <li>Smiles for Miles Tour Manager Services from Day 01 Meeting point till the dropping point on last day</li>
                            </ul>
                        </div>
                        <div class="tour_info_right_flex">
                            <ul>
                                <h5>Documents Required for Travel</h5>
                                <li>ADULT: Voters ID / Passport / Aadhar Card / Driving Licence</li>
                                <li>CHILD : Passport / Aadhar Card / School ID</li>
                                <li>INFANT: Aadhar Card/ Birth certificate</li>
                                <li>ID card, ID card type and ID card number is mandatory at time of booking, kindly carry the same ID card on tour.</li>
                                <li>For NRI and Foreign National Guests alongwith Passport, Valid Indian Visa/ OCI Card/ PIO Card is mandatory.</li>
                                <li>Carry one passport size photo.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <h3 class="mo_de_pkg_price_offer"><p>Super Deal Price</p></h3>
                <h3 class="mo_de_pkg_price"><i class="fas fa-rupee-sign"></i> <?php echo $row['pkg_price']; ?> /-per person</h3>
            </div>
        <?php
        }
    }   
}
?>
<br>
<br>
<div class="book_Nw_btn"><a href="userbooking.php">Book Now</a></div>
</div>
<?php
include("footer.php");
?>