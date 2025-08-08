<?php
// Command Injection test variation #674
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>