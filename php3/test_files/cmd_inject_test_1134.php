<?php
// Command Injection test variation #1134
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>