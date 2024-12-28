<?php

$conn= mysqli_connect("localhost","root","","online_hms") or die("connection error");

if(isset($_POST['submit']))
{
    
    $Email=$_POST['Email'];
    $Password=$_POST['Password'];

    $sql= "SELECT  * FROM  `userl` WHERE  Email = '$Email' AND  Password = '$Password'";


    $result=mysqli_query($conn,$sql);
    if($result -> num_rows > 0)
    {
        ?>
            <script>
                window.location.href="HOme.php";
            </script>
        <?php
    }
    else
    {
        ?>
            <script>
                window.alert("You Entered Invlaid Login credintials");
            </script>
        <?php
    }
 
}
 
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Hotel Management System</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <img src="logo.jpg" alt="Logo" class="logo">
        <h2>Hotel Management System</h2>
        <ul>
            <li><a href="HOme.php"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="about.php"><i class="fas fa-info-circle"></i> About Us</a></li>
            <li><a href="contact.php"><i class="fas fa-phone-alt"></i> Contact Us</a></li>
            <li><a href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a></li>
            <li><a href="signup.php"><i class="fas fa-user-plus"></i> Sign Up</a></li>
        </ul>
        <div class="menu-icon">&#9776;</div>
    </div>


    <!-- Login Form Section -->
    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <h2>Welcome Back</h2>
                <p>Log in to your account</p>
            </div>
            <form method="POST" onsubmit="return Valid()">
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" id="email" name="Email" placeholder="Email" >
                </div>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" id="password" name="Password" placeholder="Password" >
                </div>
                <button type="submit" name="submit" class="login-btn">Log In</button>
            </form>
            <div class="footer-links">
                <a href="#">Forgot Password?</a>
                <span>|</span>
                <a href="signup.php">Sign Up Here</a>
            </div>
        </div>
    </div>

     <!-- JavaScript -->
     <script>
        const menuIcon = document.querySelector('.menu-icon');
        const navbarUl = document.querySelector('.navbar ul');

        menuIcon.addEventListener('click', () => {
            navbarUl.classList.toggle('active');
        });

 function Valid(){
              var email=document.getElementById("email").value;
              var password=document.getElementById("password").value;
              var EmailRegex= /^([A-Za-z0-9\.]+@+[A-Za-z]+(\.)+[A-Za-z]{2,})$/;
    if(email==="" || password==="")
              {
                alert("ALL field are mandatory ");
                return false;
              }
    else if(!EmailRegex.test(email))
            {
                alert("Invalid Email");
                return false;
            }
        else
        {
            return true;
        }
}

    </script>
</body>
</html>
