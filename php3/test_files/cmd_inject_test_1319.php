<?php
// Command Injection test variation #1319
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>