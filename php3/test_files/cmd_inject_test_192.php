<?php
// Command Injection test variation #192
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>