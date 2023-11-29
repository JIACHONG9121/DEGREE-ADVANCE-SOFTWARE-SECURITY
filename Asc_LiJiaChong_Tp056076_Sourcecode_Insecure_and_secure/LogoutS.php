<?php
session_start();

// Clear all session variables
$_SESSION = array();

// Destroy the session
session_destroy();
echo '<script> alert ("Logout successfully")</script>';
echo '<script>window.location.href = "LoginpageSecure.php"</script>';
exit();
?>