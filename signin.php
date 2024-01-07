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

    
    <link rel="stylesheet" href="signin.css">
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
            <li class="navitem"><a class="active" href="signin.php">Sign Up</a></li>
            <li class="navitem"><a  href="login.php">Login</a></li>        
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
        <div class="register-box">
            <h2>Sign Up</h2>
            <form method="POST" action="">
                <div class="user-box">
                    <input type="text" name="fname" required>
                    <label>First Name</label>
                </div>
                <div class="user-box">
                    <input type="text" name="lname" required>
                    <label>Last Name</label>
                </div>
                <div class="user-box">
                    <input type="text" name="email" required>
                    <label>Email</label>
                </div>
                
                <div class="user-box">
                <label class="passwordy">password</label>
                    <input type="password" id="password" />
                </div> 

                <div class="user-box">
                <label class="passwordy">Confirm Password</label>
                    <input type="password" id="password2" />
                </div>

                <div class="user-box">
                    <input type="checkbox" id="showPassword" />
                <label>Show password</label>
                </div>

                <div class="submit">
                    <input type="submit" name="submit" class="submit" value="REGISTER">
                </div>

            </form>
        </div>
    </div>

        <script>
document.getElementById('showPassword').onclick = function() {
    if ( this.checked ) {
    document.getElementById('password').type = "text";
    document.getElementById('password2').type = "text";
    } else {
    document.getElementById('password').type = "password";
    document.getElementById('password2').type = "password";
    }
};
        </script>
        <script src="script.js"></script>
    </body>
</html>