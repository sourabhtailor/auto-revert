<?php
// Command Injection test variation #1342
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>