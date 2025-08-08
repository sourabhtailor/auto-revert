<?php
// Command Injection test variation #467
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>