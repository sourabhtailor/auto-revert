<?php
// Command Injection test variation #1082
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>