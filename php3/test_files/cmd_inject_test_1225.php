<?php
// Command Injection test variation #1225
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>