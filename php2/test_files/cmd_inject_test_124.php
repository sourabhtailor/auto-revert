<?php
// Command Injection test variation #124
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>