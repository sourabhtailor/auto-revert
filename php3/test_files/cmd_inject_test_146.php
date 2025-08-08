<?php
// Command Injection test variation #146
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>