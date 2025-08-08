<?php
// Command Injection test variation #377
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>