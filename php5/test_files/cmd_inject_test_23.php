<?php
// Command Injection test variation #23
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>