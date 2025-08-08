<?php
// Command Injection test variation #1313
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>