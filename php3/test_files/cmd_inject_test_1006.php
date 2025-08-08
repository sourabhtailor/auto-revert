<?php
// Command Injection test variation #1006
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>