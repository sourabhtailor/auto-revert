<?php
// Command Injection test variation #845
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>