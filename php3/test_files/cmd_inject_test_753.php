<?php
// Command Injection test variation #753
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>