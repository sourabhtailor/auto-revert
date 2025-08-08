<?php
// Command Injection test variation #1293
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>