<?php
// Command Injection test variation #1174
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>