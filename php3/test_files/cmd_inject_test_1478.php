<?php
// Command Injection test variation #1478
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>