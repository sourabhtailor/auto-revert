<?php
// Command Injection test variation #526
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>