<?php
// Command Injection test variation #201
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>