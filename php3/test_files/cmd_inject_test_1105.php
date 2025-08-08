<?php
// Command Injection test variation #1105
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>