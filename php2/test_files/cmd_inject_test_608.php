<?php
// Command Injection test variation #608
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>