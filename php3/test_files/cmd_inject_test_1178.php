<?php
// Command Injection test variation #1178
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>