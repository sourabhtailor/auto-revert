<?php
// Command Injection test variation #35
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>