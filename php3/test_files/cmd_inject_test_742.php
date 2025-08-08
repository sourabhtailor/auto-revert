<?php
// Command Injection test variation #742
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>