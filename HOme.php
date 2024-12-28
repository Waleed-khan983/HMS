<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="Home.css"> <!-- Link the CSS file -->
    <!-- Font Awesome CDN for icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
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

    <!-- Container for Sidebar and Main Content -->
    <div class="sidebar" id="sidebar">
        <h2>Dashboard</h2>
        <ul>
            <li><a href="Room.php"><i class="fas fa-bed"></i> Rooms</a></li>
            <li><a href="Guest.php"><i class="fas fa-users"></i> Guests</a></li>
            <li><a href="Employee.php"><i class="fas fa-user-tie"></i> Employees</a></li>
            <li><a href="Payment.php"><i class="fas fa-credit-card"></i> Payments</a></li>
            <li><a href="Booking.php"><i class="bi bi-house-door"></i>Booking</a></li>
            
            <!-- <li><a href="#reservation"><i class="fas fa-calendar-check"></i> Reservations</a></li>
          
           
           
            <li><a href="#orders"><i class="fas fa-box"></i> Orders</a></li>
            <li><a href="#services"><i class="fas fa-cogs"></i> Services</a></li> -->
        </ul>
    </div>
    

        <!-- Main Content -->
        <div class="main-content">
            <div class="welcome-note">
                <h1>Welcome to our Hotel Management System</h1>
                <p>Experience luxury and comfort like never before!</p>
            </div>
            
            
            
            
            <div class="city-images">
                <h2>Popular Hotels</h2>
                 
                <div class="city">
                    <img src="first.jpg" alt="New York">
                    <p></p>
                </div>
                <div class="city">
                    <img src="second.jpg" alt="Tokyo">
                    <p></p>
                </div>
                <div class="city">
                    <img src="thirdhotel.jpg" alt="Tokyo">
                    <p></p>
                    </div>
                <div class="city">
                    <img src="fourthhotel.jpg" alt="Tokyo">
                    <p></p>
                </div>

                <div class="city">
                    <img src="fifthhotel.jpg" alt="Tokyo">
                    
                </div
                 
            </div>
        </div>
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
 

