<?php
// Command Injection test variation #441
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>