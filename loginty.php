<?php
session_start();
include("header.php");
?>
<title>STA | THANK YOU</title>
<style>
.welcome{
    
    font-size: 1.4rem;
    letter-spacing: 2px;
    text-align: center;
    padding: 1%;
}  
p{
    margin-top: 8%;
}
.go{
    margin-left: 45%;
    width: 20%;
}
.go button{
    font-family: 'Poppins', sans-serif;
    font-size: 1.5rem;
    font-weight: 200;
    border: none;
    background-color: black;
    width: fit-content;
    margin-bottom: 60%;
    padding: 5px 20px 5px 20px;
    border-radius: 30px;
    cursor: pointer;
}
.go button:hover{
    color: white;
    background-color: #24262b;
}
.go button a{
    text-decoration: none;
    color: white;
    margin-bottom: 4%;
}
</style>
<!--- Login Message --->
<?php
if(isset($_SESSION['hiuser'])){
    ?>
<p></p>    
<h1 class="welcome">Welcome To Sakhi T<i style="color: black;" class="fas fa-smile-beam"></i>urism</h1>
<h1 class="welcome" style="margin-bottom: 1%;font-family: 'Poppins', sans-serif;"><?php echo $_SESSION['user_name']; ?></h1> 
<div class="go">
<button><a href="home.php">Let's Go</a></button>
</div>
<?php    
}
?>
<?php
include("footer.php");
?>