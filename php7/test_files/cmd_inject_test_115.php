<?php
// Command Injection test variation #115
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>