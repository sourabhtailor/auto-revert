<?php
// Command Injection test variation #869
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>