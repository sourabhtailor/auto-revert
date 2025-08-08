<?php
// Command Injection test variation #199
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>