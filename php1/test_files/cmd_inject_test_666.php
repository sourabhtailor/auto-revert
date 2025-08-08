<?php
// Command Injection test variation #666
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>