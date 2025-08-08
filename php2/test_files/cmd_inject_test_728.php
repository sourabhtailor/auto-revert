<?php
// Command Injection test variation #728
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>