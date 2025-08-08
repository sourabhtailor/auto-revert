<?php
// Command Injection test variation #1189
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>