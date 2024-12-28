<?php
$conn = mysqli_connect("localhost", "root", "", "online_hms") or die("connection error");

if (isset($_POST['submit'])) {
    $Full_Name = $_POST['Full_Name'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $C_password = $_POST['C_Password'];

    $sql = "INSERT INTO `userl` (`Full_Name`, `Email`, `Password`, `C_Password`) 
            VALUES ('$Full_Name', '$Email', '$Password', '$C_password')";
    
    $result = mysqli_query($conn, $sql);

    if ($result) {
        ?>
           <script>
                    window.location.href="login.php";
           </script>
           
        <?php
    } 
    else
     {
         ?>
            <script>
                window.location.href="signup.php"
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
    <title>Sign Up | Hotel Management System</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="signup.css">
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
    <!-- Sign Up Form Section -->
    <div class="signup-container">
        <div class="signup-card">
            <div class="signup-header">
                <h2>Create an Account</h2>
                <p>Join us today!</p>
            </div>
            <form method="POST" onsubmit="return Valid()">
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="Full_Name" id="name" placeholder="Full Name">
                </div>
                <div class="input-group">
                    <i class="fas fa-envelope"></i>
                    <input type="text" name= "Email" id="email" placeholder="Email Address">
                </div>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="Password" id="password" placeholder="Password">
                </div>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="C_Password" id="cpassword" placeholder="Confirm Password">
                </div>
                <button type="submit"name="submit" class="signup-btn">Sign Up</button>
            </form>
            <!-- <div class="footer-links">
                <p>Already have an account? <a href="login.html">Log In</a></p>
            </div> -->
            <!-- <div class="footer-links">
                <p>Already have an account? <a href="login.html" id="login-link">Log In</a></p>
            </div> -->
            <div class="footer-links">
                <p>Already have an account? <a href="login.html" class="login-link">Log In</a></p>
            </div>
            
        </div>
    </div>

    <!-- JavaScript -->
     <!-- JavaScript -->
     <script>
        const menuIcon = document.querySelector('.menu-icon');
        const navbarUl = document.querySelector('.navbar ul');

        menuIcon.addEventListener('click', () => {
            navbarUl.classList.toggle('active');
        });
    

    
      function Valid(){
        var name=document.getElementById("name").value;
        var email=document.getElementById("email").value;
        var password=document.getElementById("password").value;
        var cpassword=document.getElementById("cpassword").value;
        var nameRegex=/^[A-Za-z\s]+$/;
        var emailRegex=/^([A-Za-z0-9\.]+@+[A-Za-z]+(\.)+[A-Za-z]{2,})$/;
if(name ===""|| email==="" || password==="" || cpassword ==="")
            {
                   alert("All field are mandatory");
                   return false;     
            }
else if(!nameRegex.test(name)) {
                    alert("Name must be characters only!"); 
                    return false; 
                 }
else if(!emailRegex.test(email))
             {
                alert("Invalid Email");
             }

else if(password !== cpassword)
           {
               alert("Please Enter the same password");
                return false;
           }
else if(password.length !== 8 )
           {
            alert("password must be atleast 8 characters !");
           }
 else
           return true;
                  
      }
    </script>
</body>
</html>
