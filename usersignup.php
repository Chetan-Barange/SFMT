<?php
session_start();
if(isset($_SESSION['hiuser'])){
    header("location: home.php");
}
include("header.php");
include("configuration.php");
$msg1 = "Account Already Exist !";
$msg3 = "OOPS! Something Went Wrong";
if(isset($_POST['signup'])){
    $name = $_POST['user_name'];
    $email = $_POST['user_email'];
    $mobile = $_POST['user_mobile'];
    $password = md5($_POST['user_password']);
    $sql1 = "SELECT * FROM user_data WHERE user_email='$email'";
    $query1 = mysqli_query($conn, $sql1);
    if(mysqli_num_rows($query1) > 0){
        $_SESSION['msg1'] = $msg1;
        header("location: usersignup.php");
    }
    else{
        $sql2 = "INSERT INTO user_data(user_fullname,user_email,user_mobile,user_password)
        VALUES('$name','$email','$mobile','$password')";
        $query2 = mysqli_query($conn, $sql2);
        if($query2){
            $_SESSION['msg2'] = "Account Created Successfully!";
            header("location: signupty.php");
        }
        else{
            $_SESSION['msg3'] = $msg3;
            header("location: usersignup.php");
        }
    }
}
?>
<?php
if(isset($_POST['popup3'])){
    unset($_SESSION['msg1']);
}
elseif(isset($_POST['popup4'])){
    unset($_SESSION['msg3']);
}
?>
<link rel="stylesheet" href="css/forms.css">
<title>STA | SIGN UP</title>
<?php
if(isset($_SESSION['msg1'])){
    ?>
<div class="popup">    
<p><?php echo $msg1; ?></p><br>
<form action="usersignup.php" method="POST">
    <button type="submit" name="popup3">OK</button>
</form>
</div>
<?php
}elseif(isset($_SESSION['msg3'])){
    ?>
<div class="popup">    
<p><?php echo $msg3; ?></p><br>
<form action="userlogin.php" method="POST">
    <button type="submit" name="popup4">OK</button>
</form>
</div>
<?php    
}
?>
<form action="usersignup.php" method="POST">
    <h1 class="form-text">Sign Up</h1>
    <input type="text" placeholder="Full Name" name="user_name" required><br>
    <input type="email" placeholder="Email" name="user_email" required><br>
    <input type="text" placeholder="Mobile No" name="user_mobile" maxlength="10" required><br>
    <input type="password" title="Password length should be at least 8 &#x0a;At least one special character &#x0a;At least one uppercase letter &#x0a;At least one lowercase letter &#x0a;At least one number" 
    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Create Password" name="user_password" required id="show"><br>
    <div class="showcheckbox">
        <input class="checkbox" type="checkbox" onclick="showpass()">
        <h3>Show Password</h3>
    </div>
    <div class="showcheckbox">
        <input class="checkbox" type="checkbox" required>
        <h3><a href="#">Terms and Conditions</a></h3>
    </div>
    <h2 class="form-btn"><button type="submit" name="signup">Sign Up</button></h2><br>
    <h3 class="user-signup-msg">Already have a account ?
    <a href="userlogin.php">Login now</a></h3>
</form>
<?php
include("footer.php");
?>