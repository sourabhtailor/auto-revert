<?php
// Command Injection test variation #1327
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>