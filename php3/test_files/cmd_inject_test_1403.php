<?php
// Command Injection test variation #1403
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>