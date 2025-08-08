<?php
// Command Injection test variation #400
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>