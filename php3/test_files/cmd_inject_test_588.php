<?php
// Command Injection test variation #588
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>