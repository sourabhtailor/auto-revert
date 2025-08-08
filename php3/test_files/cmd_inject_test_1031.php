<?php
// Command Injection test variation #1031
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>