<?php
include("includes/header.php");
include("includes/configure.php");
$msg3 = "Package Updated Succesfully";
$msg4 = "Package Does Not Updated";

if (isset($_SESSION['admin_id'])) {
    include('includes/configure.php');
}
if (isset($_POST['submit4'])) 
{
    $indupdtid = $_SESSION['indget_id'];
    $indupdtpkgname = $_POST['indupdtname'];
    $indupdtpkgtype = $_POST['indupdttype'];
    $indupdtdays = $_POST['indupdtdays'];
    $indupdtpkgfeature = $_POST['indupdtfeature'];
    $indupdtpkgprice = $_POST['indupdtprice'];
    $indupdtabtpackage = $_POST['indupdtabtpkg'];
    $indupdtuploadimg = $_FILES['indupdtimg']['name'];
    $indupdtpkgquery1 = "UPDATE india_packages SET pkg_name='$indupdtpkgname', pkg_type='$indupdtpkgtype', 
    pkg_duration='$indupdtdays',pkg_features='$indupdtpkgfeature', pkg_price='$indupdtpkgprice', about_package='$indupdtabtpackage',
    pkg_img='$indupdtuploadimg' WHERE pkgid='$indupdtid'";
    if (mysqli_query($conn, $indupdtpkgquery1)) 
    {
        $file = "india_images/" . $_FILES['indupdtimg']['name'];
        move_uploaded_file($_FILES["indupdtimg"]["tmp_name"], $file);
        $_SESSION['msgind3'] = $msg3;
        header("Location: indiapackages.php");
    }
    else
    {
        $_SESSION['msgind4'] = $msg4;
        header("Location: indiapackages.php");
    }
}
?>
<link rel="stylesheet" href="css/update.css">
<title>Admin | Update Package</title>
<h1 class="updtpack-text"><u>Update Package</u></h1>
<h1 class="updtpack-text1">India Package Updation</h1>
<div class="updtpack-form">   
<?php
if(isset($_POST['indupdate']))
{
    $indpkgid = $_POST['indpkgid'];
    $_SESSION['indget_id'] = $indpkgid;
    $indupdtquery1 = "SELECT * FROM india_packages WHERE pkgid='$indpkgid'";
    $indupdtrun = mysqli_query($conn, $indupdtquery1);
    foreach($indupdtrun as $row)
    {
        ?>    
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="updtpacktxt">
            <h3>Update Package</h3>
        </div>
        <div class="update-field">
            <label class="update-text">Package Name</label>
            <input class="updtinput" type="text" name="indupdtname" value="<?php echo $row['pkg_name']; ?>" placeholder="Enter Package Name" required><br>
            <label class="update-text">Package Type</label>
            <input type="radio" name="indupdttype" value="Couple" required>&nbsp;Couple
            <input type="radio" name="indupdttype" value="Family" required>&nbsp;Family
            <input type="radio" name="indupdttype" value="Friends" required>&nbsp;Friends<br>
            <label class="update-text">Package Duration</label>
            <input class="updtinput" type="number" name="indupdtdays" value="<?php echo $row['pkg_duration']; ?>" placeholder="Enter Package Duration" required><br>
            <label class="update-text">Package Features</label>
            <input class="updtinput" type="text" name="indupdtfeature" value="<?php echo $row['pkg_features']; ?>" placeholder="Enter Package Feature" required><br>
            <label class="update-text">Package Price</label>
            <input class="updtinput" type="text" name="indupdtprice" value="<?php echo $row['pkg_price']; ?>" placeholder="Enter Package Price In Rupees" required><br>
            <label class="update-text">About Package
            <textarea rows="10" name="indupdtabtpkg" placeholder="Enter about package"><?php echo $row['about_package']; ?></textarea></label><br>
            <label class="update-text">Upload Image</label>
            <input type="file" name="indupdtimg"  value="<?php echo $row['pkg_img']; ?>" required><br>
            <div class="action-package">
            <a href="indiapackages.php">Cancel</a>
            <button name="submit4" class="updtbtn">Update Package</button>
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