<?php
session_start();
include("header.php");
include("configuration.php");
if(isset($_POST['login'])){
    $login_email = $_POST['login_email'];
    $login_password = md5($_POST['login_password']);
    $sql3 = "SELECT * FROM user_data WHERE user_email='$login_email' 
    AND user_password='$login_password'";
    $query3 = mysqli_query($conn, $sql3);
    $sql4 = "SELECT * FROM user_data WHERE user_email='$login_email'";
    $query4 = mysqli_query($conn, $sql4);
    if(mysqli_num_rows($query3) >0 ){
        $details = mysqli_fetch_assoc($query4);
        $_SESSION['user_details'] = $details['id'];
        $_SESSION['user_email'] = $details['user_email'];
        $_SESSION['user_name'] = $details['user_fullname'];
        $_SESSION['hiuser'] = "WELCOME TO SMILES FOR MILES";
        header("location: loginty.php");
    }
    else{
        if(!(mysqli_num_rows($query4) > 0)){
            $_SESSION['msg4'] = "You dont't have account with email !";
            header("location: userlogin.php");
        }
        else{
            $_SESSION['msg5'] = "Incorrect Email Id Or Password !";
            header("location: userlogin.php");
        }
    }
}
?>
<?php
if(isset($_POST['popup1'])){
    unset($_SESSION['msg4']);
}
elseif(isset($_POST['popup2'])){
    unset($_SESSION['msg5']);
}
?>
<link rel="stylesheet" href="css/forms.css">
<title>STA | LOGIN</title>
<?php
if(isset($_SESSION['msg4'])){
    ?>
<div class="popup">    
<p><?php echo $_SESSION['msg4']; ?></p><br>
<form action="userlogin.php" method="POST">
    <button type="submit" name="popup1">OK</button>
</form>
</div>
<?php    
}
elseif(isset($_SESSION['msg5']))
{
    ?>
<div class="popup">    
<p><?php echo $_SESSION['msg5']; ?></p><br>
<form action="userlogin.php" method="POST">
    <button type="submit" name="popup2">OK</button>
</form> 
</div>
<?php
}
?>
<form action="userlogin.php" method="POST">
    <h1 class="form-text">Login</h1>
    <input type="email" name="login_email" placeholder="Email" required><br>
    <input type="password" name="login_password" placeholder="Password"
    required id="show"><br>
    <div class="showcheckbox">
        <input class="checkbox" type="checkbox" onclick="showpass()">
        <h3>Show Password</h3>
    </div>
    <div class="form-pass">
    <a href="userforgotpassword.php">Forgot Password?</a>
    </div>
    <h2 class="form-btn"><button type="submit" name="login">Login</button></h2><br>
    <hr>
    <p class="user_login_or">OR</p>
    <div class="login_options">
       <i class="fab fa-google"></i>
       <i class="fab fa-facebook-f"></i>
       <i class="fab fa-instagram"></i>
    </div>
    <h3 class="user-signup-msg">Don't have an account ?
    <a href="usersignup.php">Sign up</a></h3>
</form>
<?php
include("footer.php");
?>