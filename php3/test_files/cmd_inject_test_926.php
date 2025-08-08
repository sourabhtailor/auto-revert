<?php
// Command Injection test variation #926
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>