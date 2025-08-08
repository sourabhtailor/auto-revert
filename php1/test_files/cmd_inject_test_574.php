<?php
// Command Injection test variation #574
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>