<?php
// Command Injection test variation #782
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>