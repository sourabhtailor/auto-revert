<?php
// Command Injection test variation #166
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>