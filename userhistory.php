<?php
session_start();
include("header.php");
include("configuration.php");
if(!(isset($_SESSION['hiuser']))){
    header("location: home.php");
}
if(isset($_POST['bk_cancel'])){
    $cancel_bk = "Cancelled";
    $cancel = $_POST['bk_cancel_id'];
    $today =date("d-m-Y");
    $sql27 = "SELECT * FROM user_bookings WHERE bkid='$cancel'";
    $query27 = mysqli_query($conn, $sql27);
    $bk_row = mysqli_fetch_assoc($query27);
    $bk_date = $bk_row['user_date'];
    if($today >= $bk_date){
        $_SESSION['msg19'] = "Booking can not be cancelled as per terms and conditions";
    }
    else{
        $sql28 = "UPDATE user_bookings SET user_status='$cancel_bk' WHERE bkid='$cancel'";
        $query28 = mysqli_query($conn, $sql28);
        if($query28){
            $_SESSION['msg19'] = "Booking Cancelled";
        }
    }
}
?>
<link rel="stylesheet" href="css/settings.css">
<link rel="stylesheet" href="css/myaccount.css">
<title>STA | MY BOOKINGS</title>
<style>
button{
    font-family: 'Poppins', sans-serif;
    font-size: 0.9rem;
    font-weight: bold;
    border: none;
    background-color: rgb(170, 168, 168);
    width: fit-content;
    padding: 5px 20px 5px 20px;
    margin: 3% 0% 0% 2%;
    border-radius: 30px;
    cursor: pointer;
}
button:hover{
    color: white;
    background-color: #24262b;
}
</style>
<h1 class="profile-text" style="text-align: center; font-size:2.1rem; font-weight:bold;">My Bookings</h1>
</div>
<div class="bar">
    <hr size="8">
</div>
<?php
if(isset($_SESSION['user_email'])){
    $email = $_SESSION['user_email'];
    $sql25 = "SELECT * FROM user_bookings WHERE user_email='$email'";
    $query25 = mysqli_query($conn, $sql25);
    if(mysqli_num_rows($query25) > 0){
        while($row = mysqli_fetch_assoc($query25))
        {
            ?>
    <table class="profile-details">
        <tr>
            <th>Booking Date</th>
            <th class="detail"><?php echo date('d-m-Y h:i:a', strtotime($row['date'])); ?></th>
        </tr>
        <tr>
            <th>Package Name</th>
            <th class="detail"><?php echo $row['pkg_name']; ?></th>
        </tr>
        <tr>
            <th>Package Location</th>
            <th class="detail"><?php echo $row['pkg_location']; ?></th>
        </tr>
        <tr>
            <th>Package Status</th>
            <th class="detail"><?php echo $row['user_status']; ?></th>
        </tr>
        <tr>
            <th>
            <form action="userinvoice.php" method="POST">
            <input type="hidden" name="history_id" value="<?php echo $row['bkid']; ?>">
            <button type="submit" name="history_check">View Invoice</button>
            </form>
            </th>
        </tr>
        </table>
    </div>
    <div class="bar1">
    <hr size="8">
    </div>
        <?php    
        }    
    }
}
?>
<?php
include("footer.php");
?>