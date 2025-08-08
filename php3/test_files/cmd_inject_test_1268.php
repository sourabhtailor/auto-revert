<?php
// Command Injection test variation #1268
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>