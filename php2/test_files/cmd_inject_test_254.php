<?php
// Command Injection test variation #254
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>