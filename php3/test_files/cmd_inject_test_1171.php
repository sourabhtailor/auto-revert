<?php
// Command Injection test variation #1171
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>