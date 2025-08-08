<?php
// Command Injection test variation #164
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>