<?php
// Command Injection test variation #552
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>