<?php
// Command Injection test variation #260
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>