<?php
// Command Injection test variation #1409
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>