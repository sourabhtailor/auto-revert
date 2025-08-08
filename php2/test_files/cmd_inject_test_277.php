<?php
// Command Injection test variation #277
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>