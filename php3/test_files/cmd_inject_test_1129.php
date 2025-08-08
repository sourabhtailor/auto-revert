<?php
// Command Injection test variation #1129
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>