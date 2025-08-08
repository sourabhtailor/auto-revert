<?php
// Command Injection test variation #1072
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>