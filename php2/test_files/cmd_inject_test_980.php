<?php
// Command Injection test variation #980
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>