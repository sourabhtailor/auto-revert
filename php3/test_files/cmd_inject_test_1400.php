<?php
// Command Injection test variation #1400
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>