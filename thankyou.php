<?php
session_start();
include("header.php");
?>
<title>STA | THANK YOU</title>
<?php
if(isset($_SESSION['hiuser'])){
    ?>
<h1><?php echo $_SESSION['hiuser']; ?></h1>  
<?php    
}elseif(isset($_SESSION['msg2'])){
    ?>
<h1><?php echo $_SESSION['msg2']; ?></h1> 
<?php    
}
?>