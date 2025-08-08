<?php
// Command Injection test variation #907
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>