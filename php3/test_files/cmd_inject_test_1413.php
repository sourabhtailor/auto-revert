<?php
// Command Injection test variation #1413
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>