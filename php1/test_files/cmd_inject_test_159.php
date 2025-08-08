<?php
// Command Injection test variation #159
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>