<?php
// Command Injection test variation #1375
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>