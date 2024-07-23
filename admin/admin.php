<?php
include('includes/header.php');
include('includes/configure.php');
?>
<link rel="stylesheet" href="css/dashboard.css">
<title>Admin | Dashboard</title>
<?php
$sql6 = "SELECT id FROM user_data ORDER BY id";
$query6 = mysqli_query($conn, $sql6);
$regrow = mysqli_num_rows($query6);
$sql7 = "SELECT bkid FROM user_bookings ORDER BY bkid";
$query7 = mysqli_query($conn, $sql7);
$ttlbkrow = mysqli_num_rows($query7);
?>
<div class="cards">
    <div class="card">
        <i class="fa fa-users" aria-hidden="true"></i>
        <div class="card-text">
            <h3>Users</h3>
            <h3>Registered</h3>
            <h1>_______________</h1>
            <h2><?php echo $regrow; ?></h2>
        </div>
    </div>
    <div class="card">
        <i class="fa fa-book" aria-hidden="true"></i>
        <div class="card-text">
            <h3>Total</h3>
            <h3>Bookings</h3>
            <h1>_______________</h1>
            <h2><?php echo $ttlbkrow; ?></h2>
        </div>
    </div>
    <div class="card">
        <i class="fa fa-briefcase" aria-hidden="true"></i>
        <div class="card-text">
            <h3>Total</h3>
            <h3>Packages</h3>
            <h1>_______________</h1>
            <?php
            $totalquery1 = "SELECT pkgid FROM india_packages ORDER BY pkgid";
            $totalquery2 = "SELECT pkgid FROM intl_packages ORDER BY pkgid";
            $totalqueryrun1 = mysqli_query($conn, $totalquery1);
            $totalqueryrun2 = mysqli_query($conn, $totalquery2);
            $totalqueryrow1 = mysqli_num_rows($totalqueryrun1);
            $totalqueryrow2 = mysqli_num_rows($totalqueryrun2);
            $totalpackages = $totalqueryrow1 + $totalqueryrow2;
            echo '<h2>'.$totalpackages.'</h2>';
            ?>
        </div>
    </div>
    <div class="card">
        <i class="fa fa-envelope-o" aria-hidden="true"></i>
        <div class="card-text">
            <h3>Inbox</h3>
            <h3>Messages</h3>
            <h1>_______________</h1>
            <?php
            $totalquery3 = "SELECT id FROM user_messages ORDER BY id";
            $totalqueryrun3 = mysqli_query($conn, $totalquery3);
            $totalqueryrow3 = mysqli_num_rows($totalqueryrun3);
            echo '<h2>'.$totalqueryrow3.'</h2>';
            ?>
        </div>
    </div>
</div>
<?php
include('includes/footer.php');
?>
</body>

</html>