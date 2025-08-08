<?php
// Command Injection test variation #605
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>