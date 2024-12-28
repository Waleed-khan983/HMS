<?php
          $con=mysqli_connect("localhost","root","","online_hms") or die("connection error");

          if(isset($_POST['submit']))
          {

            $Emp_First_Name=$_POST['Emp_First_Name'];
            $Emp_Last_Name=$_POST['Emp_Last_Name'];
            $Emp_Role=$_POST['Emp_Role'];
            $Emp_Email=$_POST['Emp_Email'];
            $Emp_Salary=$_POST['Emp_Salary'];

            $sql=" INSERT INTO `employee` ( `Emp_First_Name`, `Emp_Last_Name`, `Emp_Role`, `Emp_Email`, `Emp_Salary`) VALUES 
                                           ( '$Emp_First_Name', '$Emp_Last_Name', '$Emp_Role', '$Emp_Email', '$Emp_Salary')";
            
            $result=mysqli_query($con,$sql);
            if($result)
            {
              ?>
                <script>
                    window.alert("Employee has been added ");
                </script>
              <?php

            }
            else
            {
                 ?>
                 <script>
                 window.location.href="Employee.php"
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
    <title>Employee Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="navbar.css"> <!-- Navbar styles -->
    <link rel="stylesheet" href="Employee.css">
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

 
 
   
    <!-- Employee Form -->
    <div class="form-container">
        <form class="employee-form" method="POST">
            <h1><i class="fas fa-user-tie"></i> Employee Details</h1>
            <!-- <div class="form-group">
                <label for="employee-id"><i class="fas fa-key"></i> Employee ID</label>
                <input type="text" id="employee-id" placeholder="Enter unique Employee ID" required>
            </div> -->
            <div class="form-group">
                <label for="first-name"><i class="fas fa-user-circle"></i> First Name</label>
                <input type="text" name="Emp_First_Name" id="first-name" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="last-name"><i class="fas fa-user-circle"></i> Last Name</label>
                <input type="text" name="Emp_Last_Name" id="last-name" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="role"><i class="fas fa-briefcase"></i> Role</label>
                <select id="role" name="Emp_Role" required>
                    <option value="">Select Role</option>
                    <option value="manager">Manager</option>
                    <option value="receptionist">Receptionist</option>
                    <option value="housekeeping">Housekeeping</option>
                    <option value="chef">Chef</option>
                    <option value="waiter">Waiter</option>
                </select>
            </div>
            <div class="form-group">
                <label for="email"><i class="fas fa-envelope"></i> Email</label>
                <input type="email" name="Emp_Email" id="email" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="salary"><i class="fas fa-dollar-sign"></i> Salary</label>
                <input type="number" name="Emp_Salary" id="salary" placeholder="" required>
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