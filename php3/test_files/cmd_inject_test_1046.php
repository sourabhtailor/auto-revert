<?php
// Command Injection test variation #1046
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>