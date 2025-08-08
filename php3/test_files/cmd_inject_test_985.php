<?php
// Command Injection test variation #985
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>