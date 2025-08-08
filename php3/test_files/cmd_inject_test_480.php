<?php
// Command Injection test variation #480
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>