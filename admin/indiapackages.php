<?php
include("includes/header.php");
include("includes/configure.php");
$inddltmsg = "Package Deleted Successfully";
if (isset($_POST['inddelete'])) {
    $inddltid = $_POST['inddelete_pkgid'];
    $inddltquery1 = "SELECT * FROM india_packages WHERE pkgid='$inddltid'";
    $inddltqueryrun1 = mysqli_query($conn, $inddltquery1);
    foreach ($inddltqueryrun1 as $inddltrow) {
        if ($indimgpath = "india_images/" . $inddltrow['pkg_img']) {
            $inddltquery2 = "DELETE FROM india_packages WHERE pkgid='$inddltid'";
            $inddltqueryrun2 = mysqli_query($conn, $inddltquery2);
            if ($inddltqueryrun2) {
                unlink($indimgpath);
                $_SESSION['inddltmsg'] = $inddltmsg;
                header("Location:indiapackages.php");
            }
        }
    }
}
?>
<?php
if (isset($_POST['updtmsgok'])) {
    unset($_SESSION['msgind3']);
} elseif (isset($_POST['dltmsgok'])) {
    unset($_SESSION['inddltmsg']);
} elseif (isset($_POST['updterrorok'])) {
    unset($_SESSION['msgind4']);
}
?>
<link rel="stylesheet" href="css/popup.css">
<link rel="stylesheet" href="css/stylepackages.css">
<title>Admin | View Packages | India</title>
<h1 class="packages-txt"><u>India Packages</u></h1>
<?php
if (isset($_SESSION['inddltmsg'])) {
?>
    <div class="popup1">
        <p><?php echo "$inddltmsg"; ?></p>
        <form action="indiapackages.php" method="POST"><button type="submit" name="dltmsgok">OK</button></form>
    </div>
<?php
}
?>
<?php
if (isset($_SESSION['msgind3'])) {
?>
    <div class="popup1">
        <p><?php echo $_SESSION['msgind3']; ?></p>
        <form action="indiapackages.php" method="POST"><button type="submit" name="updtmsgok">OK</button></form>
    </div>
<?php
} elseif (isset($_SESSION['msgind4'])) {
?>
    <div class="popup1">
        <p><?php echo $_SESSION['msgind4']; ?></p>
        <form action="indiapackages.php" method="POST"><button type="submit" name="updterrorok">OK</button></form>
    </div>
<?php
}
?>
<?php
include('includes/configure.php');
$query1 = "SELECT * FROM india_packages";
$query_run1 = mysqli_query($conn, $query1);
?>
<div class="table-packages">
    <table>
        <tr>
            <th>PKG_ID</th>
            <th>PKG_NAME</th>
            <th>PKG_DST</th>
            <th>PKG_TYPE</th>
            <th>PKG_DAYS</th>
            <th>PKG_FEATURES</th>
            <th>PKG_PRICE</th>
            <th>PKG_IMAGES</th>
            <th class="action" colspan="2">ACTION</th>
        </tr>
        <?php
        if (mysqli_num_rows($query_run1) > 0) {
            while ($row = mysqli_fetch_assoc($query_run1)) {
        ?>
                <tr>
                    <td>INDPKG1<?php echo $row['pkgid']; ?></td>
                    <td><?php echo $row['pkg_name']; ?></td>
                    <td><?php echo $row['pkg_dst']; ?></td>
                    <td><?php echo $row['pkg_type']; ?></td>
                    <td><?php echo $row['pkg_duration']; ?> Days</td>
                    <td><?php echo $row['pkg_features']; ?></td>
                    <td>Rs. <?php echo $row['pkg_price']; ?></td>
                    <td><?php echo '<img src="india_images/' . $row['pkg_img'] . '" 
                    width="100px" height="100px" alt="image">' ?></td>
                    <td>
                        <form action="indupdate.php" method="POST">
                            <input type="hidden" name="indpkgid" value="<?php echo $row['pkgid']; ?>">
                            <button class="update" type="submit" name="indupdate">UPDATE</button>
                        </form>
                    </td>
                    <td>
                        <form action="indiapackages.php" method="POST">
                            <input type="hidden" name="inddelete_pkgid" value="<?php echo $row['pkgid']; ?>">
                            <button class="delete" type="submit" name="inddelete">DELETE</button>
                        </form>
                    </td>
                </tr>
        <?php
            }
        } else {
        }
        ?>
    </table>
</div>
<?php
include("includes/footer.php");
?>