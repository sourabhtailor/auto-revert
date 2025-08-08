<?php
// Command Injection test variation #1428
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>