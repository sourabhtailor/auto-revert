<?php
// Command Injection test variation #1466
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>