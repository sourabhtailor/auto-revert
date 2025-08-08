<?php
// Command Injection test variation #1421
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>