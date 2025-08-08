<?php
// Command Injection test variation #680
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>