<?php
// Command Injection test variation #376
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>