<?php
// Command Injection test variation #1331
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>