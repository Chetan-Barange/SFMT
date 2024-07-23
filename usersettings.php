<!--- PHP CODING --->
<?php
session_start();
include("header.php");
include("configuration.php");
if (!(isset($_SESSION['hiuser']))) {
    header("location: home.php");
}
//update mobile no. coding
if(isset($_POST['update_mobile'])){
    $user_details = $_SESSION['user_details'];
    $updt_mobile = $_POST['updt_mobile'];
    $sql13 = "UPDATE user_data SET user_mobile='$updt_mobile' WHERE id='$user_details'";
    $query13 = mysqli_query($conn, $sql13);
    if($query13){
        $_SESSION['msg9'] = "Mobile Number Updated Successfully !";
        header("location: usersettings.php");
    }
    else{
        $_SESSION['msg9'] = "OOPS ! Something Went Wrong";
        header("location: usersettings.php");
    }
}
?>
<?php
//update password coding
if(isset($_POST['update_password'])){
    $user_details = $_SESSION['user_details'];
    $oldpass = md5($_POST['old_pass']);
    $newpass = md5($_POST['new_pass']);
    $sql14 = "SELECT * FROM user_data WHERE id='$user_details' AND user_password='$oldpass'";
    $query14 = mysqli_query($conn, $sql14);
    if(mysqli_num_rows($query14) > 0){
        $sql15 = "UPDATE user_data SET user_password='$newpass' WHERE id='$user_details'";
        $query15 = mysqli_query($conn, $sql15);
        $_SESSION['msg10'] = "Password Updated successfully !";
    }
    else{
        $_SESSION['msg10'] = "Current Password is Incorrect !";
    }
}
?>
<?php
//add or update personal details
if(isset($_POST['submit_details'])){
    $dob = date('Y-m-d', strtotime($_POST['dob']));
    $gender = $_POST['gender'];
    $nation = $_POST['countries'];
    $house = $_POST['house'];
    $street = $_POST['street'];
    $pincode = $_POST['pincode'];
    $state = $_POST['state'];
    $add1 = "$house";
    $add2 = ", $street";
    $add3 = " - $pincode";
    $add4 = ", $state";
    $add = $add1.$add2.$add3.$add4;
    $user_details = $_SESSION['user_details'];
    $sql18 = "UPDATE user_data SET user_dob='$dob',user_gender='$gender',user_nation='$nation',user_address='$add'
    WHERE id='$user_details'";
    $query18 = mysqli_query($conn, $sql18);
    if($query18){
            $_SESSION['msg11'] = "Personal Details Submitted Successfully";
        }
        else{
            $_SESSION['msg11'] = "OOPS! Something Went Wrong";
        }
}
//add or update document details
elseif(isset($_POST['submit_doc'])){
    $document = $_POST['document'];
    $docid = $_POST['docid'];
    $user_details = $_SESSION['user_details'];
    $sql21 = "UPDATE user_data SET user_document='$document',user_document_id='$docid'
    WHERE id='$user_details'";
    $query21 = mysqli_query($conn, $sql21);
    if($query21){
        $_SESSION['msg12'] = "Document Added Successfully";
    }
    else{
        $_SESSION['msg12'] = "OOPS! Something Went Wrong";
    }
}
?>
<!--- Session Unset --->
<?php
if(isset($_POST['msgok1'])){
    unset($_SESSION['msg9']);
}elseif(isset($_POST['msgok2'])){
    unset($_SESSION['msg10']);
}elseif(isset($_POST['msgok3'])){
    unset($_SESSION['msg11']);
}elseif(isset($_POST['msgok4'])){
    unset($_SESSION['msg12']);
}
?>
<!--- BODY --->
<link rel="stylesheet" href="css/settings.css">
<link rel="stylesheet" href="css/myaccount.css">
<title>STA | SETTINGS</title>
<h1 class="profile-text" style="text-align: center; font-size:2.1rem; font-weight:bold;">Settings</h1>
</div>
<div class="bar">
    <hr size="8">
