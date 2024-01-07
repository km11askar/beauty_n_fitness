<?php
include 'includes/db.php';
?>

<?php
if (isset($_POST['submit'])) 
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $repass = $_POST['repass'];

  // local query
    $sql = "INSERT INTO staff(fname,lname,mail,pass,repass) VALUES ('$fname','$lname','$email','$pass','$repass')";

    $res = $con->query($sql);

if ($res == true){
        echo "<script>alert ('Data Inserted');</script>";
}
else{
        echo "<script>alert('Data Failed');</script>";
}

}

?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">

    
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Home</title>
</head>
    <body>

    <div class="container">
        <nav>
        <div class="logo">
            <span class="beauty">Beauty &</span><span class="fitness">Fitness</span>
        </div>
    
        
        <ul class="navmenu">
            <li class="navitem"><a  href="index.php">Home</a></li>
            <li class="navitem"><a  href="fitness.php">Fitness</a></li>
            <li class="navitem"><a  href="Makeup.php">Makeup</a></li>
            <li class="navitem"><a  href="haircare.php">Hair Care</a></li>
            <li class="navitem"><a  href="skincare.php">Skin Care</a></li>
            <li class="navitem"><a  href="aboutus.php">About</a></li>
            <li class="navitem"><a  href="AboutNSBM.php">About NSBM</a></li>
            <li class="navitem"><a  href="signin.php">Sign Up</a></li>
            <li class="navitem"><a class="active" href="login.php">Login</a></li>        
        </ul>

        <form class="searchform">
            <input type="text" placeholder="Search">
            <button><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>

        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>

        </nav>

    <div class="main">
        <div class="login-box">
            <h2>LogIn</h2>
            <form>
                <div class="user-box">
                    <input type="text" name="email" required>
                    <label>Username</label>
                </div>
                <div class="user-box">
                    <input type="password" name="pass" class="pass" required>
                    <label>Password</label>
                </div>
                <div class="check">
                    <input type="checkbox" id="passwordshow" class="show">
                    <label for="passwordshow">show</label>
                </div>
                <a href="#">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    logIn 
                </a>    
                </form>
        </div>
    </div>


        <script>
            const show = document.querySelector(".show");
            const pass = document.querySelector(".pass");

            show.addEventListener("click",()=>{
                if(show.checked){
                    pass.setAttribute("type", "text");
                }
                else{
                    pass.setAttribute("type", "password");
                }
            })
        </script>
        <script src="script.js"></script>
    </body>
</html>