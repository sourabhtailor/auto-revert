<?php
// Command Injection test variation #465
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>