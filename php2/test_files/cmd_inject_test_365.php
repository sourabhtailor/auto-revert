<?php
// Command Injection test variation #365
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>