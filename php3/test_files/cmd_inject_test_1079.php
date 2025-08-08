<?php
// Command Injection test variation #1079
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>