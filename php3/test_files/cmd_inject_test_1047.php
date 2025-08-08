<?php
// Command Injection test variation #1047
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>