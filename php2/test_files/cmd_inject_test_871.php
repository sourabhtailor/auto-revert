<?php
// Command Injection test variation #871
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>