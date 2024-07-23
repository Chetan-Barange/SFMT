<?php
include('includes/header.php');
$passerror = "Password doses not meet the requirement";
$error1 = "Current Password is incorrect";
$msg = "Password Changed Successfully";
if (isset($_SESSION['admin_id'])) {
    include('includes/configure.php');
}
if (isset($_POST['submit'])) {
    $oldpass = $_POST['oldpass'];
    $newpass = $_POST['newpass'];
    $sql_query1 = "SELECT * FROM admin_login WHERE password='$oldpass'";
    $query_fire1 = mysqli_query($conn, $sql_query1);
    if (mysqli_num_rows($query_fire1) === 1) 
    {
        $row = mysqli_fetch_assoc($query_fire1);
        $sql_query2 = "UPDATE admin_login SET password='$newpass' WHERE admin_id='admin@sta' ";
        $query_fire2 = mysqli_query($conn, $sql_query2);
        $_SESSION['msg'] = $msg;
        header('Location: changepassword.php');
    } 
    else{
        $_SESSION['error1'] = $error1;
    }
}
?>
<?php
if(isset($_POST['msgok']))
{
    unset($_SESSION['msg']);
}
elseif(isset($_POST['error1ok']))
{
    unset($_SESSION['error1']);
}
?>
<link rel="stylesheet" href="css/popup.css">
<link rel="stylesheet" href="css/changepass.css">
<title>Admin | Change Password</title>  
<h1 class="cp-text"><u>Change Admin Password</u></h1>
<?php
if (isset($_SESSION['msg'])) {
?>
<div class="popup1">
<p><?php echo "$msg"; ?></p>
<form action="changepassword.php" method="POST">
<button type="submit" name="msgok">OK</button>
</form>
</div>
<?php
} else {
    if (isset($_SESSION['error1'])) {
    ?>
    <div class="popup1">
    <p><?php echo "$error1"; ?></p>
    <form action="changepassword.php" method="POST">
        <button type="submit" name="error1ok">OK</button>
    </form>
    </div>
<?php
    }
}
?>  
<div class="cpass-form">
    <form action="changepassword.php" method="POST" class="admin-login">
        <div class="change-text">
            <h3>Change Password</h3>
        </div>
        <div class="input-text">
            <input type="text" placeholder="Enter Current Password" name="oldpass" required>
        </div>
        <div class="input-text">
            <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
            title="Password Does Not Meet The Requirement" placeholder="Enter New Password" name="newpass" id="np" required>
            <span class="span1">
                <i class="fa fa-eye" aria-hidden="true" id="eye1" onclick="toggle1()"></i>
            </span>
        </div>
        <div class="cfrm-btn">
            <button name="submit" class="btn">Confirm</button>
        </div>
        <div class="rules">
        <h2 class="pass-txt">Password must have :</h2>
            <ol>
                <li>Length should be at least 8</li>
                <li>Have at least one number</li>
                <li>Have at least one special character</li>
                <li>Have at least one capital letter</li>
                <li>Have at least one small letter</li>
            </ol>
        </div>    
    </form>
</div>
<script>
    var state1 = false;

    function toggle1() {
        if (state1) {
            document.getElementById("np").setAttribute("type", "password");
            document.getElementById("eye1").style.color = "grey";
            state1 = false;
        } else {
            document.getElementById("np").setAttribute("type", "text");
            document.getElementById("eye1").style.color = "black";
            state1 = true;
        }
    }
</script>
<?php
include('includes/footer.php');
?>