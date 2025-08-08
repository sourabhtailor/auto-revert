<?php
// Command Injection test variation #366
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>