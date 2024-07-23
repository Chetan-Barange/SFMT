<?php
session_start();
include("header.php");
include("configuration.php");
if (!(isset($_SESSION['hiuser']))) {
    header("location: home.php");
}
?>
<link rel="stylesheet" href="css/myaccount.css">
<title>STA | MY ACCOUNT</title>
<h1 class="profile-text" style="text-align:center; font-size:2.1rem;font-weight:bold;">My Account</h1>
<div class="bar">
    <hr size="8">
</div>
<h1 class="profile-text">My Profile</h1>
<div class="profile">
    <i class="fa fa-user" aria-hidden="true"></i>
    <div class="vl"></div>
    <table class="profile-details">
        <?php
        if (isset($_SESSION['user_details'])) {
            $user_details = $_SESSION['user_details'];
            $sql8 = "SELECT * FROM user_data WHERE id='$user_details'";
            $query8 = mysqli_query($conn, $sql8);
            if ($query8) {
                $user_row = mysqli_fetch_assoc($query8);
        ?>
        <tr>
            <th>Name</th>
            <th class="detail"><?php echo $user_row['user_fullname']; ?></th>
        </tr>
        <tr>
            <th>Email Address</th>
            <th class="detail"><?php echo $user_row['user_email']; ?><i class="fas fa-badge-check" style="color:chartreuse;" ></i></th>
        </tr>
        <tr>
            <th>Mobile Number</th>
            <th class="detail"><?php echo $user_row['user_mobile']; ?><i class="fas fa-badge-check"  style="color:chartreuse;"></i></th>
        </tr>
    </table>  
</div>
<?php
            }
        }
?>
<h1 class="profile-text">Personal Details</h1>
<?php
$sql9 = "SELECT * FROM user_data WHERE id='$user_details'";
$query9 = mysqli_query($conn, $sql9);
if($query9){
    $sql10 = "SELECT * FROM user_data WHERE id='$user_details' AND user_dob IS NULL AND
    user_gender IS NULL AND user_nation IS NULL AND user_address IS NULL";
    $query10 = mysqli_query($conn, $sql10);
    if($query10){
        if(empty($user_row['user_dob']) OR empty($user_row['user_gender']) OR
        empty($user_row['user_nation']) OR empty($user_row['user_address'])){
            ?>
<table class="profile-details">
    <tr>
        <th>Date Of Birth</th>
        <th class="detail">-</th>
    </tr>
    <tr>
        <th>Gender</th>
        <th class="detail">-</th>
    </tr>
    <tr>
        <th>Nationality</th>
        <th class="detail">-</th>
    </tr>
    <tr>
        <th>Permanent Address</th>
        <th class="detail">-</th>
    </tr>
</table>
<?php
        }
        else{
            ?>
<table class="profile-details">
    <tr>
        <th>Date Of Birth</th>
        <th class="detail"><?php echo date('d-m-Y', strtotime($user_row['user_dob'])); ?></th>
    </tr>
    <tr>
        <th>Gender</th>
        <th class="detail"><?php echo $user_row['user_gender']; ?></th>
    </tr>
    <tr>
        <th>Nationality</th>
        <th class="detail"><?php echo $user_row['user_nation']; ?></th>
    </tr>
    <tr>
        <th>Permanent Address</th>
        <th class="detail"><?php echo $user_row['user_address']; ?></th>
    </tr>
</table>
<?php
        }
    }
}
?>
<h1 class="profile-text">Document Details</h1>
<?php
$sql11 = "SELECT * FROM user_data WHERE id='$user_details'";
$query11 = mysqli_query($conn, $sql11);
if($query11){
    $sql12 = "SELECT * FROM user_data WHERE id='$user_details' AND user_dob IS NULL AND
    user_gender IS NULL AND user_nation IS NULL AND user_address IS NULL";
    $query12 = mysqli_query($conn, $sql12);
    if($query12){
        if(empty($user_row['user_document'])){
            ?>
<table class="profile-details">
    <tr>
        <th>Document ID</th>
        <th class="detail">-</th>
    </tr>
</table>
<?php
    }
    else{
         ?>
<table class="profile-details">
    <tr>
        <th>Document ID</th>
        <th class="detail"><?php echo $user_row['user_document']; ?></th>
    </tr>
</table>
<?php
    }
}
}
?>
<h1 class="profile-text" style="font-size: 1.3rem; text-align:center;"><a href="usersettings.php">
Click here</a> to add or update further details.</h1>
<div class="bar">
    <hr size="8">
</div>
<?php
include("footer.php");
?>
