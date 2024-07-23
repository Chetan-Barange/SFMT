<?php
include("includes/header.php");
include("includes/configure.php");
$msg1 = "Package Updated Succesfully";
$msg2 = "Package Does Not Updated";

if (isset($_SESSION['admin_id'])) {
    include('includes/configure.php');
}
if (isset($_POST['submit3'])) 
{
    $updtid = $_SESSION['get_id'];
    $updtpkgname = $_POST['updtname'];
    $updtpkgtype = $_POST['updttype'];
    $updtdays = $_POST['updtdays'];
    $updtpkgfeature = $_POST['updtfeature'];
    $updtpkgprice = $_POST['updtprice'];
    $updtabtpackage = $_POST['updtabtpkg'];
    $updtuploadimg = $_FILES['updtimg']['name'];
    $updtpkgquery1 = "UPDATE intl_packages SET pkg_name='$updtpkgname', pkg_type='$updtpkgtype', 
    pkg_duration='$updtdays',pkg_features='$updtpkgfeature', pkg_price='$updtpkgprice', about_package='$updtabtpackage',
    pkg_img='$updtuploadimg' WHERE pkgid='$updtid'";
    if (mysqli_query($conn, $updtpkgquery1)) 
    {
        $file = "international_images/" . $_FILES['updtimg']['name'];
        move_uploaded_file($_FILES["updtimg"]["tmp_name"], $file);
        $_SESSION['msgintl1'] = $msg1;
        header("Location: internationalpackages.php");
    }
    else
    {
        $_SESSION['msgintl2'] = $msg2;
        header("Location: internationalpackages.php");
    }
}
?>
<link rel="stylesheet" href="css/update.css">
<title>Admin | Update Package</title>
<h1 class="updtpack-text"><u>Update Package</u></h1>
<h1 class="updtpack-text1">International Package Updation</h1>
<div class="updtpack-form">

<?php
if(isset($_POST['update']))
{
    $pkgid = $_POST['pkgid'];
    $_SESSION['get_id'] = $pkgid;
    $updtquery1 = "SELECT * FROM intl_packages WHERE pkgid='$pkgid'";
    $updtrun = mysqli_query($conn, $updtquery1);
    foreach($updtrun as $row)
    {
        ?>    
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="updtpacktxt">
            <h3>Update Package</h3>
        </div>
        <div class="update-field">
            <label class="update-text">Package Name</label>
            <input class="updtinput" type="text" name="updtname" value="<?php echo $row['pkg_name']; ?>" placeholder="Enter Package Name" required><br>
            <label class="update-text">Package Type</label>
            <input type="radio" name="updttype" value="Couple" required>&nbsp;Couple
            <input type="radio" name="updttype" value="Family" required>&nbsp;Family
            <input type="radio" name="updttype" value="Friends" required>&nbsp;Friends<br>
            <label class="update-text">Package Duration</label>
            <input class="updtinput" type="number" name="updtdays" value="<?php echo $row['pkg_duration']; ?>" placeholder="Enter Package Duration" required><br>
            <label class="update-text">Package Features</label>
            <input class="updtinput" type="text" name="updtfeature" value="<?php echo $row['pkg_features']; ?>" placeholder="Enter Package Feature" required><br>
            <label class="update-text">Package Price</label>
            <input class="updtinput" type="text" name="updtprice" value="<?php echo $row['pkg_price']; ?>" placeholder="Enter Package Price In Rupees" required><br>
            <label class="update-text">About Package
            <textarea rows="10" name="updtabtpkg" placeholder="Enter about package"><?php echo $row['about_package']; ?></textarea></label><br>
            <label class="update-text">Upload Image</label>
            <input type="file" name="updtimg" id="updtimg" value="<?php echo $row['pkg_img']; ?>" required><br>
            <div class="action-package">
            <a href="internationalpackages.php">Cancel</a>
            <button name="submit3" class="updtbtn">Update Package</button>
            </div>
        </div>
    </form>
<?php
    }
}    
?>    
</div>
<?php
include("includes/footer.php");
?>