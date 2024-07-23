<?php 
session_start();
if (!isset($_SESSION['admin_id'])) 
{
    header("Location: admin_login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Amita:wght@400;700&family=Dancing+Script:wght@400;500;600;700&
    family=Island+Moments&family=Moon+Dance&family=Oswald:wght@200;300;400;500;600;700&family=Roboto+Condensed:wght@700&
    family=Vujahday+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="logo-text">
        <div class="header">
            <img src="images/logo3.png" class="logo">
            <ul class="icon">
                <li><i class="fa fa-user-circle" aria-hidden="true"></i>Admin Portal</li>
            </ul>
        </div>
    </div>
    <div class="navbar">
        <ul>
            <li><a href="admin.php"><i class="fa fa-dashboard" aria-hidden="true"></i>Dashboard</a></li>
            <li><a href="bookings.php"><i class="fa fa-address-book" aria-hidden="true"></i>Bookings</a></li>
            <li class="dd1"><i class="fa fa-briefcase" aria-hidden="true"></i>Packages</a>
                <div class="dropdown-1">
                    <ul>
                        <li class="ind"><a href="indiapackages.php"><i class="fa fa-flag" aria-hidden="true"></i>India</a></li>
                        <li class="intl"><a href="internationalpackages.php"><i class="fa fa-plane" aria-hidden="true"></i>International</a></li>
                        <li><a href="createpackage.php"><i class="fa fa-pencil-square" aria-hidden="true"></i>Create Package </a></li>
                    </ul>
                </div>
            </li>
            <li><a href="transactions.php"><i class="fa fa-exchange" aria-hidden="true"></i>Transactions</a></li>
            <li><a href="messages.php"><i class="fa fa-envelope" aria-hidden="true"></i>Messages</a></li>
            <li class="dd2"><i class="fa fa-wrench" aria-hidden="true"></i>Settings</a>
                <div class="dropdown-2">
                    <ul>
                        <li><a href="changepassword.php"><i class="fa fa-key" aria-hidden="true"></i>Change Password</a></li>
                        <li class="la"><a href="logoutadmin.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout Admin</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
    