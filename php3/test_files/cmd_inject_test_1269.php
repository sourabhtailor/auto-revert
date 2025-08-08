<?php
// Command Injection test variation #1269
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>