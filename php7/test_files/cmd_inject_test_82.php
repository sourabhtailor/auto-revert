<?php
// Command Injection test variation #82
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>