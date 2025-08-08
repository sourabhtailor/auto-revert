<?php
// Command Injection test variation #187
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>