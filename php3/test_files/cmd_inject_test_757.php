<?php
// Command Injection test variation #757
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>