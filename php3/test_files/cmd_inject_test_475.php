<?php
// Command Injection test variation #475
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>