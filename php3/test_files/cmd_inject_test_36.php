<?php
// Command Injection test variation #36
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>