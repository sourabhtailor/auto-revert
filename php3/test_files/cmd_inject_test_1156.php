<?php
// Command Injection test variation #1156
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>