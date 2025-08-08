<?php
// Command Injection test variation #1326
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>