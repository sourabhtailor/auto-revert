<?php
// Command Injection test variation #1009
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>