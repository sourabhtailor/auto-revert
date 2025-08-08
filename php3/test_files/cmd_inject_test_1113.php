<?php
// Command Injection test variation #1113
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>