<?php
// Command Injection test variation #543
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>