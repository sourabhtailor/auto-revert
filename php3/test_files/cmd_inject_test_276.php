<?php
// Command Injection test variation #276
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>