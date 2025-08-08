<?php
// Command Injection test variation #418
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>