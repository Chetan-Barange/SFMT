<?php
session_start();
include('header.php');
include("configuration.php");
$query1 = "SELECT * FROM intl_packages";
$query_run1 = mysqli_query($conn, $query1);
?>
<link rel="stylesheet" href="css/packages.css">
<title>STA | INTERNATIONAL</title>

<div class="pkg_slider">
    <div class="pkg_img_slides">
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">

        <div class="pkg_slide first">
            <img src="images/womens_210322.jpg" alt=""> 
        </div>
        <div class="pkg_slide">
            <img src="images/bali 1.jpg" alt="">
        </div>
        <div class="pkg_slide">
            <img src="images/National tourism images/Goa/goa 2.jpg" alt="">
        </div>
        <div class="pkg_slide">
            <img src="images/National tourism images/Goa/goa main.jpg" alt="">
        </div>

        <div class="pkg_navigation_auto">
            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
            <div class="auto-btn3"></div>
            <div class="auto-btn4"></div>
        </div>

    </div>

    <div class="pkg_navigation_manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
    </div>
</div>

<div class="package-container">
        <?php
        if (mysqli_num_rows($query_run1) > 0) {
            while ($row = mysqli_fetch_assoc($query_run1)) {
        ?>
        <div class="package">
        <img  src="admin/international_images/<?php echo $row['pkg_img']; ?>">
            <div class="package-header">
                <h2><?php echo $row['pkg_name']; ?></h2>
                <table>
                    <tr> 
                        <td><i style="margin-right: 5px;" class="fas fa-map-marker-alt"></i>Destination</td>
                        <td class="package-content"><?php echo $row['pkg_dst']; ?></td>
                    </tr>
                    <tr> 
                        <td><i style="margin-right: 5px;" class="fas fa-bookmark"></i>Type</td>
                        <td class="package-content"><?php echo $row['pkg_type']; ?></td>
                    </tr>
                    <tr>
                        <td><i style="margin-right: 5px;" class="fas fa-calendar"></i>Duration</td>
                        <td class="package-content"><?php echo $row['pkg_duration']; ?> Days</td>
                    </tr>
                    <tr>
                        <td><i style="margin-right: 5px;" class="fas fa-list-ul"></i>Features</td>
                        <td class="package-content"><?php echo $row['pkg_features']; ?></td>
                    </tr>
                    <tr>
                        <td><i style="margin-right: 5px;" class="fas fa-rupee-sign"></i>Price</td>
                        <td class="package-content"><?php echo $row['pkg_price']; ?></td>
                    </tr>
                </table>
            </div>  <div class="vl">
                <div class="more_details_section">
                <form action="moredetails.php" method="POST">
                    <input type="hidden" name="pkg_intl_id" value="<?php echo $row['pkgid']; ?>">
                    <button type="submit" name="pkg_detail">More Details</button>
                </form>  
                <a href="contact.php #enquiry" class="more_details_enquiry">Enquire Now</a>
                </div>    </div>   
        </div>
        <?php
            }
        }
        ?>
</div>
<script type="text/javascript">
    var counter = 1;
    setInterval(function(){
        document.getElementById('radio' +counter).checked = true;
        counter++
        if(counter > 4){
            counter = 1;
        }
    }, 5000);

</script>
<?php
include("footer.php");
?>
