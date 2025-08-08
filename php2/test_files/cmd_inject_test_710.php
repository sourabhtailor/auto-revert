<?php
// Command Injection test variation #710
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>