<?php
// Command Injection test variation #1186
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>