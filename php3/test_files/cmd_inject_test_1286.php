<?php
// Command Injection test variation #1286
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>