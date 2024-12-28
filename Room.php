<?php
$con=mysqli_connect("localhost","root","","online_hms") or die("error");

if(isset($_POST['submit']))
{
    $Room_Type=$_POST['Room_Type'];
    $Room_Capacity=$_POST['Room_Capacity'];
    $Price_per_night=$_POST['Price_per_night'];

    $sql=" INSERT INTO `room` ( `Room_type`, `Room_capacity`, `price_per_night`) VALUES ( '$Room_Type', '$Room_Capacity', '$Price_per_night')";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        ?>
            <script>
                window.alert("Room has been booked");
            </script>
        <?php
    }
    else
    {
        ?>

             <script>
                window.location.href="Room.php";
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
    <title>Romm Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="navbar.css"> <!-- Navbar styles -->
    <link rel="stylesheet" href="room.css">
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

  

<!-- Room Form -->
<div class="form-container">
    <form class="room-form"method="POST">
        <h1><i class="fas fa-door-open"></i> Add Room Details</h1>
        <!-- <div class="form-group">
            <label for="room-id"><i class="fas fa-key"></i> Room ID</label>
            <input type="text" id="room-id" placeholder="Enter unique Room ID" required>
        </div> -->
        <div class="form-group">
            <label for="room-type"><i class="fas fa-bed"></i> Room Type</label>
            <select id="room-type" name="Room_Type" required>
                <option value="">Select type</option>
                <option value="single">Single</option>
                <option value="double">Double</option>
                <option value="suite">Suite</option>
            </select>
        </div>
        <div class="form-group">
            <label for="capacity"><i class="fas fa-users"></i>Capacity</label>
            <input type="number" name="Room_Capacity" id="capacity" placeholder="" min="1" max="10" required>
        </div>
        <div class="form-group">
            <label for="price"><i class="fas fa-dollar-sign"></i> Price Per Night</label>
            <input type="number" name="Price_per_night" id="price" placeholder="" min="0" step="0.01" required>
        </div>
        <div class="form-buttons">
            <button type="submit" name="submit" class="submit-button"><i class="fas fa-check-circle"></i> Submit</button>
            <button type="reset" name="reset" class="reset-button"><i class="fas fa-times-circle"></i> Reset</button>
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