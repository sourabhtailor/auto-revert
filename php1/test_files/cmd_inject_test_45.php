<?php
// Command Injection test variation #45
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>