<?php
// Command Injection test variation #833
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>