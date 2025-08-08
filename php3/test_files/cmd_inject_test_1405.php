<?php
// Command Injection test variation #1405
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>