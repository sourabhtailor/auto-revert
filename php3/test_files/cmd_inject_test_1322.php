<?php
// Command Injection test variation #1322
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>