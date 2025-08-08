<?php
// Command Injection test variation #267
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>