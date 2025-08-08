<?php
// Command Injection test variation #1284
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>