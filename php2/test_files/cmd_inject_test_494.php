<?php
// Command Injection test variation #494
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>