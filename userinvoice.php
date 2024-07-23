<?php
session_start();
include("header.php");
include("configuration.php");
if(!(isset($_SESSION['hiuser']))){
    header("location: home.php");
}
?>
<link rel="stylesheet" href="css/settings.css">
<link rel="stylesheet" href="css/myaccount.css">
<title>STA | BOOKING INVOICE</title>
<style>
button{
    font-family: 'Poppins', sans-serif;
    font-size: 0.8rem;
    font-weight: bold;
    border: none;
    background-color: black;
    color: white;
    width: fit-content;
    padding: 5px 20px 5px 20px;
    margin: 1% 0% 2% 2%;
    border-radius: 30px;
    cursor: pointer;
}
.active:hover{
    color: white;
    background-color: #24262b;
}
.profile-details th{
    color: black;
}
.data{
    font-weight: 200;
}
</style>
<h1 class="profile-text" style="text-align: center; font-size:2.1rem; font-weight:bold;">Booking Invoice</h1>
</div>
<div class="bar">
    <hr size="8">
</div>
<?php
if(isset($_POST['history_check'])){
    $inv_id = $_POST['history_id'];
    $sql26 = "SELECT * FROM user_bookings WHERE bkid='$inv_id'";
    $query26 =mysqli_query($conn, $sql26);
    if($query26){
        $inv_details = mysqli_fetch_assoc($query26);
    }
}
?>
    <table class="profile-details">
    <tr>
        <th>Departure Date</th>
        <th class="data"><?php echo $inv_details['user_date']; ?></th>
    </tr>
    <tr>
        <th>Booking ID</th>
        <th class="data">12<?php echo $inv_details['bkid']; ?></th>
    </tr>
    <tr>
        <th>Total Members</th>
        <th class="data"><?php echo $inv_details['user_members']; ?></th>
    </tr>
    <tr>
        <th>Package Name</th>
        <th class="data"><?php echo $inv_details['pkg_name']; ?></th>
    </tr>
    <tr>
        <th>Package Location</th>
        <th class="data"><?php echo $inv_details['pkg_location']; ?></th>
    </tr>
    <tr>
        <th>Package ID</th>
        <th class="data"><?php echo $inv_details['pkgid']; ?></th>
    </tr>
    <tr>
        <th>Package Amount</th>
        <th class="data">Rs. <?php echo $inv_details['user_amt']; ?></th>
    </tr>
    <tr>
        <th>Package Status</th>
        <th class="data"><?php echo $inv_details['user_status']; ?></th>
    </tr>
    <tr>
        <th>Transaction</th>
        <th class="data"><?php echo $inv_details['user_transaction']; ?></th>
    </tr>
    </table>
</div>
<form action="userhistory.php" method="POST">
    <input type="hidden" name="bk_cancel_id" value="<?php echo $inv_details['bkid']; ?>">
    <?php
    $today=date("d-m-Y");
    $depart_date=$inv_details['user_date'];
    if($inv_details['user_status'] == "Cancelled" or $today>=$depart_date){
        ?>
    <button type="submit" name="bk_cancel" disabled>Cancel Booking</button>
    <?php    
    }else{
        ?>
    <button class="active" type="submit" name="bk_cancel" >Cancel Booking</button>
        <?php
    }
    ?>
</form>
<?php
include("footer.php");
?>