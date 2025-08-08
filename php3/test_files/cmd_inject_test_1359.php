<?php
// Command Injection test variation #1359
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>