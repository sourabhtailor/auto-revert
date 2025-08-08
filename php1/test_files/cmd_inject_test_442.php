<?php
// Command Injection test variation #442
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>