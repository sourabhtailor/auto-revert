<?php
// Command Injection test variation #964
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>