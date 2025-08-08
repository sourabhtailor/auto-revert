<?php
// Command Injection test variation #1415
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>