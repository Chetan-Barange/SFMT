<?php
session_start();
if(isset($_SESSION['hiuser'])){
    header("location: home.php");
}
include("header.php");
include("configuration.php");
if(isset($_POST['change'])){
    $fgt_email = $_POST['c_email'];
    $fgt_mobile = $_POST['c_mobile'];
    $fgt_password = md5($_POST['n_pass']);
    $sql5 = "SELECT * FROM user_data WHERE user_email='$fgt_email' AND user_mobile='$fgt_mobile'";
    $query5 = mysqli_query($conn, $sql5);
    $sql6 = "SELECT * FROM user_data WHERE user_email='$fgt_email'";
    $query6 = mysqli_query($conn, $sql6);
    if(mysqli_num_rows($query5) > 0){
        $sql7 = "UPDATE user_data SET user_password='$fgt_password' WHERE user_email='$fgt_email'";
        $query7 = mysqli_query($conn, $sql7);
        if($query7){
            $_SESSION['msg6'] = "Your Account Recovered Succesfully !";
            header("location: userforgotpassword.php");
        }
    }
    else{
        if(!(mysqli_num_rows($query6) > 0)){
            $_SESSION['msg7'] = "Account Doesn't Exist !";
            header("location: userforgotpassword.php");
        }
        else{
            $_SESSION['msg8'] = "Incorrect Email Id or Mobile !";
            header("location: userforgotpassword.php");
        }
    }
}
?>
<?php
if(isset($_POST['popup5'])){
    unset($_SESSION['msg6']);
    header("location: userlogin.php");
}
elseif(isset($_POST['popup6'])){
    unset($_SESSION['msg7']);
}
elseif(isset($_POST['popup7'])){
    unset($_SESSION['msg8']);
}
?>
<link rel="stylesheet" href="css/forms.css">
<title>STA | FORGOT PASSWORD</title>
<?php
if(isset($_SESSION['msg6'])){
    ?>
<div class="popup">    
<p><?php echo $_SESSION['msg6']; ?></p><br>
<form action="userforgotpassword.php" method="POST">
    <button type="submit" name="popup5">OK</button>
</form> 
</div>   
<?php    
}elseif(isset($_SESSION['msg7'])){
    ?>
<div class="popup">    
<p><?php echo $_SESSION['msg7']; ?></p><br>
<form action="userforgotpassword.php" method="POST">
    <button type="submit" name="popup6">OK</button>
</form> 
</div>  
<?php    
}elseif(isset($_SESSION['msg8'])){
    ?>
<div class="popup">    
<p><?php echo $_SESSION['msg8']; ?></p><br>
<form action="userforgotpassword.php" method="POST">
    <button type="submit" name="popup7">OK</button>
</form> 
</div>
<?php    
}
?>
<form action="userforgotpassword.php" method="POST">
    <h1 class="form-text">Forgot Password</h1>
    <input type="email" placeholder="Email" name="c_email" required><br>
    <input type="text" placeholder="Mobile number" name="c_mobile" required><br>
    <input type="password" placeholder="Create New Password" 
    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
    title="Password length should be at least 8 &#x0a;At least one special character &#x0a;At least one uppercase letter &#x0a;At least one lowercase letter &#x0a;At least one number"
    name="n_pass" required id="show"><br>
    <div class="showcheckbox">
        <input class="checkbox" type="checkbox" onclick="showpass()">
        <h3>Show Password</h3>
    </div>
  <h2 class="form-btn"><button type="submit" name="change">Submit</button></h2><br>
</form>
<?php
include("footer.php");
?>