<?php
// Command Injection test variation #1300
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>