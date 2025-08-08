<?php
// Command Injection test variation #1158
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>