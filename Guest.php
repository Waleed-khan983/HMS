<?php

      $con=mysqli_connect("localhost","root","","online_hms") or die("Connection error");

      if(isset($_POST['submit']))
       {
           $Guest_First_Name=$_POST['Guest_First_Name'];
           $Guest_Last_Name=$_POST['Guest_Last_Name'];
           $Email=$_POST['Email'];
           $Guest_Phone_Number=$_POST['Guest_Phone_Number'];
           $Guest_Address=$_POST['Guest_Address'];

           $sql=" INSERT INTO `guest` ( `Guest_First_Name`, `Guest_Last_Name`, `Email`, `Guest_Phone_Number`, `Guest_Address`) VALUES 
           ( '$Guest_First_Name', '$Guest_Last_Name', '$Email', '$Guest_Phone_Number', '$Guest_Address')";


         $result=mysqli_query($con,$sql);
         if($result)
         {
            ?>
              <script>
                window.alert("Guest has been added ");
              </script>
            <?php


         }

         else
         {
            ?>
            <script>
                window.location.href="Guest.php";
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
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="navbar.css"> <!-- Navbar styles -->
    <link rel="stylesheet" href="Guest.css">
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

  
  
    <!-- Guest Form -->
    <div class="form-container">
        <form class="guest-form" method="POST">
            <h1><i class="fas fa-user"></i> Add Guest Details</h1>
            <!-- <div class="form-group">
                <label for="guest-id"><i class="fas fa-key"></i> Guest ID</label>
                <input type="text" id="guest-id" placeholder="Enter unique Guest ID" required>
            </div> -->
            <div class="form-group">
                <label for="first-name"><i class="fas fa-user-circle"></i> First Name</label>
                <input type="text" name="Guest_First_Name" id="first-name" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="last-name"><i class="fas fa-user-circle"></i> Last Name</label>
                <input type="text" name="Guest_Last_Name" id="last-name" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="email"><i class="fas fa-envelope"></i> Email</label>
                <input type="email" name="Email" id="email" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="phone"><i class="fas fa-phone-alt"></i> Phone Number</label>
                <input type="text" name="Guest_Phone_Number" id="phone" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="address"><i class="fas fa-map-marker-alt"></i> Address</label>
                <input type="text" name="Guest_Address" id="address" placeholder="" required>
            </div>
            <div class="form-buttons">
                <button type="submit" name="submit" class="submit-button"><i class="fas fa-check-circle"></i> Submit</button>
                <button type="reset" class="reset-button"><i class="fas fa-times-circle"></i> Reset</button>
            </div>
        </form>
    </div>
 

<!-- Footer -->
<div class="footer">
    <img src="logo.jpg" alt="Logo">
    <h2>Hotel Management System</h2>
    <ul>
        <li><a href="#privacy">Privacy Policy</a></li>
        <li><a href="#terms">Terms & Conditions</a></li>
        <li><a href="#faq">FAQs</a></li>
    </ul>
    <footer>© 2024 Hotel management. All rights reserved.</footer>
</div>
    
 <!-- JavaScript -->
 <script>
    const menuIcon = document.querySelector('.menu-icon');
    const navbarUl = document.querySelector('.navbar ul');

    menuIcon.addEventListener('click', () => {
        navbarUl.classList.toggle('active');
    });
</script>
</body>
</html>