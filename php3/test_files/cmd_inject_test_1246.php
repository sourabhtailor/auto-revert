<?php
// Command Injection test variation #1246
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>