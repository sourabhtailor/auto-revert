<?php
// Command Injection test variation #1414
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>