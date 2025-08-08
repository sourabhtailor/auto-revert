<?php
// Command Injection test variation #984
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>