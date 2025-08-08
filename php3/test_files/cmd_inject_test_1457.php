<?php
// Command Injection test variation #1457
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>