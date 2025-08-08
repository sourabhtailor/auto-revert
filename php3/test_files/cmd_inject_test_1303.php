<?php
// Command Injection test variation #1303
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>