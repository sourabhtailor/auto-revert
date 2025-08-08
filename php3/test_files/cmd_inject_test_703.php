<?php
// Command Injection test variation #703
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>