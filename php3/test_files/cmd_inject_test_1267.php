<?php
// Command Injection test variation #1267
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>