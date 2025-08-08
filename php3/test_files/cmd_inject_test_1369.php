<?php
// Command Injection test variation #1369
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>