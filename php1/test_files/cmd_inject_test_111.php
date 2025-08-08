<?php
// Command Injection test variation #111
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>