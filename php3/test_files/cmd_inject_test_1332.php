<?php
// Command Injection test variation #1332
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>