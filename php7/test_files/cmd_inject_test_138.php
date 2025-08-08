<?php
// Command Injection test variation #138
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>