<?php

$con=mysqli_connect("localhost","root","","online_hms") or die("connection error");

if(isset($_POST['submit']))
{
    $Name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    
    $to="waleedkhansafimd983@gmail.com";
    $subject="Testing this email";
    $headers="From  '$email' ";


    $sql="INSERT INTO `complaint` ( `Name`, `email`, `Message`) VALUES ( '$Name', '$email', '$message')";

    $result=mysqli_query($con,$sql);
    if(mail($to,$subject,$message,$headers))
    {
        echo"email sent sucessfully";
    }
   
    }
    





?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Hotel Management System</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="contact.css">
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <div class="navbar-logo">
            <img src="logo.jpg" alt="Logo" class="logo">
            <h2>Hotel Management system</h2>
        </div>
        <div class="menu-icon" id="menu-icon">
            <i class="fas fa-bars"></i>
        </div>
        <ul class="nav-links" id="nav-links">
            <li><a href="HOme.php"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="about.php"><i class="fas fa-info-circle"></i> About Us</a></li>
            <li><a href="contact.php" class="active"><i class="fas fa-phone-alt"></i> Contact Us</a></li>
            <li><a href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a></li>
            <li><a href="signup.php"><i class="fas fa-user-plus"></i> Sign Up</a></li>
        </ul>
    </div>

    <!-- Contact Us Section -->
    <section class="contact-section">
        <div class="contact-container">
            <h1>Contact Us</h1>
            <p>If you have any questions or need assistance, feel free to get in touch with us!</p>

            <!-- Contact Form -->
            <form action="" method="POST" class="contact-form" onsubmit="return Validate()" >
                <div class="input-group">
                    <input type="text" name="name" id="Name" placeholder="Your Full Name">
                </div>
                <div class="input-group">
                    <input type="text" name="email" id="Email" placeholder="Your Email Address" >
                </div>
                <div class="input-group">
                    <textarea name="message" placeholder="Your Message" rows="6" ></textarea>
                </div>
                <button type="submit" name="submit" class="submit-btn">Send Message</button>
            </form>
        </div>

        <!-- Contact Info Section -->
        <div class="contact-info">
            <div class="info-card">
                <h3>Our Address</h3>
                <p>1234 Jumrood Road, Peshawar, Pakistan</p>
            </div>
            <div class="info-card">
                <h3>Phone Number</h3>
                <p><a href="tel:+1234567890">+1 234 567 890</a></p>
            </div>
            <div class="info-card">
                <h3>Email</h3>
                <p><a href="mailto:contact@khalidkhan.com">contact@hotelManager.com</a></p>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <h2>Find Us Here</h2>
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=..." width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Hotel Management System. All rights reserved.</p>
    </footer>

    <!-- JavaScript -->
    <script>
        const menuIcon = document.getElementById('menu-icon');
        const navLinks = document.getElementById('nav-links');

        menuIcon.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });

         function Validate(){
            var name=document.getElementById("Name").value;
            var email=document.getElementById("Email").value;
            var nameRegex=/^[A-Za-z\s]+$/;

            var emailRegex=/^([A-Za-z0-9\.]+@+[A-Za-z]+(\.)+[A-Za-z]{2,})$/;

             
            if(!nameRegex.test(name))
             {
                alert("Name must be characters only ");
                return false;

             }
             else if(!emailRegex.test(email))
             {
                alert("Please Enter Valid Email !");
                return false;
             }
         }
        
    </script>
</body>
</html>
