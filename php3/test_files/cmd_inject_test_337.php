<?php
// Command Injection test variation #337
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>