<?php
// Command Injection test variation #1014
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>