<?php
// Command Injection test variation #1057
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>