<?php
// Command Injection test variation #303
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>