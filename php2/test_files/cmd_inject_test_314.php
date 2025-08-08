<?php
// Command Injection test variation #314
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>