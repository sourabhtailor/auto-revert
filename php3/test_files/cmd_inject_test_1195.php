<?php
// Command Injection test variation #1195
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>