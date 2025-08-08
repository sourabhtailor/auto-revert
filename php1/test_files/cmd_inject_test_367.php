<?php
// Command Injection test variation #367
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>