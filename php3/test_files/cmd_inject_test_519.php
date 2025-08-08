<?php
// Command Injection test variation #519
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>