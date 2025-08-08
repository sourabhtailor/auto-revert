<?php
// Command Injection test variation #249
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>