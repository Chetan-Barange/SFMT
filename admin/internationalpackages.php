<?php
include("includes/header.php");
include('includes/configure.php');
$dltmsg = "Package Deleted Successfully";
if(isset($_POST['delete']))
{
    $dltid = $_POST['delete_pkgid'];
    $dltquery1 = "SELECT * FROM intl_packages WHERE pkgid='$dltid'";
    $dltqueryrun1 = mysqli_query($conn, $dltquery1);
    foreach($dltqueryrun1 as $dltrow)
    {
        if($imgpath = "international_images/".$dltrow['pkg_img'])
        {
            $dltquery2 = "DELETE FROM intl_packages WHERE pkgid='$dltid'";
            $dltqueryrun2 = mysqli_query($conn, $dltquery2);
            if($dltqueryrun2)
            {
                unlink($imgpath);
                $_SESSION['dltmsg']=$dltmsg;
                header("Location:internationalpackages.php");
            }
        }
    }
}
?>
<?php
if(isset($_POST['dltmsgok1']))
{
    unset($_SESSION['dltmsg']);
}
elseif(isset($_POST['updtmsgok1']))
{
    unset($_SESSION['msgintl1']);
}
elseif(isset($_POST['updterrorok1']))
{
    unset($_SESSION['msgintl2']);
}
?>
<link rel="stylesheet" href="css/popup.css">
<link rel="stylesheet" href="css/stylepackages.css">
<title>Admin | View Packages | International</title>
<h1 class="packages-txt"><u>International Packages</u></h1>
<?php
if(isset($_SESSION['dltmsg']))
{
    ?>
    <div class="popup1">
    <p><?php echo $_SESSION['dltmsg']; ?></p>
    <form action="internationalpackages.php" method="POST"><button type="submit" name="dltmsgok1">OK</button></form>
    </div>
<?php
}
if (isset($_SESSION['msgintl1'])) 
{
    ?>
    <div class="popup1">
    <p><?php echo $_SESSION['msgintl1']; ?></p>
    <form action="internationalpackages.php" method="POST"><button type="submit" name="updtmsgok1">OK</button></form>
    </div>
<?php
}
elseif(isset($_SESSION['msgintl2']))
{
    ?>
    <div class="popup1">
    <p><?php echo $_SESSION['msgintl2']; ?></p>
    <form action="indiapackages.php" method="POST"><button type="submit" name="updterrorok1">OK</button></form>
    </div>
<?php
}
?>    
<?php
include('includes/configure.php');
$query1 = "SELECT * FROM intl_packages";
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
            <th>PKG_IMAGE</th>
            <th class="action" colspan="2">ACTION</th>
        </tr>
        <?php
        if (mysqli_num_rows($query_run1) > 0) {
            while ($row = mysqli_fetch_assoc($query_run1)) {
        ?>
                <tr>
                    <td>INLPKG2<?php echo $row['pkgid']; ?></td>
                    <td><?php echo $row['pkg_name']; ?></td>
                    <td><?php echo $row['pkg_dst']; ?></td>
                    <td><?php echo $row['pkg_type']; ?></td>
                    <td><?php echo $row['pkg_duration']; ?> Days</td>
                    <td><?php echo $row['pkg_features']; ?></td>
                    <td>Rs. <?php echo $row['pkg_price']; ?></td>
                    <td><?php echo '<img src="international_images/' . $row['pkg_img'] . '" 
                    width="100px" height="100px" alt="image">' ?></td>
                    <td>
                        <form action="intlupdate.php" method="POST">
                            <input type="hidden" name="pkgid" value="<?php echo $row['pkgid']; ?>">
                            <button class="update" type="submit" name="update">UPDATE</button>
                        </form>
                    </td>
                    <td>
                        <form action="internationalpackages.php" method="POST">
                            <input type="hidden" name="delete_pkgid" value="<?php echo $row['pkgid']; ?>">
                            <button class="delete" type="submit" name="delete">DELETE</button>
                        </form>
                    </td>
                </tr>
        <?php
            }
        }
        ?>
    </table>
</div>
<?php
include("includes/footer.php");
?>