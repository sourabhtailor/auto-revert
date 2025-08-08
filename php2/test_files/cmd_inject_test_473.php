<?php
// Command Injection test variation #473
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>