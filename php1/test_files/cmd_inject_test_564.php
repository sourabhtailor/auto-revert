<?php
// Command Injection test variation #564
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>