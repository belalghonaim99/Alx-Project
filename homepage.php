<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="./assets/css/homepage.css">
</head>
<body>
    <div class="container">
    <a href="#" class="logo">
                <img src="./assets/images/logo.png" width="190" height="28" alt="realstate">
            </a>
      <p class="welcome-message">
       Hello  <?php 
       if(isset($_SESSION['email'])){
        $email = $_SESSION['email'];
        $query = mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row = mysqli_fetch_array($query)){
            echo $row['firstName'].' '.$row['lastName'];
        }
       }
       ?>
       :)
      </p>
      <a href="logout.php" class="logout-link">Logout</a>
    </div>
</body>
</html>
