<?php
// Command Injection test variation #1325
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>