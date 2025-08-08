<?php
// Command Injection test variation #172
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>