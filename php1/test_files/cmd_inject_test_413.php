<?php
// Command Injection test variation #413
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>