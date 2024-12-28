<?php
$con=mysqli_connect("localhost","root","","online_hms") or die("connection error");


if(isset($_POST['submit']))

{
    $Amount_Paid=$_POST['Amount_Paid'];
    $Amount_Date=$_POST['Amount_Date'];
    $Payment_Method=$_POST['Payment_Method'];

    $sql="INSERT INTO `payment` ( `Amount_Paid`, `Payment_Date`, `Payment_Method`) VALUES ( '$Amount_Paid', '$Amount_Date', '$Payment_Method')";


    $result=mysqli_query($con,$sql);
    if($result)
    {
        ?>
           <script>
            window.alert("Payment has been done");
           </script>
        <?php
    }
    else
    {
         ?>
           <script>
            window.location.href="Payment.php";
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
    <title>Payment Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="Payment.css">
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


    <!-- Payment Form -->
    <div class="form-container">
        <form class="payment-form" method="POST">
            <h1><i class="fas fa-credit-card"></i> Payment Details</h1>
            <!-- <div class="form-group">
                <label for="payment-id"><i class="fas fa-key"></i> Payment ID</label>
                <input type="text" id="payment-id" placeholder="Enter unique Payment ID" required>
            </div>
            <div class="form-group">
                <label for="booking-id"><i class="fas fa-calendar-check"></i> Booking ID</label>
                <input type="text" id="booking-id" placeholder="Enter Booking ID" required>
            </div> -->
            <div class="form-group">
                <label for="amount-paid"><i class="fas fa-dollar-sign"></i> Amount Paid</label>
                <input type="number" id="amount-paid" name="Amount_Paid" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="payment-date"><i class="fas fa-calendar-day"></i> Payment Date</label>
                <input type="date" name="Amount_Date" id="payment-date" required>
            </div>
            <div class="form-group">
                <label for="payment-method"><i class="fas fa-credit-card"></i> Payment Method</label>
                <select id="payment-method" name="Payment_Method" required>
                    <option value="">Select Method</option>
                    <option value="cash">Cash</option>
                    <option value="credit-card">Credit Card</option>
                    <option value="debit-card">Debit Card</option>
                    <option value="online">Online</option>
                </select>
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