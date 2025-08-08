<?php
// Command Injection test variation #702
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>