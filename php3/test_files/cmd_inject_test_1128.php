<?php
// Command Injection test variation #1128
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>