<?php
// Command Injection test variation #415
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>