<?php
// Command Injection test variation #642
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>