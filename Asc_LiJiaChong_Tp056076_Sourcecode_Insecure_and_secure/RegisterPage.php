<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #fffffd;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-image: url('background1.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center center;
    }

    .register-container {
      background-color: rgba(255, 255, 255, 0.7);
      border-radius: 8px;
      padding: 100px;
      box-shadow: 0 4px 8px rgba(201, 251, 108, 0.1);
      max-width: 300px;
      margin: 50px auto;
    }

    .register-container h1 {
      text-align: center;
      color: #faf32e;
    }

    .register-form {
      display: flex;
      flex-direction: column;

    }

    .register-form label,
    .register-form input {
      margin-bottom: 10px;
    }

    .register-form input[type="text"],
    .register-form input[type="password"] {
      padding: 15px;
      border: 1px solid #ccc;
      border-radius: 8px;
    }

    .register-form input[type="submit"] {
      padding: 10px;
      background-color: #d9f758;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .register-form input[type="submit"]:hover {
      background-color: #e6f58f;
    }

    .show-password-container {
      display: flex;
      align-items: center;
      margin-bottom: 10px;
    }

    .show-password-container label {
      margin-left: 5px;
    }

    .scrolling-text-container {
      overflow: hidden;
    }

    .scrolling-text {
      animation: marquee 15s linear infinite;
      white-space: nowrap;
      font-family: Verdana, sans-serif;
      font-size: 23px;
      color: #bbef44;
      text-shadow: 5px 5px 5px rgba(154, 183, 28, 0.1), 10px 10px 10px rgba(167, 243, 16, 0.2);

    }

    @keyframes marquee {
      0% {
        transform: translateX(100%);
      }

      100% {
        transform: translateX(-100%);
      }
    }
  </style>
</head>

<body>
  <div class="scrolling-text-container">
    <p class="scrolling-text">Vulnerable Website Register Page</p>

    <div class="register-container">
      <h1>Register</h1>

      <form class="register-form" action="RegisterPage.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <div class="show-password-container">
          <input type="checkbox" id="showPassword" onchange="togglePasswordVisibility()">
          <label for="showPassword">Show Password</label>
        </div>

        <script>
          function togglePasswordVisibility() {
            var passwordInput = document.getElementById("password");
            var showPasswordCheckbox = document.getElementById("showPassword");

            if (showPasswordCheckbox.checked) {
              passwordInput.type = "text";
            } else {
              passwordInput.type = "password";
            }
          }
          </script>
      
      <a href="Loginpage.php">
      <label for="Log">Go Login</label>
      </a>

      <input type="submit" value="Register">
    </form>
  </div >
</body >
</html >

<?php
session_start();

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'users_db';

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
  die('<script> alert ("Error due to connection with the database")</script>');
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];


  if (empty($username) || empty($password)) {
    $error = "Please fill in all the fields.";
  } else {

    $sql_check_username = "SELECT * FROM users WHERE username='$username'";
    $result_check_username = mysqli_query($conn, $sql_check_username);
    if (mysqli_num_rows($result_check_username) > 0) {
      $error = "Username already taken. Please choose a different one.";
    } else {

      $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
      if (mysqli_query($conn, $sql)) {
        echo '<script> alert ("Registration successful - you can redirect to login page or homepage")</script>';
        echo '<script>window.location.href = "Loginpage.php"</script>';
      } else {
        echo '<script> alert("Error occurred during registration. Please try again later.")</script>';
      }
    }
  }
}
mysqli_close($conn);
?>