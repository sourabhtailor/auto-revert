<?php
// Command Injection test variation #1279
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>