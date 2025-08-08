<?php
// Command Injection test variation #256
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>