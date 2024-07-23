<?php
session_start();
include("header.php");
include("configuration.php");
if(!(isset($_SESSION['hiuser']))){
    header("location: userlogin.php"); 
}
if(isset($_POST['next'])){
    $pkg_amt = $_SESSION['pkg_price'];
    $_SESSION['members'] = $_POST['members'];
    $_SESSION['pkg_amt'] = ($pkg_amt * $_SESSION['members']);
    $_SESSION['date'] = date('d-m-Y', strtotime($_POST['book_date']));
}
?>
<?php
if(isset($_POST['confirm'])){
    $pkg_name = $_SESSION['pkg_name'];
    $members = $_SESSION['members'];
    $pkg_amt = $_SESSION['pkg_amt'];
    $user_status = "Pending";
    $user_transaction = "Successful";
    $user_email = $_SESSION['user_email'];
    $pkg_id = $_SESSION['pkg_id'];
    $pkg_location = $_SESSION['pkg_location'];
    $bk_date = $_SESSION['date'];
    $sql24 = "INSERT INTO user_bookings(pkgid,pkg_location,pkg_name,user_email,user_members,user_amt,user_date,user_status,user_transaction)
    VALUES('$pkg_id','$pkg_location','$pkg_name','$user_email','$members','$pkg_amt','$bk_date','$user_status','$user_transaction')";
    $query24 = mysqli_query($conn, $sql24);
    if($query24){
        $_SESSION['msg17'] = "Your Booking Has Been Confirmed";
        header("location: ccty.php");
    }
}
?>
<title>STA | PAYMENT</title>
<link rel="stylesheet" href="css/settings.css">
<link rel="stylesheet" href="css/myaccount.css">
<link rel="stylesheet" href="css/checkout.css">
<h1 class="profile-text" style="text-align: center; font-size:2.1rem; font-weight:bold;">Check Out</h1>
</div>
<div class="bar">
    <hr size="8">
</div>
<h1 class="profile-text">Confirm Details</h1>
    <table class="profile-details">
        <tr>
            <th>
                <p>Booking Date</p>
            </th>
            <th class="detail">
            <p><?php echo $_SESSION['date']; ?></p>
            </th>
        </tr>
        <tr>
            <th>
                <p>Package Name</p>
            </th>
            <th class="detail">
            <p><?php echo $_SESSION['pkg_name']; ?></p>
            </th>
        </tr>
        <tr>
            <th>
                <p>Package Location</p>
            </th>
            <th class="detail">
            <p><?php echo $_SESSION['pkg_location']; ?></p>
            </th>
        </tr>
        <tr>
            <th>
                <p>Total Members</p>
            </th>
            <th class="detail">
            <p><?php echo $_SESSION['members']; ?></p>
            </th>
        </tr>
        <tr>
            <th>
                <p>Total Amount To Pay</p>
            </th>
            <th class="detail">
            <p>Rs. <?php echo $_SESSION['pkg_amt']; ?></p>
            </th>
        </tr>
    </table> 
<div class="bar1">
    <hr size="8">
</div>
<h1 class="profile-text" style="text-align: center;"><i><b>Payment Gateway</b></i></h1>
<div class="bar1">
    <hr size="8">
</div>
<div class="checkout">
    <i class="fa fa-cc-mastercard" aria-hidden="true"></i>
    <i class="fa fa-cc-visa" aria-hidden="true"></i>
    <i class="fa fa-cc-paypal" aria-hidden="true"></i>
    <i class="fa fa-cc-discover" aria-hidden="true"></i>
</div>
<form class="setting-form" action="usercheckout.php" method="POST">
    <input type="text" maxlength="16" minlength="16" required placeholder="16 Digit Card No."><br>
    <input type="password" maxlength="3" minlength="3" required placeholder="CVV"><br>
    <input type="password" maxlength="4" minlength="4" required placeholder="Expiry (mmyy)"><br>
    <button type="submit" name="confirm">Confirm</button>
</form>

<?php
include("footer.php");
?>