<?php
// Command Injection test variation #173
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>