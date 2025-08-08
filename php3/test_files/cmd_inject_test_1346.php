<?php
// Command Injection test variation #1346
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>