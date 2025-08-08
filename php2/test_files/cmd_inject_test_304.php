<?php
// Command Injection test variation #304
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>