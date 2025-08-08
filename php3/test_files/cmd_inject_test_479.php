<?php
// Command Injection test variation #479
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>