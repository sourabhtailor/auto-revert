<?php
// Command Injection test variation #86
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>