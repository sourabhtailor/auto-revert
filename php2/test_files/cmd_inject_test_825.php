<?php
// Command Injection test variation #825
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>