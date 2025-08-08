<?php
// Command Injection test variation #433
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>