<?php
// Command Injection test variation #1446
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>