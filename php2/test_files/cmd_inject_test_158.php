<?php
// Command Injection test variation #158
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>