<?php
session_start();
include("header.php");
?>
<title>STA | THANK YOU</title>
<style>
.welcome{
    font-family: 'Mochiy Pop P One', sans-serif;
    font-size: 2rem;
    letter-spacing: 4px;
    text-align: center;
    margin-top: 2%;
}  
p{
    margin-top: 5%;
}
.go{
    margin-left: 40%;
    margin-top: 2%;
    width: 30%;
}
.go button{
    font-family: 'Poppins', sans-serif;
    font-size: 1.5rem;
    font-weight: bold;
    border: none;
    background-color: rgb(170, 168, 168);
    width: fit-content;
    margin-bottom: 5%;
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
}
</style>
<!--- Login Message --->
<?php
if(isset($_SESSION['msg2'])){
    ?>
<p></p>  
<h1 class="welcome">Welcome To Smiles T<i style="color: Black;" class="fas fa-smile-beam"></i>Tourism</h1>  
<h1 class="welcome">Hurray!!! Your Account Has Been Created Successfully</h1>
<div class="go">
<button><a href="userlogin.php">Please Login Again !!!</a></button>
</div>
<?php    
}
?>
<?php
include("footer.php");
?>