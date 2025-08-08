<?php
// Command Injection test variation #1402
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>