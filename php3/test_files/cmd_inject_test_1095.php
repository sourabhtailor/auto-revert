<?php
// Command Injection test variation #1095
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>