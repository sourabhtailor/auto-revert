<?php
// Command Injection test variation #923
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>