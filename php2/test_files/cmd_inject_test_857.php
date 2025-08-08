<?php
// Command Injection test variation #857
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>