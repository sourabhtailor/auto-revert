<?php
// Command Injection test variation #354
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>