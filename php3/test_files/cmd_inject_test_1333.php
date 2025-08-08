<?php
// Command Injection test variation #1333
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>