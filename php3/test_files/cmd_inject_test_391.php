<?php
// Command Injection test variation #391
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>