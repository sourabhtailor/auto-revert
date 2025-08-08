<?php
// Command Injection test variation #408
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>