<?php
// Command Injection test variation #612
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>