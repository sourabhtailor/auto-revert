<?php
// Command Injection test variation #1258
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>