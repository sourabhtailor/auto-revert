<?php
// Command Injection test variation #165
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>