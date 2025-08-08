<?php
// Command Injection test variation #1437
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>