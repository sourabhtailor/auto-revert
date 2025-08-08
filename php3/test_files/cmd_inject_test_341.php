<?php
// Command Injection test variation #341
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>