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

    .login-container {
      background-color: rgba(255, 255, 255, 0.7);
      border-radius: 8px;
      padding: 100px;
      box-shadow: 0 4px 8px rgba(201, 251, 108, 0.1);
      max-width: 300px;
      margin: 50px auto;
    }

    .login-container h1 {
      text-align: center;
      color: #faf32e;
    }

    .login-form {
      display: flex;
      flex-direction: column;

    }

    .login-form label,
    .login-form input {
      margin-bottom: 10px;
    }

    .login-form input[type="text"],
    .login-form input[type="password"] {
      padding: 15px;
      border: 1px solid #ccc;
      border-radius: 8px;
    }

    .login-form input[type="submit"] {
      padding: 10px;
      background-color: #d9f758;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .login-form input[type="submit"]:hover {
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
    <p class="scrolling-text">Secure Login Page</p>

    <div class="login-container">
      <h1>Login</h1>

      <?php
      if (isset($_GET['username'])) {
        echo  $_GET['username'];
        //<script src="http://localhost/Asc/script.js"></script>
      }
      ?>
      
      <?php if (isset($error)) {
        echo '<p style="color: red;">' . htmlspecialchars($error, ENT_QUOTES, 'UTF-8') . '</p>';
      } ?>


      <form class="login-form" action="LoginpageSecure.php" method="POST">
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

      <a href="RegisterSpage.php">
      <label for="Reg">Go Register</label>
      </a>

      <input type="submit" value="Login">
    </form>
  </div >
</body >
</html >

<?php

//Secure code


session_start();

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'susers_db';

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
  die('<script> alert ("Error due to connection with the database")</script>');
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $username = htmlspecialchars($username, ENT_QUOTES, 'UTF-8');
  $password = htmlspecialchars($password, ENT_QUOTES, 'UTF-8');

  if (empty($username) || empty($password)) {
    $error = "Please fill in all the fields.";
  } else {
    $sql = "SELECT * FROM users WHERE username=?";

    // Create a prepared statement
    $stmt = mysqli_prepare($conn, $sql);

    // Bind the parameters to the prepared statement
    mysqli_stmt_bind_param($stmt, "s", $username);

    // Execute the query
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
      if (password_verify($password, $row['password'])) {
        // Password is correct, store user information in the session
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $row['username'];

        echo '<script>window.location.href = "HomepageS.php"</script>';
        exit();
      } else {

        echo '<script> alert ("Invalid credentials")</script>';
      }
    } else {

      echo '<script> alert ("Invalid credentials")</script>';
    }

    mysqli_stmt_close($stmt);
  }
}
mysqli_close($conn);



?>