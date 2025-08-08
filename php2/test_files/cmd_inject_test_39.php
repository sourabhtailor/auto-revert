<?php
// Command Injection test variation #39
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>