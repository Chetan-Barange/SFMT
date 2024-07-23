<?php
session_start();
include("header.php");
include("configuration.php");
if(!(isset($_SESSION['hiuser']))){
    header("location: userlogin.php"); 
}
$pkg_id = $_SESSION['pkg_id'];
$india="India";
if(isset($_SESSION['pkg_location'])){
    if($_SESSION['pkg_location']==$india)
    {
        $sql24 = "SELECT * FROM india_packages WHERE pkgid='$pkg_id'";
        $query24 = mysqli_query($conn, $sql24);
        if($query24){
            $pkg_row = mysqli_fetch_assoc($query24);
            $_SESSION['pkg_price'] = $pkg_row['pkg_price'];
        }
    }
    else{
        $sql24 = "SELECT * FROM intl_packages WHERE pkgid='$pkg_id'";
        $query24 = mysqli_query($conn, $sql24);
        if($query24){
            $pkg_row = mysqli_fetch_assoc($query24);
            $_SESSION['pkg_price'] = $pkg_row['pkg_price'];
        }
    }
}
?>
<link rel="stylesheet" href="css/settings.css">
<link rel="stylesheet" href="css/myaccount.css">
<title>STA | BOOKING</title>
<h1 class="profile-text" style="text-align: center; font-size:1.5rem; font-weight:500;">Booking Details</h1>
<div class="bar">
    <hr size="8">
</div>
<?php
$user_id = $_SESSION['user_details'];
$sql23 = "SELECT * FROM user_data WHERE id='$user_id'";
$query23 = mysqli_query($conn, $sql23);
if($query23)
{
    $row = mysqli_fetch_assoc($query23);
    ?>
<form class="setting-form" action="usercheckout.php" method="POST">
    <label><b>Departure Date</b></label><br>
    <input class="detail-input" style="width: 15%; letter-spacing: 0px;" type="date" name="book_date" required placeholder="Select Date"><br>
    <label><b>Departure From</b></label><br>
    <label><?php echo $row['user_address']; ?></label><br>
    <label><b>Select Members</b></label><br>
    <input type="number" name="members" min=1 max=20 placeholder="0" required><br>
    <button type="submit" name="next">Next</button>
    <?php
}
?>
</form>
<?php
include("footer.php");
?>