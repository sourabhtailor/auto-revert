<?php
// Command Injection test variation #1241
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>