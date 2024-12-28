<?php

$con=mysqli_connect("localhost","root","","online_hms") or die("connection error");


    if(isset($_POST['submit']))

    {
        $Check_In_Date=$_POST['Check_In_Date'];
        $Check_Out_Date=$_POST['Check_Out_Date'];
        $Total_Amount=$_POST['Total_Amount'];

        $sql="INSERT INTO `booking` ( `Check_In_Date`, `Check_Out_Date`, `Total_Amount`) VALUES ('$Check_In_Date', '$Check_Out_Date', '$Total_Amount')";

        $result=mysqli_query($con,$sql);
        if($result)
        {
            ?>

              <script>
                     window.alert("Booking has been done ");
              </script>
            <?php

        }
        else
        {
            ?>

            <script>
                window.location.href="Booking.php";
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
    <title>Booking Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="navbar.css"> <!-- Navbar styles -->
    <link rel="stylesheet" href="Booking.css">
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

   <!-- Booking Form -->
   <div class="form-container">
    <form class="booking-form" method="POST">
        <h1><i class="fas fa-bookmark"></i> Booking Details</h1>
        <!-- <div class="form-group">
            <label for="booking-id"><i class="fas fa-key"></i> Booking ID</label>
            <input type="text" id="booking-id" placeholder="Enter unique Booking ID" required>
        </div>
        <div class="form-group">
            <label for="guest-id"><i class="fas fa-users"></i> Guest ID</label>
            <input type="text" id="guest-id" placeholder="Enter Guest ID" required>
        </div>
        <div class="form-group">
            <label for="room-id"><i class="fas fa-bed"></i> Room ID</label>
            <input type="text" id="room-id" placeholder="Enter Room ID" required>
        </div> -->
        <div class="form-group">
            <label for="check-in-date"><i class="fas fa-calendar-day"></i> Check-In Date</label>
            <input type="date" name="Check_In_Date" id="check-in-date" required>
        </div>
        <div class="form-group">
            <label for="check-out-date"><i class="fas fa-calendar-day"></i> Check-Out Date</label>
            <input type="date" name="Check_Out_Date" id="check-out-date" required>
        </div>
        <div class="form-group">
            <label for="total-amount"><i class="fas fa-dollar-sign"></i> Total Amount</label>
            <input type="number" name="Total_Amount" id="total-amount" placeholder="" required>
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