<?php
// Command Injection test variation #343
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>