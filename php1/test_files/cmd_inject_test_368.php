<?php
// Command Injection test variation #368
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>