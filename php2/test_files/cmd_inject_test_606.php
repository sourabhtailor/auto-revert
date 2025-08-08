<?php
// Command Injection test variation #606
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>