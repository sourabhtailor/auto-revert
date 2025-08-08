<?php
// Command Injection test variation #1170
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>