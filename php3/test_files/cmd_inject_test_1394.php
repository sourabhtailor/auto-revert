<?php
// Command Injection test variation #1394
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>