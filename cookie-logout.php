<?php
session_start();

//ลบค่าใน $_COOKIE['username']
setcookie('uername','', time() - 3600, '/');

// Redirect กลับไปที่หน้า Form
header("Location: cookie-login.php");
exit();
?>
