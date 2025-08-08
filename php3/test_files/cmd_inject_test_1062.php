<?php
// Command Injection test variation #1062
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>