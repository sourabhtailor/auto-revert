<?php
// Command Injection test variation #108
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>