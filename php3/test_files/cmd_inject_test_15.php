<?php
// Command Injection test variation #15
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>