<?php
// Command Injection test variation #65
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>