<?php
// Command Injection test variation #587
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>