<?php
// Command Injection test variation #468
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>