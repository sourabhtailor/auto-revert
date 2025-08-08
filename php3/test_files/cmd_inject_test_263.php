<?php
// Command Injection test variation #263
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>