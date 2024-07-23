<?php
include('includes/configure.php');
session_start();
$error = "Invalid Login Credentials";
if (isset($_POST['submit'])) {
    $admin_un = $_POST['admin_un'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM admin_login WHERE admin_id='$admin_un' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['admin_id'] = $row['admin_id'];
        header("Location: admin.php");
    } else {
        $_SESSION['error']=$error;
    }
}
if(isset($_POST['msgok'])){
    unset($_SESSION['error']);
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" href="css/loginstyle.css">
    <link rel="stylesheet" href="css/popup.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Amita:wght@400;700&family=Dancing+Script:wght@400;500;600;700&
    family=Island+Moments&family=Moon+Dance&family=Oswald:wght@200;300;400;500;600;700&family=Roboto+Condensed:wght@700&
    family=Vujahday+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Admin Login</title>
</head>
<body>
    <div class="logo">
        <img src="images/logo2.png">
    </div>
    <?php
if (isset($_SESSION['error'])) {
?>
<div class="popup">
<p><?php echo $_SESSION['error']; ?></p>
<form action="admin_login.php" method="POST">
<button type="submit" name="msgok">OK</button>
</form>
</div>
<?php
}
  ?>
    <div class="container">
        <form action="admin_login.php" method="POST" class="admin-login">
            <p class="login-text">Admin Login</p>
            <div class="input">
                <input type="email" placeholder="Admin ID" name="admin_un" required>
            </div>
            <div class="input">
                <input type="password" placeholder="Password" name="password" required="" id="id_pass">
                <span>
                <i class="fa fa-eye" aria-hidden="true" id="eye" onclick="toggle()"></i>
                </span>
            </div>
            <div class="login-button">
                <button name="submit" class="btn">Login</button>
            </div>
        </form>
    </div>
    <script>
        var state=false;
        function toggle(){
            if(state){
                document.getElementById("id_pass").setAttribute("type","password");
                document.getElementById("eye").style.color="grey";
                state=false;
            }
            else
            {
                document.getElementById("id_pass").setAttribute("type","text");
                document.getElementById("eye").style.color="black";
                state=true;
            }
        }
    </script>
</body>
</html>
