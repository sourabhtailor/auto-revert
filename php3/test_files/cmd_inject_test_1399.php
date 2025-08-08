<?php
// Command Injection test variation #1399
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>