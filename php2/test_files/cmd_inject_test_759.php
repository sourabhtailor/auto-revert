<?php
// Command Injection test variation #759
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>