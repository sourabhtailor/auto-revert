<?php
// Command Injection test variation #1163
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>