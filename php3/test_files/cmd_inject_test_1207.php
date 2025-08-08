<?php
// Command Injection test variation #1207
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>