<?php
// Command Injection test variation #1289
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>