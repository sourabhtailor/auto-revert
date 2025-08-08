<?php
// Command Injection test variation #381
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>