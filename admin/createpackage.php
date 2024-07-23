<?php
include("includes/header.php");
$india="India";
$intl="International";
$pkgmsg="Package Created Successfully";
if (isset($_SESSION['admin_id'])) {
    include('includes/configure.php');
}
if(isset($_POST['submit2']))
{
    $pkglocation = $_POST['location'];
    $pkgname = $_POST['pkgname'];
    $pkgdst = $_POST['pkgdst'];
    $pkgtype = $_POST['pkgtype'];
    $pkgdays = $_POST['pkgdays'];
    $pkgfeature = $_POST['pkgfeature'];
    $pkgprice = $_POST['pkgprice'];
    $abtpackage = $_POST['abtpkg'];
    $uploadimg = $_FILES['uploadimg']['name'];
    if($pkglocation==$india)
    {
        $pkgquery1 = "INSERT INTO india_packages(pkg_location,pkg_name,pkg_dst,pkg_type,pkg_duration,pkg_features,pkg_price,about_package,pkg_img)
        VALUES('$pkglocation','$pkgname','$pkgdst','$pkgtype','$pkgdays','$pkgfeature','$pkgprice','$abtpackage','$uploadimg')";
        if(mysqli_query($conn, $pkgquery1))
        {
            $file="india_images/".$_FILES['uploadimg']['name'];
            move_uploaded_file($_FILES["uploadimg"]["tmp_name"],$file);
            $_SESSION['pkgmsg']=$pkgmsg;
            header("Location: createpackage.php");
        }   
    }
    else
    {
        $pkgquery2 = "INSERT INTO intl_packages(pkg_location,pkg_name,pkg_dst,pkg_type,pkg_duration,pkg_features,pkg_price,about_package,pkg_img)
        VALUES('$pkglocation','$pkgname','$pkgdst','$pkgtype','$pkgdays','$pkgfeature','$pkgprice','$abtpackage','$uploadimg')";
        if(mysqli_query($conn, $pkgquery2))
        {
            $file="international_images/".$_FILES['uploadimg']['name'];
            move_uploaded_file($_FILES["uploadimg"]["tmp_name"],$file);
            $_SESSION['pkgmsg']=$pkgmsg;
            header("Location: createpackage.php");
        }
    }
}
?>
<?php
if(isset($_POST['crtpackok']))
{
    unset($_SESSION['pkgmsg']);
}
?>
<link rel="stylesheet" href="css/popup.css">
<link rel="stylesheet" href="css/createpackage.css">
<title>Admin | Create Package</title>
<h1 class="crtpack-text"><u>Create Package</u></h1>
<?php
if(isset($_SESSION['pkgmsg']))
{
    ?>
<div class="popup1">
<p><?php echo "$pkgmsg";?></p>
<form action="createpackage.php" method="POST">
<button type="submit" name="crtpackok">OK</button>
</form>
</div>   
<?php
}
?>
<div class="crtpack-form">
    <form action="createpackage.php" method="POST" enctype="multipart/form-data">
        <div class="packtxt">
            <h3>Package Creation</h3>
        </div>
        <div class="field">
        <label class="packcrt-text">Package</label>
        <input type="radio" name="location" value="India" required>&nbsp;India
        <input type="radio" name="location" value="International" required>&nbsp;International<br>
        <label class="packcrt-text">Package Name</label>
        <input class="pkginput" type="text" name="pkgname"placeholder="Enter Package Name" required><br>
        <label class="packcrt-text">Package Destination</label>
        <input class="pkginput" type="text" name="pkgdst"placeholder="Enter Package Destination" required><br>
        <label class="packcrt-text">Package Type</label>
        <input type="radio" name="pkgtype" value="Couple" required>&nbsp;Couple
        <input type="radio" name="pkgtype" value="Family" required>&nbsp;Family
        <input type="radio" name="pkgtype" value="Friends" required>&nbsp;Friends<br>
        <label class="packcrt-text">Package Duration</label>
        <input class="pkginput" type="number" name="pkgdays" placeholder="Enter Package Duration" required><br>
        <label class="packcrt-text">Package Features</label>
        <input class="pkginput" type="text" name="pkgfeature" placeholder="Enter Package Feature" required><br>
        <label class="packcrt-text">Package Price</label>
        <input class="pkginput" type="number" name="pkgprice" placeholder="Enter Package Price In Rupees" required><br>
        <label class="packcrt-text">About  Package
        <textarea rows="10" name="abtpkg" placeholder="Enter about package"></textarea></label><br>
        <label class="packcrt-text">Upload Image</label>
        <input type="file" name="uploadimg" id="uploadimg" required><br>
        <div class="crtpack-btns">
        <a href="admin.php">Cancel</a>
        <button name="submit2" class="crtbtn">Create Package</button>
        </div>
        </div>
    </form>
</div>
<?php
include("includes/footer.php");
?>