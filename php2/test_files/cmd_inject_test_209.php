<?php
// Command Injection test variation #209
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>