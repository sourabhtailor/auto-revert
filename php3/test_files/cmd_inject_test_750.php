<?php
// Command Injection test variation #750
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>