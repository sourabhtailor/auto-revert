<?php
// Command Injection test variation #324
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>