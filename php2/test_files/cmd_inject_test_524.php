<?php
// Command Injection test variation #524
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>