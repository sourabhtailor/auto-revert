<?php
// Command Injection test variation #953
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>