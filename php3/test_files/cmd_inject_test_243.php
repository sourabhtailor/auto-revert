<?php
// Command Injection test variation #243
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>