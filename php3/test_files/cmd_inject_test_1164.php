<?php
// Command Injection test variation #1164
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>