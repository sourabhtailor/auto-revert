<?php
// Command Injection test variation #1362
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>