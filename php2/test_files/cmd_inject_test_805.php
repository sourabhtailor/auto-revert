<?php
// Command Injection test variation #805
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>