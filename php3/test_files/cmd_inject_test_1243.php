<?php
// Command Injection test variation #1243
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>