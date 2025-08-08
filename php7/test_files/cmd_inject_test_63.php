<?php
// Command Injection test variation #63
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>