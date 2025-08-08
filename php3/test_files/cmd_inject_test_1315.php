<?php
// Command Injection test variation #1315
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>