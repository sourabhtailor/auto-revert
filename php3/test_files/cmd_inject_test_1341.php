<?php
// Command Injection test variation #1341
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>