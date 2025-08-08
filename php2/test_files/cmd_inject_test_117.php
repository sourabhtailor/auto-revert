<?php
// Command Injection test variation #117
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>