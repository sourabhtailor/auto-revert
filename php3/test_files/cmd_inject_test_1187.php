<?php
// Command Injection test variation #1187
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>