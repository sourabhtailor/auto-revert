<?php
// Command Injection test variation #417
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>