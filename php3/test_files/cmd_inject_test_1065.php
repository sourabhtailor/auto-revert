<?php
// Command Injection test variation #1065
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>