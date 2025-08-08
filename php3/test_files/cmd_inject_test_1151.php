<?php
// Command Injection test variation #1151
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>