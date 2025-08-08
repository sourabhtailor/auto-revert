<?php
// Command Injection test variation #224
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>