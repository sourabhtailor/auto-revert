<?php
// Command Injection test variation #1135
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>