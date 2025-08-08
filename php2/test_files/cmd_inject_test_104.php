<?php
// Command Injection test variation #104
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>