</div>
<?php
if(isset($_SESSION['msg9'])){
    ?>
<div class="popup1">
<p><b><?php echo $_SESSION['msg9']; ?></b></p>
<form action="usersettings.php" method="POST">
<button type="submit" name="msgok1"><b>OK</b></button>
</form>
</div>
<?php
}elseif(isset($_SESSION['msg10'])){
    ?>
<div class="popup1">
<p><b><?php echo $_SESSION['msg10']; ?></b></p>
<form action="usersettings.php" method="POST">
<button type="submit" name="msgok2"><b>OK</b></button>
</form>
</div>
<?php
}elseif(isset($_SESSION['msg11'])){
    ?>
<div class="popup1">
<p><b><?php echo $_SESSION['msg11']; ?></b></p>
<form action="usersettings.php" method="POST">
<button type="submit" name="msgok3"><b>OK</b></button>
</form>
</div>
<?php
}elseif(isset($_SESSION['msg12'])){
    ?>
<div class="popup1">
<p><b><?php echo $_SESSION['msg12']; ?></b></p>
<form action="usersettings.php" method="POST">
<button type="submit" name="msgok4"><b>OK</b></button>
</form>
</div>
<?php
}
?>
<h1 style="margin-top: 5%;" class="profile-text">Update Mobile Number</h1>  
<form class="setting-form" action="usersettings.php" method="POST">
    <input type="text" maxlength="10" name="updt_mobile" required placeholder="New Mobile No"><br>
    <button type="submit" name="update_mobile">Update</button>
</form>
<h1 class="profile-text">Update Password</h1>
<form class="setting-form" action="usersettings.php" method="POST">
    <input type="password" name="old_pass" required placeholder="Current Password" id="show1"><br>
    <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
    title="Password length should be at least 8 &#x0a;At least one special character &#x0a;At least one uppercase letter &#x0a;At least one lowercase letter &#x0a;At least one number"
    name="new_pass" required placeholder="New Password" id="show2"><br>
    <div class="showcheckbox">
        <input class="checkbox" type="checkbox" onclick="showpass2()">
        <h3>Show Password</h3>
    </div>
    <button type="submit" name="update_password">Update</button>
</form>
<div class="bar1">
    <hr size="8">
</div>
<h1 class="profile-text" style="text-align: center; font-weight:bold; margin: -1% 0% -1% 0%;">Add or Update Details</h1>
<div class="bar1">
    <hr size="8">
</div>
<h1 class="profile-text">Personal Details</h1>
<form class="setting-form" action="usersettings.php" method="POST">
    <label>Date Of Birth</label><br>
    <input class="detail-input" style="width: 15%; letter-spacing: 0px;" type="date" name="dob" required placeholder="Select Date"><br>
    <label>Gender</label><br>
    <select name="gender" required>
        <option disabled selected>Select Gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Transgender">Transgender</option>
    </select>
    <br><label>Nationality</label><br>
    <?php include("selectcountry.php"); ?><br>
    <label>Address</label><br>
    <input class="detail-input" style="letter-spacing: 0px;" type="text" name="house" required placeholder="House no. / Plot no. / Flat no."><br>
    <input class="detail-input" style="letter-spacing: 0px;" type="text" name="street" required placeholder="Street"><br>
    <input class="detail-input" style="letter-spacing: 0px;" type="text" name="pincode" required placeholder="Pincode"><br>
    <input class="detail-input" style="letter-spacing: 0px;" type="text" name="state" required placeholder="State"><br>
    <button type="submit" name="submit_details">Submit</button>
</form>
<h1 class="profile-text">Document Details</h1>
<form class="setting-form" action="usersettings.php" method="POST">
    <label>Document Type</label><br>
    <?php include("selectdocument.php"); ?><br>
    <input class="detail-input" style="width: 20%; letter-spacing: 0px;" type="text" name="docid" required placeholder="Dcoument ID"><br>
    <button type="submit" name="submit_doc">Submit</button>
</form>
<div class="bar">
    <hr size="8">
</div>
<script>
  function showpass2(){
    var s1 = document.getElementById("show1");
    var s2 = document.getElementById("show2");
    if(s1.type == "password" && s2.type == "password"){
      s1.type = "text";
      s2.type = "text";
    }
    else{
      s1.type = "password";
      s2.type = "password";
    }
  }
</script>
<?php
include("footer.php");
?>